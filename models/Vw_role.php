<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "z_vw_role".
 *
 * @property integer $id
 * @property string $c_type
 * @property integer $c_menuid
 * @property string $c_name
 * @property integer $c_parentid
 * @property string $c_redirect
 */
class Vw_role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'z_vw_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'c_menuid', 'c_parentid'], 'integer'],
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
            'c_type' => Yii::t('app', 'Type'),
            'c_menuid' => Yii::t('app', 'Menu Id'),
            'c_name' => Yii::t('app', 'Menu Name'),
            'c_parentid' => Yii::t('app', 'Menu Parent Id'),
            'c_redirect' => Yii::t('app', 'Redirect (url) '),
        ];
    }
}
