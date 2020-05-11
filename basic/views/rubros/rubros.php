<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<h1>Países</h1>
<ul>
<?php foreach ($model as $objRubro): ?>
    <li>
        <?= Html::a($objRubro->descripcion, Url::to(['busqueda','idRubro'=>$objRubro->idRubro])) ?>
    </li>
<?php endforeach; ?>
</ul>
