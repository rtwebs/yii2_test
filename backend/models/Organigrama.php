<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organigrama".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 */
class Organigrama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organigrama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id'], 'integer'],
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
            'name' => 'Name',
            'created' => 'Created',
        ];
    }
}
