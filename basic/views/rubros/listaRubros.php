<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Lista Rubros';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rubros-rubros">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <ul class="nav flex-colums">
                <?php foreach ($model as $objRubro) : ?>
                    <li class="nav-item ">
                        <?= Html::a($objRubro->descripcion, Url::to(['busqueda', 'idRubro' => $objRubro->idRubro],['class'=>'nav-link'])) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            
        </div>
    </div>
</div>
