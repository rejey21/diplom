<?php
namespace app\models;
use yii\base\Model;
use app\models\User;
use app\models\AuthAssignment;
use Yii;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $name_polzovatel;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Нужно заполнить поле.'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такой логин уже занят.'],
            ['username', 'string', 'min' => 4, 'max' => 255],
            ['name_polzovatel', 'required', 'message' => 'Нужно заполнить поле.'],
            ['name_polzovatel', 'string','max' => 255],
            ['name_polzovatel', 'match', 'pattern' => '/^[а-яА-ЯёЁ\s]+$/u', 'message' => 'Можно использовать только (кириллицу и пробел)'],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Нужно заполнить поле.'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такая почта уже занята.'],
            ['password', 'required', 'message' => 'Нужно заполнить поле.'],
            ['password', 'string', 'min' => 6],
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        
        if (!$this->validate())
        { 
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->user_password = $this->password;
        $user->name_polzovatel = $this->name_polzovatel;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        if ($user->save())
        {
            $auth = Yii::$app->getAuthManager();
            $role = Yii::$app->authManager->getRole('user');
            $auth->assign($role, $user->getId());    
        }
        return $user;
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'name_polzovatel' => 'ФИО',
            'password' => 'Пароль',
            'email' => 'Почта',
        ];
    }

}