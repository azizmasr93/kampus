<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hari".
 *
 * @property integer $id_hari
 * @property string $hari
 */
class Hari extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hari';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hari'], 'required'],
            [['hari'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hari' => 'Id Hari',
            'hari' => 'Hari',
        ];
    }
}
