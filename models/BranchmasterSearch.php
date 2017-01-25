<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Branchmaster;

/**
 * BranchmasterSearch represents the model behind the search form about `\app\models\Branchmaster`.
 */
class BranchmasterSearch extends Branchmaster
{
    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['branch_code', 'branch_name', 'currency', 'contact_person', 'designation', 'address', 'phone_number', 'cell_number', 'fax_number', 'ip_address', 'inserttime', 'updatetime', 'insertuser', 'updateuser'], 'safe'],
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
        $query = Branchmaster::find();

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
        ]);

        $query->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'branch_name', $this->branch_name])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser]);

        return $dataProvider;
    }
}
