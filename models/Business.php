<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_business".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $contact_person
 * @property string $address
 * @property string $city
 * @property string $zip_code
 * @property string $country
 * @property string $phone
 * @property string $cell_number
 * @property string $fax_number
 * @property string $url
 * @property string $logo
 * @property string $inserttime
 * @property string $insertuser
 * @property string $updatetime
 * @property string $updateuser
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['address'], 'string'],
            [['address'], 'required'],
            [['inserttime', 'updatetime', 'contact_person', 'city', 'country', 'phone', 'cell_number', 'fax_number', 'company_name', 'zip_code', 'url', 'logo' ], 'safe'],
            [['company_name'], 'string', 'max' => 100],
            [['contact_person', 'city', 'country', 'phone', 'cell_number', 'fax_number'], 'string', 'max' => 50],
            [['zip_code'], 'string', 'max' => 15],
            [['url'], 'string', 'max' => 150],
            [['logo'], 'string', 'max' => 256],
            [['insertuser', 'updateuser'], 'string', 'max' => 20],
            [['company_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'company_name' => Yii::t('app', 'Company Name'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'zip_code' => Yii::t('app', 'Zip Code'),
            'country' => Yii::t('app', 'Country'),
            'phone' => Yii::t('app', 'Phone'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'fax_number' => Yii::t('app', 'Fax Number'),
            'url' => Yii::t('app', 'Url'),
            'logo' => Yii::t('app', 'Logo'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'updateuser' => Yii::t('app', 'Updateuser'),
        ];
    }
}
