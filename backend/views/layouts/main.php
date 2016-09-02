<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

$this->title = 'Examen final';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Examen Final - Backend',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Ingresar', 'url' => ['/user/security/login']];
    } else {
        $menuItems[] = ['label' => 'Manejo de usuarios', 'url' => ['/user/admin/index']];

        $menuItems[] = ['label' => 'Reportes', 'url' => ['/reportes/index']];

        if( Yii::$app->user->can('manejo-estados') ){
            $menuItems[] = ['label' => 'Estados', 'url' => ['/estados/index']];    
        }

        if( Yii::$app->user->can('manejo-prioridades') ){
            $menuItems[] = ['label' => 'Prioridades', 'url' => ['/prioridades/index']];    
        }

        if( Yii::$app->user->can('manejo-organigrama') ){
            $menuItems[] = ['label' => 'Organigramas', 'url' => ['/organigrama/index']];    
        }

        if( Yii::$app->user->can('manejo-logs') ){
            $menuItems[] = ['label' => 'Logs de acciones', 'url' => ['/actionlog/log/index']];    
        }
        
         $menuItems[] = ['label' => 'Ir a Frontend', 'url' => '/frontend/web/'];


        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Desconectarme (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; NTP <?= date('Y') ?>, Alan Guevara</p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
