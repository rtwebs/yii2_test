<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReportesDepartamentos */

$this->title = 'Create Reportes Departamentos';
$this->params['breadcrumbs'][] = ['label' => 'Reportes Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-departamentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
