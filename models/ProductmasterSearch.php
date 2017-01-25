<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productmaster;

/**
 * ProductmasterSearch represents the model behind the search form about `\app\models\Productmaster`.
 */
class ProductmasterSearch extends Productmaster
{
    public function rules()
    {
        return [
            [['id', 'maximum_level', 'minmum_level', 'reorder_level', 'business_id'], 'integer'],
            [['product_code', 'product_name', 'description', 'class_code', 'group_code', 'category_code', 'sell_unit', 'purchase_unit', 'stock_unit', 'pack_size', 'stock_type', 'supplier_code', 'STATUS', 'inserttime', 'updatetime', 'insertuser', 'updateuser', 'ip_address'], 'safe'],
            [['sell_rate', 'cost_price', 'sell_unit_conversion', 'purchase_unit_conversion', 'stock_unit_conversion', 'tax_rate'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Productmaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'sell_rate' => $this->sell_rate,
            'cost_price' => $this->cost_price,
            'sell_unit_conversion' => $this->sell_unit_conversion,
            'purchase_unit_conversion' => $this->purchase_unit_conversion,
            'stock_unit_conversion' => $this->stock_unit_conversion,
            'maximum_level' => $this->maximum_level,
            'minmum_level' => $this->minmum_level,
            'reorder_level' => $this->reorder_level,
            'tax_rate' => $this->tax_rate,
            'inserttime' => $this->inserttime,
            'updatetime' => $this->updatetime,
            'business_id' => $this->business_id,
        ]);

        $query->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'class_code', $this->class_code])
            ->andFilterWhere(['like', 'group_code', $this->group_code])
            ->andFilterWhere(['like', 'category_code', $this->category_code])
            ->andFilterWhere(['like', 'sell_unit', $this->sell_unit])
            ->andFilterWhere(['like', 'purchase_unit', $this->purchase_unit])
            ->andFilterWhere(['like', 'stock_unit', $this->stock_unit])
            ->andFilterWhere(['like', 'pack_size', $this->pack_size])
            ->andFilterWhere(['like', 'stock_type', $this->stock_type])
            ->andFilterWhere(['like', 'supplier_code', $this->supplier_code])
            ->andFilterWhere(['like', 'STATUS', $this->STATUS])
            ->andFilterWhere(['like', 'insertuser', $this->insertuser])
            ->andFilterWhere(['like', 'updateuser', $this->updateuser])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
