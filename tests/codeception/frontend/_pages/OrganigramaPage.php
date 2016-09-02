<?php

namespace tests\codeception\frontend\_pages;

use yii\codeception\BasePage;

class OrganigramaPage extends BasePage
{

    public $route = 'organigrama/create';

    // modified:rbac user dektrium plugin //
     public function submit( $organigrama )
    {
        
        $this->actor->fillField('#organigrama-name', $organigrama);
        
        $this->actor->click('button.btn-success');
    }
}
