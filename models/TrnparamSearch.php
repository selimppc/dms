<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trnparam;

/**
 * TrnparamSearch represents the model behind the search form about `\app\models\Trnparam`.
 */
class TrnparamSearch extends Trnparam
{
    public $businessId;

    public function rules()
    {
        return [
            [['id', 'ACTION', 'last_number', 'increment', 'active', 'business_id'], 'integer'],
            [['TYPE', 'CODE', 'branch_code', 'description', 'businessId', 'ip_address', 'insert_time', 'update_time', 'insert_user', 'update_user'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Trnparam::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'ACTION' => $this->ACTION,
            'last_number' => $this->last_number,
            'increment' => $this->increment,
            'active' => $this->active,
            'insert_time' => $this->insert_time,
            'update_time' => $this->update_time,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'TYPE', $this->TYPE])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'insert_user', $this->insert_user])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'z_business.company_name', $this->businessId]);

        return $dataProvider;
    }
}
