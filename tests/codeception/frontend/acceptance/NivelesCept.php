<?php 

use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\common\_pages\LoginPage;
use tests\codeception\frontend\_pages\NivelesPage;

$I = new AcceptanceTester($scenario);

$I->wantTo('test mod-organigrama-NIVELES works fine!');
$I->wait(2);

/// loguearme

$login = LoginPage::openBy($I);

$I->amGoingTo('login in frontend form');
$login->login('superadmin', '123456');

$I->wait(1);

$I->expectTo('see that user is logged');
$I->see('Logout (superadmin)', 'form button[type=submit]');
$I->dontSeeLink('Login');

$I->wait(2);

/// dropdown del menu

$I->see('ADMINISTRACION');
$I->click('ADMINISTRACION');

$I->wait(2);

$I->see('niveles');
$I->click('NIVELES');

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


$I->see('Crear nivel');
$I->click('a[class="btn btn-success"]');

$I->wait(2);


$niveles = NivelesPage::openBy($I);


$I->amGoingTo('create organigrama with empty fields');

$niveles->submit([
	'title' => '',
	'rid' => 0,
	'org_id' => 0
]);

$I->wait(3);


$I->see('Titulo cannot be blank.', '.help-block');
$I->see('Organigrama cannot be blank.', '.help-block');

$I->wait(3);

$I->amGoingTo('create nivel ');
$niveles->submit([
	'title' => 'Nivel de prueba',
	'rid' => 0, // nivel padre
	'org_id' =>  1// id del organigrama
]);

$I->wait(3);

$I->expectTo('validate new organigrama created');
$I->see('Update');

$I->wait(2);