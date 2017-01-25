<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Codesparam;

/**
 * CodesparamSearch represents the model behind the search form about `\app\models\Codesparam`.
 */
class CodesparamSearch extends Codesparam
{
    public function rules()
    {
        return [
            [['id', 'active', 'business_id'], 'integer'],
            [['TYPE', 'CODE', 'description', 'branch_code', 'credit_account', 'debit_account', 'discount_acount', 'tax_account', 'return_account', 'properties', 'ip_address', 'insert_time', 'update_time', 'insert_user', 'update_user'], 'safe'],
            [['tax_rate', 'percentage'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Codesparam::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tax_rate' => $this->tax_rate,
            'percentage' => $this->percentage,
            'active' => $this->active,
            'insert_time' => $this->insert_time,
            'update_time' => $this->update_time,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'TYPE', $this->TYPE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'credit_account', $this->credit_account])
            ->andFilterWhere(['like', 'debit_account', $this->debit_account])
            ->andFilterWhere(['like', 'discount_acount', $this->discount_acount])
            ->andFilterWhere(['like', 'tax_account', $this->tax_account])
            ->andFilterWhere(['like', 'return_account', $this->return_account])
            ->andFilterWhere(['like', 'properties', $this->properties])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'insert_user', $this->insert_user])
            ->andFilterWhere(['like', 'update_user', $this->update_user]);

        return $dataProvider;
    }
}
