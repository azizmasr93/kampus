<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\presensi;

/**
 * PresensiSearch represents the model behind the search form about `app\models\presensi`.
 */
class PresensiSearch extends presensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_presensi'], 'integer'],
            [['kd_makul', 'id_mhs', 'tgl', 'waktu'], 'safe'],
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
        $query = presensi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_presensi' => $this->id_presensi,
            'tgl' => $this->tgl,
            'waktu' => $this->waktu,
        ]);

        $query->andFilterWhere(['like', 'kd_makul', $this->kd_makul])
            ->andFilterWhere(['like', 'id_mhs', $this->id_mhs]);

        return $dataProvider;
    }
}
