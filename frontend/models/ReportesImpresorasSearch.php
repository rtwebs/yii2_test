<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportesImpresoras;

/**
 * ReportesImpresorasSearch represents the model behind the search form of `app\models\ReportesImpresoras`.
 */
class ReportesImpresorasSearch extends ReportesImpresoras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_departamento', 'id_impresora'], 'integer'],
            [['razon', 'fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ReportesImpresoras::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_departamento' => $this->id_departamento,
            'id_impresora' => $this->id_impresora,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'razon', $this->razon]);

        return $dataProvider;
    }
}
