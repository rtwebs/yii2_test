<?php

namespace tests\codeception\frontend\_pages;

use \yii\codeception\BasePage;

/**
 * Represents signup page
 * @property \codeception_frontend\AcceptanceTester|\codeception_frontend\FunctionalTester $actor
 */
class SignupPage extends BasePage
{

    public $route = '/user/registration/register';

    /**
     * @param array $signupData
     */
    public function register($email, $username = null, $password = null)
    {
        $this->actor->fillField('#register-form-email', $email);
        $this->actor->fillField('#register-form-username', $username);
        if ($password !== null) {
            $this->actor->fillField('#register-form-password', $password);
        }
        $this->actor->click('Sign up');
    }
}
