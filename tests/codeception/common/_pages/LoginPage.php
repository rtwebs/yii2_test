<?php

namespace tests\codeception\common\_pages;

use yii\codeception\BasePage;

/**
 * Represents loging page
 * @property \codeception_frontend\AcceptanceTester|\codeception_frontend\FunctionalTester|\codeception_backend\AcceptanceTester|\codeception_backend\FunctionalTester $actor
 */
class LoginPage extends BasePage
{
    // r:login //
    public $route = '/user/security/login';

    // modified:rbac user dektrium plugin //
    public function login($username, $password)
    {
        //$this->actor->fillField('input[name="LoginForm[username]"]', $username);
        $this->actor->fillField('input[name="login-form[login]"]', $username);
        //$this->actor->fillField('input[name="LoginForm[password]"]', $password);
        $this->actor->fillField('input[name="login-form[password]"]', $password);
        $this->actor->click('button[type=submit]');
    }
}
