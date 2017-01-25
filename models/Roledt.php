<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_roledt".
 *
 * @property integer $id
 * @property integer $c_id
 * @property integer $c_menuid
 * @property integer $c_parentid
 * @property string $inserttime
 * @property string $updatetime
 * @property string $insertuser
 * @property string $updateuser
 *
 * @property ZRolehd $c
 */
class Roledt extends \yii\db\ActiveRecord
{
    public $Rolehd;
    public $Menupanel;
    public $Menuparentid;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_roledt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'c_menuid', 'c_parentid'], 'integer'],
            [['c_id', 'c_menuid', 'c_parentid'], 'required'],
            [['c_id', 'inserttime', 'updatetime', 'Rolehd', 'Menupanel', 'Menuparentid'], 'safe'],
            [['insertuser', 'updateuser'], 'string', 'max' => 50],
            [['c_id', 'c_menuid'], 'unique', 'targetAttribute' => ['c_id', 'c_menuid'], 'message' => 'The combination of C ID and C Menuid has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'c_id' => Yii::t('app', 'Role Header'),
            'c_menuid' => Yii::t('app', 'Menu Item'),
            'c_parentid' => Yii::t('app', 'Parent Role id'),
            'inserttime' => Yii::t('app', 'Insert Time'),
            'updatetime' => Yii::t('app', 'Update Time'),
            'insertuser' => Yii::t('app', 'Insert User'),
            'updateuser' => Yii::t('app', 'Update User'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getRolehd()
    {
        return $this->hasOne(Rolehd::className(), ['id' => 'c_id']);
    }

    public function getMenupanel()
    {
        return $this->hasOne(Menupanel::className(), ['id' => 'c_menuid']);
    }

    public function getMenuparentid()
    {
        return $this->hasOne(Menupanel::className(), ['id' => 'c_parentid']);
    }
}
