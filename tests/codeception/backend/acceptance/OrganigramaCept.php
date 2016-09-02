<?php 

use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\common\_pages\LoginPage;
use tests\codeception\frontend\_pages\OrganigramaPage;

$I = new AcceptanceTester($scenario);

$I->wantTo('test mod-organigrama works fine!');
$I->wait(2);

/// loguearme

$login = LoginPage::openBy($I);

$I->amGoingTo('login in frontend form');
$login->login('user', '123456');

$I->wait(1);

$I->expectTo('see that user is logged');
$I->see('Logout (superadmin)', 'form button[type=submit]');
$I->dontSeeLink('Login');

$I->wait(2);

/// dropdown del menu


$I->see('organigramas');
$I->click('organigramas');

$I->wait(2);

/// visualizar y contar registros
$registros = $I->executeInSelenium(function(RemoteWebDriver $webDriver) {
        $rows = $webDriver->findElements(WebDriverBy::xpath('//*[@id="content"]/table/tbody/tr'));
        return $rows;
});

if ($scenario->running()) {
    //Logger::log((string)$registros);
}
// $I->seeMyVar($registros);


$I->wait(2);


$I->see('Crear organigrama');
$I->click('a[class="btn btn-success"]');

$I->wait(2);

/// enviar formulario vacio

$organigrama = OrganigramaPage::openBy($I);

$I->amGoingTo('create organigrama with empty fields');
$organigrama->submit('');

$I->wait(3);

$I->see('Nombre cannot be blank.', '.help-block');


$organigrama = OrganigramaPage::openBy($I);

$I->amGoingTo('create organigrama ');
$organigrama->submit('Organigrama 2018');

$I->wait(3);

$I->expectTo('validate new organigrama created');
$I->see('Update');

$I->wait(2);