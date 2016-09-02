<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->title = 'Examen Final';

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
        'brandLabel' => 'Examen Final - Frontend',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        //['label' => 'About', 'url' => ['/site/about']],
        //['label' => 'Contact', 'url' => ['/site/contact']],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registro', 'url' => ['/user/registration/register']];
        $menuItems[] = ['label' => 'Ingresar', 'url' => ['/user/security/login']];
    } else {

        // Mostrar este item solo si tiene privilegios o es admin -->
        // if (\Yii::$app->authManager->getAssignment('ver-backend', Yii::$app->user->getId()) ){
        //      $menuItems[] = ['label' => 'Ir a Backend', 'url' => ['/']];
        // }
        $menuItems[] = ['label' => 'Actividades', 'url' => ['/actividades/index']];
        if (Yii::$app->user->can('ver-backend')) {
            $menuItems[] = ['label' => 'Ir a Backend', 'url' => '/backend/web/'];
        }

        $url_perfil = urldecode(Url::toRoute(['/user/profile/show', 'id' => Yii::$app->user->getId()]));

        $menuItems[] = ['label' => Yii::$app->user->identity->username, 
        'items' => [ 

        ['label' => 'Ver mi perfil', 'url' => $url_perfil],
        ['label' => 'Editar mi perfil', 'url' => ['/user/settings/profile']],
        '<li class="divider"></li>',
        '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Desconectarme (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>'
        ]
        ];
        // $menuItems[] = ['label' => 'Editar mi perfil', 'url' => ['/user/settings/profile']];
        
        // $menuItems[] = '<li>'
        //     . Html::beginForm(['/site/logout'], 'post')
        //     . Html::submitButton(
        //         'Desconectarme (' . Yii::$app->user->identity->username . ')',
        //         ['class' => 'btn btn-link']
        //     )
        //     . Html::endForm()
        //     . '</li>';
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

<?php
//echo Yii::$app->getUrlManager()->getBaseUrl();
//var_dump(  \Yii::$app->authManager->getRolesByUser(\Yii::$app->user->identity->id) );
?>
    <div class="container">
        <p class="pull-left">&copy; NTP <?= date('Y') ?>, Alan Guevara</p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
