<?php

namespace tests\codeception\frontend\_pages;

use yii\codeception\BasePage;

class NivelesPage extends BasePage
{

    public $route = 'nivel/create';

    // modified:rbac user dektrium plugin //
    public function submit(array $fieldData)
    {
        foreach ($fieldData as $field => $value) {
            $inputType = $field === 'title' ? 'textarea' : 'select';

            if( $inputType == 'select' ){

            	if( $value > 0 ) $this->actor->selectOption($inputType . '[name="Niveles[' . $field . ']"]', $value);
            }else{
            	$this->actor->fillField($inputType . '[name="Niveles[' . $field . ']"]', $value);
            }
            
        }
        $this->actor->click('Crear');
    }
}
