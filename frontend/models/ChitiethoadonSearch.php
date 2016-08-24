<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chitiethoadon;

/**
 * ChitiethoadonSearch represents the model behind the search form about `app\models\Chitiethoadon`.
 */
class ChitiethoadonSearch extends Chitiethoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaHD', 'SoLuongMua', 'DonGiaBan', 'HoaDon_MaHD'], 'safe'],
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
        $query = Chitiethoadon::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'MaSP', $this->MaSP])
            ->andFilterWhere(['like', 'MaHD', $this->MaHD])
            ->andFilterWhere(['like', 'SoLuongMua', $this->SoLuongMua])
            ->andFilterWhere(['like', 'DonGiaBan', $this->DonGiaBan])
            ->andFilterWhere(['like', 'HoaDon_MaHD', $this->HoaDon_MaHD]);

        return $dataProvider;
    }
}
