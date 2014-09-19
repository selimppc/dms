<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_rolehd".
 *
 * @property integer $id
 * @property string $c_name
 * @property string $c_desc
 * @property integer $c_active
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 *
 * @property ZRoledt[] $zRoledts
 */
class Rolehd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_rolehd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_name', 'c_desc', 'c_active'], 'required'],
            [['c_active'], 'integer'],
            [['inserttime', 'updatetime' ], 'safe'],
            [['c_name', 'insertuser', 'updateuser'], 'string', 'max' => 50],
            [['c_desc'], 'string', 'max' => 150],
            [['c_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'c_name' => Yii::t('app', 'Access Label'),
            'c_desc' => Yii::t('app', 'Role Type'),
            'c_active' => Yii::t('app', 'Status'),
            'inserttime' => Yii::t('app', 'Inserttime'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'insertuser' => Yii::t('app', 'Insertuser'),
            'updateuser' => Yii::t('app', 'Updateuser'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZRoledts()
    {
        return $this->hasMany(ZRoledt::className(), ['c_id' => 'id']);
    }


}
