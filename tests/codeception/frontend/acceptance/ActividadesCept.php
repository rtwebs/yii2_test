<?php 

use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\common\_pages\LoginPage;
use tests\codeception\frontend\_pages\OrganigramaPage;

$I = new AcceptanceTester($scenario);

$I->wantTo('test mod-actividades works fine!');
$I->wait(2);

/// loguearme

$login = LoginPage::openBy($I);

$I->amGoingTo('login in frontend form');
$login->login('user', '123456');

$I->wait(1);

$I->expectTo('see that user is logged');
$I->see('user');
$I->dontSeeLink('Ingresar');

$I->wait(2);

/// dropdown del menu

$I->see('Actividades');
$I->click('Actividades');

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


$I->see('Create actividades');
$I->click('a[class="btn btn-success"]');

$I->wait(2);

/// enviar formulario vacio

$organigrama = ActividadesPage::openBy($I);

$I->amGoingTo('create actividad with empty fields');
$organigrama->submit('');

$I->wait(3);

$I->see('Duracion en Horas cannot be blank.', '.help-block');


$organigrama = ActividadesPage::openBy($I);

$I->amGoingTo('create actividades ');
$organigrama->submit('2017-01-01');

$I->wait(3);

$I->expectTo('validate new actividad created');
$I->see('Update');

$I->wait(2);