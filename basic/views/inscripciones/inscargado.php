<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */

$this->title = "Inscripcion cargada";
$this->params['breadcrumbs'][] = ['label' => 'Inscripciones', 'url' => ['crear-inscripcion']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inscripciones-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'fecha',
            'apellido',
            'nombre',
        ],
    ]) ?>

</div>
