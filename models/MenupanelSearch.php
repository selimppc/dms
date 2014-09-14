<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Menupanel;

/**
 * MenupanelSearch represents the model behind the search form about `\app\models\Menupanel`.
 */
class MenupanelSearch extends Menupanel
{
    public function rules()
    {
        return [
            [['id', 'c_id', 'c_parentid', 'c_sortord'], 'integer'],
            [['c_type', 'c_name', 'c_redirect', 'inserttime'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Menupanel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'c_id' => $this->c_id,
            'c_parentid' => $this->c_parentid,
            'c_sortord' => $this->c_sortord,
            'inserttime' => $this->inserttime,
        ]);

        $query->andFilterWhere(['like', 'c_type', $this->c_type])
            ->andFilterWhere(['like', 'c_name', $this->c_name])
            ->andFilterWhere(['like', 'c_redirect', $this->c_redirect]);

        return $dataProvider;
    }
}
