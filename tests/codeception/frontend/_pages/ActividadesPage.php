<?php

namespace tests\codeception\frontend\_pages;

use yii\codeception\BasePage;

class ActividadesPage extends BasePage
{

    public $route = 'actividades/create';

    // modified:rbac user dektrium plugin //
     public function submit( $fecha_inicio )
    {
        
        $this->actor->fillField('#actividades-fecha_inicio', $fecha_inicio );
        
        $this->actor->click('button.btn-success');
    }
}
