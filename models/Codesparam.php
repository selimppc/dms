<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ad_codesparam".
 *
 * @property integer $id
 * @property string $TYPE
 * @property string $CODE
 * @property string $description
 * @property string $branch_code
 * @property string $credit_account
 * @property string $debit_account
 * @property string $discount_acount
 * @property string $tax_account
 * @property string $return_account
 * @property string $tax_rate
 * @property string $properties
 * @property string $percentage
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
class Codesparam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad_codesparam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TYPE', 'CODE', 'business_id'], 'required'],
            [['tax_rate', 'percentage'], 'number'],
            [['active'], 'integer'],
            [['insert_time', 'update_time'], 'safe'],
            [['TYPE', 'CODE', 'branch_code', 'credit_account', 'debit_account', 'discount_acount', 'tax_account', 'return_account', 'properties', 'insert_user', 'update_user'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 150],
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
            'description' => Yii::t('app', 'Description'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'credit_account' => Yii::t('app', 'Credit Account'),
            'debit_account' => Yii::t('app', 'Debit Account'),
            'discount_acount' => Yii::t('app', 'Discount Acount'),
            'tax_account' => Yii::t('app', 'Tax Account'),
            'return_account' => Yii::t('app', 'Return Account'),
            'tax_rate' => Yii::t('app', 'Tax Rate'),
            'properties' => Yii::t('app', 'Properties'),
            'percentage' => Yii::t('app', 'Percentage'),
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
