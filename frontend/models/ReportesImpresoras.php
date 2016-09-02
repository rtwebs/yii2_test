<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reportes_impresoras".
 *
 * @property integer $id
 * @property integer $id_departamento
 * @property string $razon
 * @property integer $id_impresora
 * @property string $fecha
 */
class ReportesImpresoras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reportes_impresoras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'id_departamento', 'razon' ], 'required'],
            [['id', 'id_departamento', 'id_impresora'], 'integer'],
            [['razon'], 'string'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_departamento' => 'Departamento',
            'razon' => 'Razon',
            'id_impresora' => 'Id Impresora',
            'fecha' => 'Fecha',
        ];
    }
}
