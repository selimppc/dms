<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $c_name
 * @property string $c_desig
 * @property string $c_cellno
 * @property integer $c_branch
 * @property integer $c_roleid
 * @property integer $c_active
 * @property integer $c_status
 * @property string $c_expdate
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 */
class Z_user extends \yii\db\ActiveRecord
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
            [['password', 'username'], 'required'],
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
            'c_cellno' => Yii::t('app', 'Cell Number'),
            'c_branch' => Yii::t('app', 'Branch'),
            'c_roleid' => Yii::t('app', 'Role Id'),
            'c_active' => Yii::t('app', 'Active'),
            'c_status' => Yii::t('app', 'Status'),
            'c_expdate' => Yii::t('app', 'Expiry Date'),
            'inserttime' => Yii::t('app', 'Insert Time'),
            'updatetime' => Yii::t('app', 'Update Time'),
            'insertuser' => Yii::t('app', 'Inser User'),
            'updateuser' => Yii::t('app', 'Update User'),
        ];
    }
}
