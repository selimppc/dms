<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rolehd;

/**
 * RolehdSearch represents the model behind the search form about `\app\models\Rolehd`.
 */
class RolehdSearch extends Rolehd
{
    public function rules()
    {
        return [
            [['id', 'c_active'], 'integer'],
            [['c_name', 'c_desc', 'inserttime', 'updatetime', 'insertuser', 'updateuser'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Rolehd::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'c_active' => $this->c_active,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'c_name', $this->c_name])
            ->andFilterWhere(['like', 'c_desc', $this->c_desc])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser]);

        return $dataProvider;
    }
}
