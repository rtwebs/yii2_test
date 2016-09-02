<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReportesImpresoras */

$this->title = 'Create Reportes Impresoras';
$this->params['breadcrumbs'][] = ['label' => 'Reportes Impresoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-impresoras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
