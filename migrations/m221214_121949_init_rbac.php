<?php

use yii\db\Migration;

/**
 * Class m221214_121949_init_rbac
 */
class m221214_121949_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    public function up()
    {
        $auth = Yii::$app->authManager;    

        $viewAdminPanel = $auth->createPermission('viewAdminPanel');
        $viewAdminPanel->description = 'Панель администратора';
        $auth->add($viewAdminPanel);

        $createzakaz = $auth->createPermission('createzakaz');
        $createzakaz->description = 'Создать заказ';
        $auth->add($createzakaz);

        $user = $auth->createRole('user');
        $user->description = 'Пользователь';
        $auth->add($user);
        $auth->addChild($user, $createzakaz);

        $administrator = $auth->createRole('administrator');
        $administrator->description = 'Администратор';
        $auth->add($administrator);
        $auth->addChild($administrator, $user);
        $auth->addChild($administrator, $viewAdminPanel);

        $auth->assign($user, 1);
        $auth->assign($admin, 2);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221214_121949_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221214_121949_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
