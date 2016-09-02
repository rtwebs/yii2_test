<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actividades".
 *
 * @property integer $id
 * @property integer $dependencia
 * @property integer $prioridad
 * @property integer $estado
 * @property string $fecha_inicio
 * @property integer $duracion
 * @property string $comentario
 */
class Actividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dependencia', 'prioridad', 'estado', 'fecha_inicio', 'duracion', 'comentario'], 'required'],
            [['dependencia', 'prioridad', 'estado', 'duracion'], 'integer'],
            [['fecha_inicio'], 'safe'],
            [['comentario'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dependencia' => 'Dependencia',
            'prioridad' => 'Prioridad',
            'estado' => 'Estado',
            'fecha_inicio' => 'Fecha Inicio',
            'duracion' => 'Duracion en Horas',
            'comentario' => 'Comentario',
        ];
    }
}
