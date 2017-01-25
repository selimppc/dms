<?php

use yii\helpers\Url;

/**
 * @var string $subject
 * @var \yii\models\User $user
 * @var \yii\models\Profile $profile
 * @var \yii\models\UserKey $userKey
 */
?>

<h3><?= $subject ?></h3>

<p>Please confirm your email address by clicking the link below:</p>

<p><?= Url::toRoute(["/user/confirm", "key" => $userKey->key], true); ?></p>