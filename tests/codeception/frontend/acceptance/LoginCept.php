<?php
use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\common\_pages\LoginPage;

/* @var $scenario Codeception\Scenario */

// --- Login EXAMEN FINAL --- Acceptance Test --- //

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure login page works');

$loginPage = LoginPage::openBy($I);

$I->wait(3);

# Submit del formulario con campos blank
$I->amGoingTo('submit login form with no data');
$loginPage->login('', '');
$I->expectTo('see validations errors');
$I->see('Login cannot be blank.', '.help-block');
$I->see('Password cannot be blank.', '.help-block');


$I->wait(3);

# Submit del formulario con credenciales no validas
$I->amGoingTo('try to login with wrong credentials');
$I->expectTo('see validations errors');
$loginPage->login('supearadmin', 'adminadminadmin');
$I->expectTo('see validations errors');
$I->see('Invalid login or password', '.help-block');


$I->wait(3);

# Submit del formulario con credenciales VALIDAS!
$I->amGoingTo('try to login with correct credentials');
$loginPage->login('admin', '123456');

$I->wait(5);


$I->expectTo('see that user is logged');
$I->see('Desconectarme (admin)', 'form button[type=submit]');
$I->dontSeeLink('Ingresar');
$I->dontSeeLink('Registro');

$I->wait(3);

$I->click('Desconectarme (admin)');
$I->dontSeeLink('Desconectarme (admin)');
$I->seeLink('Ingresar');
 
 $I->wait(3);
