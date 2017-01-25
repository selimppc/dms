<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_menupanel".
 *
 * @property integer $id
 * @property integer $c_id
 * @property string $c_type
 * @property string $c_name
 * @property string $c_redirect
 * @property integer $c_parentid
 * @property integer $c_sortord
 * @property string $inserttime
 */
class Menupanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_menupanel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'c_parentid', 'c_sortord'], 'integer'],
            [['c_type', 'c_name', 'c_redirect', 'c_parentid'], 'required'],
            [['inserttime'], 'safe'],
            [['c_type'], 'string', 'max' => 4],
            [['c_name'], 'string', 'max' => 100],
            [['c_redirect'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'c_id' => Yii::t('app', 'C ID'),
            'c_type' => Yii::t('app', 'Menu Type'),
            'c_name' => Yii::t('app', 'Menu Name'),
            'c_redirect' => Yii::t('app', 'Menu Link'),
            'c_parentid' => Yii::t('app', 'Menu Parent'),
            'c_sortord' => Yii::t('app', 'Menu Order'),
            'inserttime' => Yii::t('app', 'Insert Time'),


            'menuType.c_name' => Yii::t('app', 'Category'),
            'menuParent.c_name' => Yii::t('app', 'Menu Parent'),
        ];
    }

    public function getMenuType()
    {
        return $this->hasOne(Menupanel::className(), ['id' => 'c_id']);
    }
    public function getMenuParent()
    {
        return $this->hasOne(Menupanel::className(), ['id' => 'c_parentid']);
    }

}
