<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `\app\models\User`.
 */
class UserSearch extends User
{
    public $rolehd;
    public $business;

    public function rules()
    {
        return [
            [['id', 'c_roleid', 'c_active', 'c_status', 'business_id'], 'integer'],
            [['username', 'password', 'auth_key', 'name', 'designation', 'cell_number', 'branch_code', 'c_expdate', 'inserttime', 'rolehd', 'business', 'updatetime', 'insertuser', 'updateuser'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith(['rolehd', 'business']);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'c_roleid' => $this->c_roleid,
            'c_active' => $this->c_active,
            'c_status' => $this->c_status,
            'c_expdate' => $this->c_expdate,
            'business_id' => $this->business_id,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'z_rolehd.c_name', $this->rolehd])
            ->andFilterWhere(['like', 'z_business.company_name', $this->business]);

        return $dataProvider;
    }
}
