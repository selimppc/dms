<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm_supmst".
 *
 * @property integer $id
 * @property integer $supplier_code
 * @property integer $group_code
 * @property string $branch_code
 * @property string $supplier_name
 * @property string $address
 * @property string $district
 * @property string $post
 * @property string $post_code
 * @property string $contact_person
 * @property string $phone_number
 * @property string $cell_number
 * @property string $fax_number
 * @property string $email_address
 * @property string $url_address
 * @property string $status
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 * @property string $ip_address
 * @property integer $business_id
 *
 * @property ZBusiness $business
 */
class Suppliermaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm_supmst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_code', 'group_code', 'supplier_name', 'contact_person', 'business_id'], 'required'],
            [['supplier_code', 'group_code', 'business_id'], 'integer'],
            [['inserttime', 'updatetime'], 'safe'],
            [['branch_code', 'district', 'post', 'email_address', 'status', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['supplier_name', 'contact_person', 'url_address'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['post_code'], 'string', 'max' => 10],
            [['phone_number', 'cell_number', 'fax_number'], 'string', 'max' => 15],
            [['ip_address'], 'string', 'max' => 20],
            [['supplier_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'supplier_code' => Yii::t('app', 'Supplier Code'),
            'group_code' => Yii::t('app', 'Group Code'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'address' => Yii::t('app', 'Address'),
            'district' => Yii::t('app', 'District'),
            'post' => Yii::t('app', 'Post'),
            'post_code' => Yii::t('app', 'Post Code'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'fax_number' => Yii::t('app', 'Fax Number'),
            'email_address' => Yii::t('app', 'Email Address'),
            'url_address' => Yii::t('app', 'Url Address'),
            'status' => Yii::t('app', 'Status'),
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
