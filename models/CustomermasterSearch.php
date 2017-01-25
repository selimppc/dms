<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customermaster;

/**
 * CustomermasterSearch represents the model behind the search form about `\app\models\Customermaster`.
 */
class CustomermasterSearch extends Customermaster
{
    public function rules()
    {
        return [
            [['id', 'customer_code', 'parent_id', 'business_id'], 'integer'],
            [['customer_name', 'group_code', 'type_code', 'address', 'territory', 'cell_number', 'phone_number', 'fax_number', 'email_address', 'branch_code', 'market_code', 'sales_person', 'hub_code', 'status', 'ip_address', 'inserttime', 'updatetime', 'insertuser', 'updateuser'], 'safe'],
            [['credit_limit'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Customermaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'customer_code' => $this->customer_code,
            'credit_limit' => $this->credit_limit,
            'parent_id' => $this->parent_id,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'group_code', $this->group_code])
            ->andFilterWhere(['like', 'type_code', $this->type_code])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'territory', $this->territory])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'market_code', $this->market_code])
            ->andFilterWhere(['like', 'sales_person', $this->sales_person])
            ->andFilterWhere(['like', 'hub_code', $this->hub_code])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser]);

        return $dataProvider;
    }
}
