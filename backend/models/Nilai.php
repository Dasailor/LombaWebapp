<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property integer $id
 * @property integer $peserta_id
 * @property integer $juri_id
 * @property integer $jenis_nilai_id
 * @property integer $nilai
 *
 * @property Peserta $peserta
 * @property User $juri
 * @property JenisNilai $jenisNilai
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peserta_id', 'juri_id', 'jenis_nilai_id', 'nilai'], 'required'],
            [['peserta_id', 'juri_id', 'jenis_nilai_id', 'nilai'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'peserta_id' => 'ID Peserta',
            'juri_id' => 'ID Juri',
            'jenis_nilai_id' => 'ID Jenis Nilai',
            'nilai' => 'Nilai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeserta()
    {
        return $this->hasOne(Peserta::className(), ['id' => 'peserta_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJuri()
    {
        return $this->hasOne(User::className(), ['id' => 'juri_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisNilai()
    {
        return $this->hasOne(JenisNilai::className(), ['id' => 'jenis_nilai_id']);
    }
}
