<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BusquedasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inscripciones a Busqueda: '.$empresa;
$this->params['breadcrumbs'][] = ['label' => 'Listado de Busquedas', 'url' => ['listar-busquedas']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="Lista inscripciones busquedas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($model as $objInscripcion) { ?>
                <tr>
                    <td><?= $objInscripcion['nombre'] ?></td>
                    <td><?= $objInscripcion['apellido'] ?></td>
                    <td><?= $objInscripcion['fecha'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>