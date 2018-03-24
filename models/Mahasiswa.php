<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id_mhs
 * @property string $id_rfidmhs
 * @property string $nm_mhs
 * @property string $nim
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rfidmhs', 'nm_mhs', 'nim'], 'required'],
            [['id_rfidmhs'], 'string', 'max' => 30],
            [['nm_mhs'], 'string', 'max' => 40],
            [['nim'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mhs' => 'Id Mhs',
            'id_rfidmhs' => 'ID RFID Mahasiswa',
            'nm_mhs' => 'Nama Mahasiswa',
            'nim' => 'NIM',
        ];
    }
}
