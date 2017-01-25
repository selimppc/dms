<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm_productmst".
 *
 * @property integer $id
 * @property string $product_code
 * @property string $product_name
 * @property string $description
 * @property string $class_code
 * @property string $group_code
 * @property string $category_code
 * @property string $sell_rate
 * @property string $cost_price
 * @property string $sell_unit
 * @property string $sell_unit_conversion
 * @property string $purchase_unit
 * @property string $purchase_unit_conversion
 * @property string $stock_unit
 * @property string $stock_unit_conversion
 * @property string $pack_size
 * @property string $stock_type
 * @property string $supplier_code
 * @property integer $maximum_level
 * @property integer $minmum_level
 * @property integer $reorder_level
 * @property string $tax_rate
 * @property string $STATUS
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 * @property string $ip_address
 * @property integer $business_id
 *
 * @property ZBusiness $business
 */
class Productmaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm_productmst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_code', 'product_name', 'business_id'], 'required'],
            [['sell_rate', 'cost_price', 'sell_unit_conversion', 'purchase_unit_conversion', 'stock_unit_conversion', 'tax_rate'], 'number'],
            [['maximum_level', 'minmum_level', 'reorder_level', 'business_id'], 'integer'],
            [['inserttime', 'updatetime'], 'safe'],
            [['product_code', 'sell_unit', 'purchase_unit', 'stock_unit', 'STATUS', 'insertuser', 'updateuser'], 'string', 'max' => 10],
            [['product_name', 'description'], 'string', 'max' => 200],
            [['class_code', 'group_code', 'category_code', 'stock_type', 'supplier_code'], 'string', 'max' => 50],
            [['pack_size', 'ip_address'], 'string', 'max' => 20],
            [['product_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_code' => Yii::t('app', 'Product Code'),
            'product_name' => Yii::t('app', 'Product Name'),
            'description' => Yii::t('app', 'Description'),
            'class_code' => Yii::t('app', 'Class Code'),
            'group_code' => Yii::t('app', 'Group Code'),
            'category_code' => Yii::t('app', 'Category Code'),
            'sell_rate' => Yii::t('app', 'Sell Rate'),
            'cost_price' => Yii::t('app', 'Cost Price'),
            'sell_unit' => Yii::t('app', 'Sell Unit'),
            'sell_unit_conversion' => Yii::t('app', 'Sell Unit Conversion'),
            'purchase_unit' => Yii::t('app', 'Purchase Unit'),
            'purchase_unit_conversion' => Yii::t('app', 'Purchase Unit Conversion'),
            'stock_unit' => Yii::t('app', 'Stock Unit'),
            'stock_unit_conversion' => Yii::t('app', 'Stock Unit Conversion'),
            'pack_size' => Yii::t('app', 'Pack Size'),
            'stock_type' => Yii::t('app', 'Stock Type'),
            'supplier_code' => Yii::t('app', 'Supplier Code'),
            'maximum_level' => Yii::t('app', 'Maximum Level'),
            'minmum_level' => Yii::t('app', 'Minmum Level'),
            'reorder_level' => Yii::t('app', 'Reorder Level'),
            'tax_rate' => Yii::t('app', 'Tax Rate'),
            'STATUS' => Yii::t('app', 'Status'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
            'ip_address' => Yii::t('app', 'Ip Address'),
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
