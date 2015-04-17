<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_nilai".
 *
 * @property integer $id
 * @property string $jenis_nilai
 * @property string $keterangan
 *
 * @property Nilai[] $nilais
 */
class JenisNilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_nilai'], 'required'],
            [['keterangan'], 'string'],
            [['jenis_nilai'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Jenis Nilai',
            'jenis_nilai' => 'Jenis Nilai',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['jenis_nilai_id' => 'id']);
    }
}
