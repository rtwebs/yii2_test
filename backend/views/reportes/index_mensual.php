<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\Pjax;
use yii\data\ActiveDataProvider;
use app\models\Actividades;
use app\models\ActividadesSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActividadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividades';
$this->params['breadcrumbs'][] = $this->title;

$query = Actividades::find();
$dataProviderSemanal = new ActiveDataProvider([
            'query' => $query,
]);

$query->andFilterWhere(['between', 'created',  '2016-09-01', '2016-09-30']);


?>
<div class="actividades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProviderSemanal,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dependencia',
            'prioridad',
            'estado',
            'fecha_inicio',
            // 'duracion',
            // 'comentario:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
