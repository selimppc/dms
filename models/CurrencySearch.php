<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Currency;

/**
 * CurrencySearch represents the model behind the search form about `\app\models\Currency`.
 */
class CurrencySearch extends Currency
{
    public function rules()
    {
        return [
            [['id', 'active', 'business_id'], 'integer'],
            [['currency', 'description', 'ip_address', 'inserttime', 'updatetime', 'insertuser', 'updateuser'], 'safe'],
            [['exchange_rate'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Currency::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'exchange_rate' => $this->exchange_rate,
            'active' => $this->active,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser]);

        return $dataProvider;
    }
}
