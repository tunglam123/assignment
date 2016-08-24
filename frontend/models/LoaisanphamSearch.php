<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Loaisanpham;

/**
 * LoaisanphamSearch represents the model behind the search form about `app\models\Loaisanpham`.
 */
class LoaisanphamSearch extends Loaisanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLSP', 'TenLSP'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Loaisanpham::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'MaLSP', $this->MaLSP])
            ->andFilterWhere(['like', 'TenLSP', $this->TenLSP]);

        return $dataProvider;
    }
}
