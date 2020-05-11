<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BusquedasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Busquedas del Rubro';
$this->params['breadcrumbs'][] = ['label' => 'ListaRubros', 'url' => ['listar']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="busquedas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $data,
        'attributes' => [
            'idRubro',
            'descripcion',
        ],
    ]) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Empresa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php $busq = $data->busquedas;
            foreach ($busq as $objbusq) { ?>
                <tr>
                    <td><?= $objbusq['empresa'] ?></td>
                    <td><?= $objbusq['titulo'] ?></td>
                    <td><?= $objbusq['descripcion'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>