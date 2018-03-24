<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Makul;

/**
 * MakulSearch represents the model behind the search form about `app\models\Makul`.
 */
class MakulSearch extends Makul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_makul', 'nm_makul', 'id_dosen'], 'safe'],
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
        $query = Makul::find();
        $query -> JoinWith(['dosen']);

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
        $query->andFilterWhere(['like', 'kd_makul', $this->kd_makul])
            ->andFilterWhere(['like', 'nm_makul', $this->nm_makul])
            ->andFilterWhere(['like', 'dosen.nm_dosen', $this->id_dosen]);

        return $dataProvider;
    }
}
