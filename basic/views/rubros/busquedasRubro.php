<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BusquedasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Busquedas del Rubro';
$this->params['breadcrumbs'][] = $this->title;
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

    <?php $busq=$data->busquedas ;
        foreach($busq as $objbusq){
            echo "Empresa:".$objbusq['empresa']." ,Titulo:".$objbusq['titulo']." ,Descripcion: ".$objbusq['descripcion'];
        }
    ?>
</div>