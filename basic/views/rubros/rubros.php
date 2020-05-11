<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Lista Rubros';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rubros-rubros">
    <h1>Rubros</h1>

    <ul class="nav flex-colums">
        <?php foreach ($model as $objRubro) : ?>
            <li class="nav-item ">
                <?= Html::a($objRubro->descripcion, Url::to(['busqueda', 'idRubro' => $objRubro->idRubro],['class'=>'nav-link'])) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>