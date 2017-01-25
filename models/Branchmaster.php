<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm_branchmst".
 *
 * @property integer $id
 * @property string $branch_code
 * @property string $branch_name
 * @property string $currency
 * @property string $exchange_rate
 * @property string $contact_person
 * @property string $designation
 * @property string $address
 * @property string $phone_number
 * @property string $cell_number
 * @property string $fax_number
 * @property integer $active
 * @property string $ip_address
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 */
class Branchmaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm_branchmst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_code', 'branch_name'], 'required'],
            [['exchange_rate'], 'number'],
            [['active'], 'integer'],
            [['inserttime', 'updatetime'], 'safe'],
            [['branch_code', 'currency', 'contact_person', 'designation', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['branch_name'], 'string', 'max' => 150],
            [['address'], 'string', 'max' => 250],
            [['phone_number', 'cell_number', 'fax_number'], 'string', 'max' => 15],
            [['ip_address'], 'string', 'max' => 20],
            [['branch_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'branch_code' => Yii::t('app', 'Branch Code'),
            'branch_name' => Yii::t('app', 'Branch Name'),
            'currency' => Yii::t('app', 'Currency'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'designation' => Yii::t('app', 'Designation'),
            'address' => Yii::t('app', 'Address'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'cell_number' => Yii::t('app', 'Cell Number'),
            'fax_number' => Yii::t('app', 'Fax Number'),
            'active' => Yii::t('app', 'Active'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
        ];
    }
}
