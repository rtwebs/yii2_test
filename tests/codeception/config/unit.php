<?php
/**
 * Application configuration shared by all applications unit tests
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../../../frontend/config/main.php'),
    []
);
