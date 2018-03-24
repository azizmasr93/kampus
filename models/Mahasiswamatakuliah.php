<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswamatakuliah".
 *
 * @property integer $id_mhsmakul
 * @property string $kd_makul
 * @property integer $id_mhs
 */
class Mahasiswamatakuliah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswamatakuliah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_makul', 'id_mhs'], 'required'],
            [['id_mhs'], 'integer'],
            [['kd_makul'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mhsmakul' => 'Id Mhsmakul',
            'kd_makul' => 'Kd Makul',
            'id_mhs' => 'Id Mhs',
        ];
    }
}
