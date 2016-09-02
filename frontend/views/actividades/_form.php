<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Dependencias;
use app\models\Prioridades;
use app\models\Estados;
/* @var $this yii\web\View */
/* @var $model app\models\Actividades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actividades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'dependencia')
         ->dropDownList(
                ArrayHelper::map(Dependencias::find()->all(), 'id', 'title')
                )
    ?>

    <?=
    $form->field($model, 'prioridad')
         ->dropDownList(
                ArrayHelper::map(Prioridades::find()->all(), 'id', 'name')
                )
    ?>

    <?=
    $form->field($model, 'estado')
         ->dropDownList(
                ArrayHelper::map(Estados::find()->all(), 'id', 'name')
                )
    ?>
    <?php // $form->field($model, 'prioridad')->textInput() ?>

    <?php // $form->field($model, 'estado')->textInput() ?>



    <?= $form->field($model, 'fecha_inicio')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'comentario')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
