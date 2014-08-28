<?php

namespace app\components;

use app\models\MenuPanel;
use app\models\Zuser;
use app\models\Vwrole;
use app\assets\AppAsset;


class MenuHelper
{

    public static function getMenu()
    {
        //$role_id = Zuser::findOne(\Yii::$app->user->id)->c_roleid;
        //$parent = 2;
        $user_id = 1;
        $role_id = 1;
        $result = static::getMenuRecrusive($role_id, $user_id);
        //\yii\helpers\VarDumper::dump($result);
        return $result;
    }

    private static function getMenuRecrusive($role_id, $user_id)
    {
        $items = Vwrole::find()
            ->where(['c_parentid' => $role_id])
            ->andWhere(['id' => $user_id])
            ->asArray()
            ->all();


        $result = [];

        foreach ($items as $item) {
            $result[] = [
                'label' => $item['c_name'],
                'url' => ['#'],
                '<li class="divider"></li>',
                //'items' => static::getMenuRecrusive($item['id']),
                'items' => static::getMenuRecrusive($item['c_menuid'], $item['id']),
            ];
        }
        return $result;
    }

}
 