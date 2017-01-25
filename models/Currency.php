<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm_currency".
 *
 * @property integer $id
 * @property string $currency
 * @property string $description
 * @property string $exchange_rate
 * @property integer $active
 * @property string $ip_address
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 * @property integer $business_id
 *
 * @property ZBusiness $business
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm_currency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exchange_rate'], 'number'],
            [['active', 'business_id'], 'integer'],
            [['inserttime', 'updatetime'], 'safe'],
            [['business_id'], 'required'],
            [['currency'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 100],
            [['ip_address', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['currency'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'currency' => Yii::t('app', 'Currency'),
            'description' => Yii::t('app', 'Description'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'active' => Yii::t('app', 'Active'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
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
