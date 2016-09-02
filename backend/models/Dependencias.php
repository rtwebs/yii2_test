<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property integer $id
 * @property string $title
 * @property integer $rid
 * @property integer $org_id
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'org_id'], 'required'],
            [['rid', 'org_id'], 'integer'],
            [['title'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Titulo',
            'rid' => 'Dependica Padre',
            'org_id' => 'Organigrama',
        ];
    }
}
