<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Roledt;

/**
 * RoledtSearch represents the model behind the search form about `\app\models\Roledt`.
 */
class RoledtSearch extends Roledt
{
    public $rolehd;
    public $menupanel;
    public $menuparentid;

    public function rules()
    {
        return [
            [['id', 'c_id', 'c_menuid', 'c_parentid'], 'integer'],
            [['id', 'c_id', 'c_menuid', 'c_parentid', 'rolehd', 'menupanel', 'menuparentid'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Roledt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->joinWith(['rolehd', 'menupanel']);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'c_id' => $this->c_id,
            'c_menuid' => $this->c_menuid,
            'c_parentid' => $this->c_parentid,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'z_rolehd.c_name', $this->rolehd])
            ->andFilterWhere(['like', 'z_menupanel.c_name', $this->menupanel])
            ->andFilterWhere(['like', 'z_menupanel.c_name', $this->menuparentid]);

        return $dataProvider;
    }

    public function searchDt($params)
    {
        $query = Roledt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->joinWith(['rolehd', 'menupanel']);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $this->addCondition($query, 'c_id');

        $query->andFilterWhere([
            //'id' => $this->id,
            //'c_id' => $this->c_id,
            //'z_roledt.c_id' => $this->c_id,
            'c_menuid' => $this->c_menuid,
            'c_parentid' => $this->c_parentid,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'z_rolehd.c_name', $this->rolehd])
            ->andFilterWhere(['like', 'z_menupanel.c_name', $this->menupanel])
            ->andFilterWhere(['like', 'z_menupanel.c_name', $this->menuparentid]);

        return $dataProvider;
    }

    protected function addCondition($query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }

        /*
         * The following line is additionally added for right aliasing
         * of columns so filtering happen correctly in the self join
         */
        $attribute = "z_roledt.$attribute";

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }

}
