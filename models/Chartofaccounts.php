<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_chrtofacc".
 *
 * @property integer $id
 * @property string $account_code
 * @property string $description
 * @property string $account_type
 * @property string $account_usage
 * @property integer $first_group
 * @property integer $second_group
 * @property integer $third_group
 * @property string $analytical_code
 * @property string $branch_code
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
class Chartofaccounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_chrtofacc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_code', 'description', 'business_id'], 'required'],
            [['first_group', 'second_group', 'third_group', 'business_id'], 'integer'],
            [['inserttime', 'updatetime'], 'safe'],
            [['account_code', 'branch_code'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['account_type', 'account_usage', 'analytical_code', 'STATUS', 'insertuser', 'updateuser'], 'string', 'max' => 10],
            [['ip_address'], 'string', 'max' => 20],
            [['account_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_code' => Yii::t('app', 'Account Code'),
            'description' => Yii::t('app', 'Description'),
            'account_type' => Yii::t('app', 'Account Type'),
            'account_usage' => Yii::t('app', 'Account Usage'),
            'first_group' => Yii::t('app', 'First Group'),
            'second_group' => Yii::t('app', 'Second Group'),
            'third_group' => Yii::t('app', 'Third Group'),
            'analytical_code' => Yii::t('app', 'Analytical Code'),
            'branch_code' => Yii::t('app', 'Branch Code'),
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
