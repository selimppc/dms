<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm_cusmst".
 *
 * @property integer $id
 * @property integer $customer_code
 * @property string $customer_name
 * @property string $group_code
 * @property string $type_code
 * @property string $address
 * @property string $territory
 * @property string $cell_number
 * @property string $phone_number
 * @property string $fax_number
 * @property string $email_address
 * @property string $branch_code
 * @property string $market_code
 * @property string $sales_person
 * @property string $credit_limit
 * @property string $hub_code
 * @property string $status
 * @property integer $parent_id
 * @property string $ip_address
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 * @property integer $business_id
 *
 * @property ZBusiness $business
 */
class Customermaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm_cusmst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_code', 'customer_name', 'branch_code', 'business_id'], 'required'],
            [['customer_code', 'parent_id', 'business_id'], 'integer'],
            [['credit_limit'], 'number'],
            [['inserttime', 'updatetime'], 'safe'],
            [['customer_name'], 'string', 'max' => 100],
            [['group_code', 'type_code', 'territory', 'branch_code', 'market_code', 'sales_person', 'hub_code', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 250],
            [['cell_number', 'phone_number', 'fax_number'], 'string', 'max' => 15],
            [['email_address'], 'string', 'max' => 150],
            [['status', 'ip_address'], 'string', 'max' => 20],
            [['customer_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'customer_code' => Yii::t('app', 'Customer Code'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'group_code' => Yii::t('app', 'Group Code'),
            'type_code' => Yii::t('app', 'Type Code'),
            'address' => Yii::t('app', 'Address'),
            'territory' => Yii::t('app', 'Territory'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'fax_number' => Yii::t('app', 'Fax Number'),
            'email_address' => Yii::t('app', 'Email Address'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'market_code' => Yii::t('app', 'Market Code'),
            'sales_person' => Yii::t('app', 'Sales Person'),
            'credit_limit' => Yii::t('app', 'Credit Limit'),
            'hub_code' => Yii::t('app', 'Hub Code'),
            'status' => Yii::t('app', 'Status'),
            'parent_id' => Yii::t('app', 'Parent ID'),
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
