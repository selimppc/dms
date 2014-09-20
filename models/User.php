<?php

namespace app\models;

use Yii;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\base\Model;
use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    public $Rolehd;
    public $Business;

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
            [['username', 'password', 'name', 'designation', 'cell_number', 'branch_code', 'business_id', 'c_roleid','c_active', 'c_status'], 'required'],
            [['password'], 'string'],
            [['username'], 'unique'],
            [['username'], 'filter', 'filter' => 'trim'],

            [['id', 'username', 'password', 'auth_key', 'name', 'designation', 'cell_number', 'branch_code', 'c_roleid', 'c_active', 'c_status', 'c_expdate', 'business_id'], 'safe'],

            [['auth_key'], 'string', 'max' => 54],
            [['name'], 'string', 'max' => 100],
            [['cell_number'], 'string', 'max' => 15],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'name' => Yii::t('app', 'Name'),
            'designation' => Yii::t('app', 'Designation'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'c_roleid' => Yii::t('app', 'Role Assign'),
            'c_active' => Yii::t('app', ' Active'),
            'c_status' => Yii::t('app', ' Status'),
            'c_expdate' => Yii::t('app', ' Expdate'),
            'business_id' => Yii::t('app', 'Business Name'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
        ];
    }



    public function getRolehd()
    {
        return $this->hasOne(Rolehd::className(), ['id' => 'c_roleid']);
    }

    public function getBusiness()
    {
        return $this->hasOne(Business::className(), ['id' => 'business_id']);
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

    /* public function beforeSave($insert)
     {
         if(parent::beforeSave($insert)){
             if($insert){
                 $this->password = Security::generatePasswordHash($this->password);
             }
             return true;
         }else{
             return false;
         }
     }*/

    public function beforeSave($insert)
    {
        return $this->password = Security::generatePasswordHash($this->password);
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