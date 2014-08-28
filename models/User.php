<?php

namespace app\models;

use Yii;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;

use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password, username'], 'required'],
            [['c_branch', 'c_roleid', 'c_active', 'c_status'], 'integer'],
            [['c_expdate', 'inserttime', 'updatetime'], 'safe'],
            [['username', 'c_desig', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['auth_key'], 'string', 'max' => 256],
            [['c_name'], 'string', 'max' => 100],
            [['c_cellno'], 'string', 'max' => 15],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'User Name'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'c_name' => Yii::t('app', 'Full Name'),
            'c_desig' => Yii::t('app', 'Designation'),
            'c_cellno' => Yii::t('app', 'Contact Number'),
            'c_branch' => Yii::t('app', 'Branch'),
            'c_roleid' => Yii::t('app', 'Role Id'),
            'c_active' => Yii::t('app', 'Active'),
            'c_status' => Yii::t('app', 'Status'),
            'c_expdate' => Yii::t('app', 'Expiry date'),
            'inserttime' => Yii::t('app', 'Insert Time'),
            'updatetime' => Yii::t('app', 'Update Time'),
            'insertuser' => Yii::t('app', 'Insert User'),
            'updateuser' => Yii::t('app', 'Update User'),
        ];
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return isset(self::$id) ? new static(self::$id) : null;
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');

    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        //return static::findOne(['c_logid' => $username]);
        return static::find()
            ->where([
                'username' => $username,
                'c_active'=>'1',
                'c_status'=>'1'])
            ->andWhere('c_expdate > NOW()')
            ->one();
    }

    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        //return $this->id;
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($insert){
                $this->password = Security::generatePasswordHash($this->password);
            }
            return true;
        }else{
            return false;
        }
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        //return $this->password === sha1($password);
        //return $this->password=md5($this->password);

        return $this->password=Security::generatePasswordHash($this->password);
    }


    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */


    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        //$this->c_authkey = Security::generateRandomKey();
        $this->auth_key = Security::generateRandomKey();
    }


    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }





}