<?php

namespace tests\codeception\frontend\acceptance;

use dektrium\user\Module;

use tests\codeception\frontend\_pages\SignupPage;
use common\models\User;


class SignupCest
{

    /**
     * This method is called before each cest class test method
     * @param \Codeception\Event\TestEvent $event
     */
    public function _before($event)
    {
    }

    /**
     * This method is called after each cest class test method, even if test failed.
     * @param \Codeception\Event\TestEvent $event
     */
    public function _after($event)
    {
        // User::deleteAll([
        //     'email' => 'tester@mail.com',
        //     'username' => 'tests',
        // ]);

        \Yii::$container->set(Module::className(), [
            'enableConfirmation'       => false,
            'enableGeneratingPassword' => false,
        ]);
    }

    /**
     * This method is called when test fails.
     * @param \Codeception\Event\FailEvent $event
     */
    public function _fail($event)
    {
    }

    /**
     * @param \codeception_frontend\AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     */
    public function testUserSignup($I, $scenario)
    {

         \Yii::$container->set(Module::className(), [
            'enableConfirmation'       => false,
            'enableGeneratingPassword' => false,
        ]);

        $I->wantTo('ensure that signup works');

        $signupPage = SignupPage::openBy($I);
        $I->see('Registro');



        $I->amGoingTo('try to register with empty credentials');
        $signupPage->register('', '', '');

        $I->wait(3);

        $I->see('Username cannot be blank');
        $I->see('Email cannot be blank');
        $I->see('Password cannot be blank');


        $I->wait(3);

        $I->amGoingTo('submit signup form with not correct email');
        $signupPage->register('tester.email', 'tests', '123456');

        $I->wait(3);

        $I->expectTo('see that email address is wrong');
        $I->dontSee('Username cannot be blank.', '.help-block');
        $I->dontSee('Password cannot be blank.', '.help-block');
        $I->see('Email is not a valid email address.', '.help-block');


        

        $I->amGoingTo('submit signup form with correct email');
        $signupPage->register('admin@email.com', 'superadmin', '123456');
        //$signupPage->register('tester@mail.com', 'tests', '123456');

        $I->wait(4);


        //$I->expectTo('see that user has been created');
        //$I->see('been created');

        //$I->wait(10);
    }
}
