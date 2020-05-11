<?php

use yii\helpers\Html;

$this->title = 'Inscripcion Cargada';
$this->params['breadcrumbs'][] = ['label' => 'Nueva Inscripcion', 'url' => ['crear-inscripcion']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha</th>
                <th scope="col">Inscripto a Busqueda</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $model->nombre ?></td>
                <td><?= $model->apellido ?></td>
                <td><?= $model->fecha ?></td>
                <td><?= $model->idBusqueda0->empresa ?></td>
            </tr>
        </tbody>
    </table>
</div>