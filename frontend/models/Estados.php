<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estados".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estados';
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
            'name' => 'Estado',
            'created' => 'Created',
        ];
    }
}
