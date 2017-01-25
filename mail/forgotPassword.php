<?php

use yii\helpers\Url;

/**
 * @var string $subject
 * @var \yii\models\User $user
 * @var \yii\models\UserKey $userKey
 */
?>

<h3><?= $subject ?></h3>

<p>Please use this link to reset your password:</p>

<p><?= Url::toRoute(["/user/reset", "key" => $userKey->key], true); ?></p>