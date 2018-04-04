<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "presensi".
 *
 * @property integer $id_presensi
 * @property string $kd_makul
 * @property string $id_mhs
 * @property string $tgl
 * @property string $waktu
 *
 * @property Presensi $idPresensi
 * @property Presensi $presensi
 */
class Presensi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presensi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_makul', 'id_mhs', 'tgl', 'waktu'], 'required'],
            [['tgl', 'waktu'], 'safe'],
            [['kd_makul'], 'string', 'max' => 10],
            [['id_mhs'], 'string', 'max' => 20],
            [['id_presensi'], 'exist', 'skipOnError' => true, 'targetClass' => Presensi::className(), 'targetAttribute' => ['id_presensi' => 'id_presensi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_presensi' => 'Id Presensi',
            'kd_makul' => 'Kd Makul',
            'id_mhs' => 'Id Mhs',
            'tgl' => 'Tgl',
            'waktu' => 'Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPresensi()
    {
        return $this->hasOne(Presensi::className(), ['id_presensi' => 'id_presensi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensi()
    {
        return $this->hasOne(Presensi::className(), ['id_presensi' => 'id_presensi']);
    }
    public function getMakul()
    {
        return $this->hasOne(Makul::classname(),['kd_makul'=>'kd_makul']);
    }
    
    public function GetMahasiswa()
    {
        return $this->hasOne(Mahasiswa::classname(),['id_mhs'=>'id_mhs']);
    }
}
