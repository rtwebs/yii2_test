<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prioridades */

$this->title = 'Create Prioridades';
$this->params['breadcrumbs'][] = ['label' => 'Prioridades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prioridades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
