<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prioridades".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 */
class Prioridades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prioridades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created'], 'safe'],
            [['name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Prioridad',
            'created' => 'Created',
        ];
    }
}
