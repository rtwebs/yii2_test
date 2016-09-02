<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Organigrama;
use app\models\Dependencias;
use kartik\select2\Select2;
use \yii\db\Query;
/* @var $this yii\web\View */
/* @var $model app\models\Dependencias */
/* @var $form yii\widgets\ActiveForm */

$query = new Query();
$query->select('*')->from('dependencias');
$cmd = $query->createCommand()->queryAll();
?>

<div class="dependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'rid')->widget(Select2::classname(), [
	    'data' => ArrayHelper::map($cmd, 'nid', 'title'),
	    'options' => ['placeholder' => 'Seleccione nivel superior'],
	    'pluginOptions' => [
	        'allowClear' => true
	    ],
	]) ?>

    <?=
    $form->field($model, 'org_id')
         ->dropDownList(
                ArrayHelper::map(Organigrama::find()->all(), 'id', 'name')
                )
    ?>

    <?php // $form->field($model, 'rid')->textInput() ?>

    <?php // $form->field($model, 'org_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
