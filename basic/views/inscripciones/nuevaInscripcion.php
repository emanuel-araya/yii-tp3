<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Busquedas;
/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Inscripcion';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="inscripciones-form">

<?php $form = ActiveForm::begin(); ?>


    <?php
    
    $item = Busquedas::find()                   
      ->select(['Titulo'])                      
      ->indexBy('idBusqueda')                  
      ->column();
     ?>
    <?= $form->field($model, 'idBusqueda')->dropdownList(
        $item,
    ['prompt'=>'Elija una busqueda']
    ); ?>



<?= $form->field($model, 'fecha')->textInput() ?>

<?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Cargar', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
