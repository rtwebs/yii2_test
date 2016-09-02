<?php
/* @var $this yii\web\View */
?>

<br>
<h1>Reportes de Actividades</h1>

<hr>
<!--- Reporte de la semana -->
<div class="panel panel-info">
<div class="panel-heading">
<h3> Semanal </h3>
</div>
<div class="panel-body">
<?php include('index_semanal.php') ?>
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading">
<h3> Mensual </h3>
</div>
<div class="panel-body">
<?php include('index_mensual.php') ?>
</div>
</div>

<div class="panel panel-success">
<div class="panel-heading">
<h3> Anual </h3>
</div>
<div class="panel-body">
<?php include('index_anual.php') ?>
</div>
</div>
