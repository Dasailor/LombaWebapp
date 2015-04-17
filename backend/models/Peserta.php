<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property integer $id
 * @property string $nomor_peserta
 * @property string $nama
 * @property string $alamat
 *
 * @property Nilai[] $nilais
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomor_peserta', 'nama'], 'required'],
            [['nomor_peserta', 'nama', 'alamat'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_peserta' => 'Nomor Peserta',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['peserta_id' => 'id']);
    }
}
