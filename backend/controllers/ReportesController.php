<?php

namespace backend\controllers;

use yii;
use app\models\Actividades;
use app\models\ActividadesSearch;

use yii\data\ActiveDataProvider;

class ReportesController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$searchModel = new ActividadesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        //$dataProvider2 = Actividades::

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        //return $this->render('index');
    }

}
