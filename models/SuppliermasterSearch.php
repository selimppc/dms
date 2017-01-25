<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suppliermaster;

/**
 * SuppliermasterSearch represents the model behind the search form about `\app\models\Suppliermaster`.
 */
class SuppliermasterSearch extends Suppliermaster
{
    public function rules()
    {
        return [
            [['id', 'supplier_code', 'group_code', 'business_id'], 'integer'],
            [['branch_code', 'supplier_name', 'address', 'district', 'post', 'post_code', 'contact_person', 'phone_number', 'cell_number', 'fax_number', 'email_address', 'url_address', 'status', 'inserttime', 'updatetime', 'insertuser', 'updateuser', 'ip_address'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Suppliermaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'supplier_code' => $this->supplier_code,
            'group_code' => $this->group_code,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'post', $this->post])
            ->andFilterWhere(['like', 'post_code', $this->post_code])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'url_address', $this->url_address])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
