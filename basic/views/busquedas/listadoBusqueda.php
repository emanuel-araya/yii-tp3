<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<div class="container">
    <h1>Listado de Busquedas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Empresa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Link Listado Inscripciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($busquedas as $objBusquedas) : ?>
                <tr>
                    <td><?= $objBusquedas->empresa ?></td>
                    <td><?= $objBusquedas->titulo ?></td>
                    <td><?= $objBusquedas->descripcion ?></td>
                    <td><?= Html::a('Ver Listado Inscripciones', Url::to(['inscripcion-busqueda', 'idBusqueda' => $objBusquedas->idBusqueda], ['class' => 'btn btn-primary'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container text-center">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>