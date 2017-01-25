<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chartofaccounts;

/**
 * ChartofaccountsSearch represents the model behind the search form about `\app\models\Chartofaccounts`.
 */
class ChartofaccountsSearch extends Chartofaccounts
{
    public function rules()
    {
        return [
            [['id', 'first_group', 'second_group', 'third_group', 'business_id'], 'integer'],
            [['account_code', 'description', 'account_type', 'account_usage', 'analytical_code', 'branch_code', 'STATUS', 'inserttime', 'updatetime', 'insertuser', 'updateuser', 'ip_address'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Chartofaccounts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'first_group' => $this->first_group,
            'second_group' => $this->second_group,
            'third_group' => $this->third_group,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'account_code', $this->account_code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'account_type', $this->account_type])
            ->andFilterWhere(['like', 'account_usage', $this->account_usage])
            ->andFilterWhere(['like', 'analytical_code', $this->analytical_code])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'STATUS', $this->STATUS])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
