<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rubros".
 *
 * @property int $idRubro
 * @property string|null $descripcion
 *
 * @property Busquedas[] $busquedas
 */
class Rubros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rubros';/**Obtiene el nombre de la tabla*/
    }

    /**
     * {@inheritdoc}
     * A partir de la tabla genera las reglas de cada atributo
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     * attributeLabels es una función que nos sirve en view
     * porque le asigna a cada atributo un string correspondiente al Label
     * que va a aparecer por ejemplo en un form
     */
    public function attributeLabels()
    {
        return [
            'idRubro' => 'Id Rubro',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Busquedas]].
     *
     * @return \yii\db\ActiveQuery
     * obtiene varias instancias de "Busquedas" que hacen referencia
     * al Rubro que lo invoca
     */
    public function getBusquedas()
    {
        return $this->hasMany(Busquedas::className(), ['idRubro' => 'idRubro']);
    }
}
