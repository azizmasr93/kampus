<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswamatakuliah;

/**
 * MahasiswamatakuliahSearch represents the model behind the search form about `app\models\Mahasiswamatakuliah`.
 */
class MahasiswamatakuliahSearch extends Mahasiswamatakuliah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mhsmakul', 'id_mhs'], 'integer'],
            [['kd_makul'], 'safe'],
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
        $query = Mahasiswamatakuliah::find();

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
            'id_mhsmakul' => $this->id_mhsmakul,
            'id_mhs' => $this->id_mhs,
        ]);

        $query->andFilterWhere(['like', 'kd_makul', $this->kd_makul]);

        return $dataProvider;
    }
}
