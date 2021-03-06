<?php

namespace seqhilla\akademisyenders\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use seqhilla\akademisyenders\models\Dersler;

/**
 * DerslerSearch represents the model behind the search form of `common\models\Dersler`.
 */
class DerslerSearch extends Dersler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dersID','dersSaatleri', 'dersGunleri', 'dersAdi', 'ogrtUyesiAdi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Dersler::find();
        $query->joinWith('ogrtuye');
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
            'id' => $this->id,
            //'dersID' => $this->dersID,
        ]);

        $query->andFilterWhere(['like', 'dersSaatleri', $this->dersSaatleri])
            ->andFilterWhere(['like', 'dersGunleri', $this->dersGunleri])
            ->andFilterWhere(['like', 'dersAdi', $this->dersAdi])
            ->andFilterWhere(['like', 'dersID', $this->dersID])
            ->andFilterWhere(['like', 'ogrtuye.ogrtUyesiAdi', $this->ogrtUyesiAdi]);

        return $dataProvider;
    }
}
