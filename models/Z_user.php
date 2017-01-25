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
 * @property string $name
 * @property string $designation
 * @property string $cell_number
 * @property string $branch_code
 * @property integer $c_roleid
 * @property integer $c_active
 * @property integer $c_status
 * @property string $c_expdate
 * @property integer $business_id
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 *
 * @property ZBusiness $business
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
            [['c_roleid', 'c_active', 'c_status', 'business_id'], 'integer'],
            [['id', 'username', 'password', 'auth_key', 'name', 'designation', 'cell_number', 'branch_code', 'c_roleid', 'c_active', 'c_status', 'c_expdate', 'business_id'], 'safe'],
            [['business_id', 'username', 'password', 'name', 'designation', 'cell_number', 'branch_code', 'c_roleid',], 'required'],
            [['username', 'designation', 'branch_code', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['auth_key'], 'string', 'max' => 54],
            [['name'], 'string', 'max' => 100],
            [['cell_number'], 'string', 'max' => 15],
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
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'name' => Yii::t('app', 'Name'),
            'designation' => Yii::t('app', 'Designation'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'c_roleid' => Yii::t('app', 'C Roleid'),
            'c_active' => Yii::t('app', 'C Active'),
            'c_status' => Yii::t('app', 'C Status'),
            'c_expdate' => Yii::t('app', 'C Expdate'),
            'business_id' => Yii::t('app', 'Business ID'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusiness()
    {
        return $this->hasOne(ZBusiness::className(), ['id' => 'business_id']);
    }
}
