<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ReportesDepartamentos;
/* @var $this yii\web\View */
/* @var $model app\models\ReportesImpresoras */
/* @var $form yii\widgets\ActiveForm */

use kartik\select2\Select2;
?>

<div class="reportes-impresoras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'id')->textInput() ?>

    <?=
    $form->field($model, 'id_departamento')
         ->dropDownList(
                ArrayHelper::map(ReportesDepartamentos::find()->all(), 'id', 'nombre')
                )
    ?>

    <?php
    $data = ArrayHelper::map(ReportesDepartamentos::find()->all(), 'id', 'nombre');
 
    // Tagging support Multiple
    echo '<label class="control-label">Tag Multiple</label>';
    echo Select2::widget([
        'name' => 'ReportesImpresoras[razon]',
        'value' => [], // initial value
        'data' => $data,
        'options' => ['placeholder' => 'Select a color ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'maximumInputLength' => 10
        ],
    ]);
    ?>

    <?php // $form->field($model, 'id_departamento')->textInput() ?>

    <?php // $form->field($model, 'razon')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'id_impresora')->textInput() ?>

    <?php // $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
