<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property integer $id_jadwal
 * @property integer $id_hari
 * @property string $waktu
 * @property integer $id_ruang
 * @property string $kd_makul
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hari', 'waktu', 'id_ruang', 'kd_makul'], 'required'],
            [['id_hari', 'id_ruang'], 'integer'],
            [['waktu'], 'safe'],
            [['kd_makul'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id_jadwal' => 'Id Jadwal',
            'id_hari' => 'Hari',
            'waktu' => 'Waktu',
            'id_ruang' => 'Ruang',
            'kd_makul' => 'Mata Kuliah',
        ];
    }
    public function GetHari()
     {
        return $this->hasOne(Hari::classname(),['id_hari'=>'id_hari']);
     }
     public function GetRuang()
     {
        return $this->hasOne(Ruang::classname(),['id_ruang'=>'id_ruang']);
     }
     public function GetMakul()
     {
        return $this->hasOne(Makul::classname(),['kd_makul'=>'kd_makul']);
     }

     

}
