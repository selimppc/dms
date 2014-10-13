<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ad_trnparam".
 *
 * @property integer $id
 * @property string $TYPE
 * @property string $CODE
 * @property string $branch_code
 * @property string $description
 * @property integer $ACTION
 * @property integer $last_number
 * @property integer $increment
 * @property integer $active
 * @property string $ip_address
 * @property string $insert_time
 * @property string $update_time
 * @property string $insert_user
 * @property string $update_user
 * @property integer $business_id
 *
 * @property ZBusiness $business
 */
class Trnparam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad_trnparam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TYPE', 'CODE', 'business_id'], 'required'],
            [['ACTION', 'last_number', 'increment', 'active', 'business_id'], 'integer'],
            [['insert_time', 'update_time'], 'safe'],
            [['TYPE', 'branch_code', 'insert_user', 'update_user'], 'string', 'max' => 50],
            [['CODE'], 'string', 'max' => 4],
            [['description'], 'string', 'max' => 100],
            [['ip_address'], 'string', 'max' => 20],
            [['TYPE', 'CODE'], 'unique', 'targetAttribute' => ['TYPE', 'CODE'], 'message' => 'The combination of Type and Code has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'TYPE' => Yii::t('app', 'Type'),
            'CODE' => Yii::t('app', 'Code'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'description' => Yii::t('app', 'Description'),
            'ACTION' => Yii::t('app', 'Action'),
            'last_number' => Yii::t('app', 'Last Number'),
            'increment' => Yii::t('app', 'Increment'),
            'active' => Yii::t('app', 'Active'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'insert_time' => Yii::t('app', 'Insert Time'),
            'update_time' => Yii::t('app', 'Update Time'),
            'insert_user' => Yii::t('app', 'Insert User'),
            'update_user' => Yii::t('app', 'Update User'),
            'business_id' => Yii::t('app', 'Business ID'),
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
