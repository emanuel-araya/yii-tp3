<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Busquedas;
/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Nueva Inscripcion';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-lg-6">

        <div class="inscripciones-form">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php $form = ActiveForm::begin(); ?>

                <?php
                    
                    $item = Busquedas::find()                   
                    ->select(['Titulo'])                      
                    ->indexBy('idBusqueda')                  
                    ->column();
                ?>
                <?= $form->field($model, 'idBusqueda')->dropdownList(
                        $item,
                    ['prompt'=>'Elija una busqueda']);
                ?>

                <?= $form->field($model, 'fecha')->textInput() ?>
                <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Cargar', ['class' => 'btn btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>