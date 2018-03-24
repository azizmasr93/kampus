<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "makul".
 *
 * @property string $kd_makul
 * @property string $nm_makul
 * @property string $id_dosen
 */
class Makul extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'makul';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_makul', 'nm_makul', 'id_dosen'], 'required'],
            [['kd_makul'], 'string', 'max' => 10],
            [['nm_makul'], 'string', 'max' => 30],
            [['id_dosen'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_makul' => 'Kode Mata Kuliah',
            'nm_makul' => 'Nama Makul',
            'id_dosen' => 'Nama Dosen',
        ];
    }
     public function GetDosen()
     {
        return $this->hasOne(Dosen::classname(),['id_dosen'=>'id_dosen']);
     }
}
