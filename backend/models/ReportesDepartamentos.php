<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reportes_departamentos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $impresora
 */
class ReportesDepartamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reportes_departamentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'nombre', 'impresora'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'impresora'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'impresora' => 'Impresora',
        ];
    }
}
