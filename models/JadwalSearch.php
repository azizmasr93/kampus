<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jadwal;

/**
 * JadwalSearch represents the model behind the search form about `app\models\Jadwal`.
 */
class JadwalSearch extends Jadwal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jadwal',  'id_ruang'], 'integer'],
            [['waktu','id_hari', 'kd_makul'], 'safe'],
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
        $query = Jadwal::find();
        $query -> JoinWith(['makul']);
        $query -> JoinWith(['ruang']);
        $query -> JoinWith(['hari']);

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
            'id_jadwal' => $this->id_jadwal,
            // 'id_hari' => $this->id_hari,
            // 'waktu' => $this->waktu,
            // 'id_ruang' => $this->id_ruang,
        ]);

        $query->andFilterWhere(['like', 'makul.nm_makul', $this->kd_makul])
              ->andFilterWhere(['like', 'hari.hari', $this->id_hari])
              ->andFilterWhere(['like', 'ruang.nama_ruang', $this->id_ruang]);

        return $dataProvider;
    }
}
