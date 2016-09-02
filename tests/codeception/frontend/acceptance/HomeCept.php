<?php
use tests\codeception\frontend\AcceptanceTester;

/* @var $scenario Codeception\Scenario */

// -- (1) Home Acceptance Test -- //

$I = new AcceptanceTester($scenario);
$I->wantTo('examen final home works');
$I->amOnPage(Yii::$app->homeUrl);
$I->wait(5);
$I->see('Examen Final');
$I->seeLink('Ingresar');
$I->click('Ingresar');
$I->wait(3);
$I->see('Sign in');
