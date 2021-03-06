<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property integer $id_dosen
 * @property string $nm_dosen
 * @property string $nip
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nm_dosen', 'nip'], 'required'],
            [['nm_dosen'], 'string', 'max' => 40],
            [['nip'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nm_dosen' => 'Nama Dosen',
            'nip' => 'NIP',
        ];
    }
}
