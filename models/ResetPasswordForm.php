<?php
namespace app\models;

use Yii;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\base\Model;
use yii\web\IdentityInterface;
use app\models\User;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    //Reset Password
    public $old_password;
    public $new_password;
    public $repeat_password;

    /**
     * @var app'\models'\User
     */
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['new_password', 'repeat_password', 'old_password'], 'required', 'on' => ['resetPw'] ],
            ['old_password', 'checkOldPassword', 'on' => ['resetPw']],
            ['repeat_password', 'compare', 'compareAttribute'=>'new_password', 'on'=>['resetPw']],

        ];
    }


    //matching the old password with your existing password.
    public function checkOldPassword($attribute, $params)
    {
        $hash = Security::generatePasswordHash($this->$attribute);
        if(Security::validatePassword($this->password, $hash) == NULL )
            $this->addError($attribute, 'Old password is incorrect.');
    }

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->password = $this->new_password;
        //$user->removePasswordResetToken();

        return $user->save();
    }
}
