<?php

namespace app\components;

use app\models\MenuPanel;
use app\models\Z_user;
use app\models\Vw_role;
use app\assets\AppAsset;


class MenuHelper
{

    public static function getMenu()
    {
        $role_id = Z_user::findOne(\Yii::$app->user->id)->c_roleid;
        $user_id = Z_user::findOne(\Yii::$app->user->id)->id;

        $result = static::getMenuRecrusive($role_id, $user_id);
        //\yii\helpers\VarDumper::dump($result);
        return $result;
    }

    private static function getMenuRecrusive($role_id, $user_id)
    {
        $items = Vw_role::find()
            ->where(['c_parentid' => $role_id])
            ->andWhere(['id' => $user_id])
            ->asArray()
            ->all();

        $result = [];

        foreach ($items as $item) {
            $result[] = [
                'label' => $item['c_name'],
                'url' => $item['c_redirect'],
                '<li class="divider"></li>',
                //'items' => static::getMenuRecrusive($item['id']),
                'items' => static::getMenuRecrusive($item['c_menuid'], $item['id']),
            ];
        }
        return $result;
    }

}
 