<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plgn".
 *
 * @property int $id_pelanggan
 * @property string|null $nama
 *
 * @property Antrian[] $antrians
 * @property Pesanan[] $pesanans
 */
class Plgn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plgn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelanggan'], 'required'],
            [['id_pelanggan'], 'integer'],
            [['nama'], 'string', 'max' => 45],
            [['id_pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Antrians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAntrians()
    {
        return $this->hasMany(Antrian::class, ['id_pelanggan' => 'id_pelanggan']);
    }

    /**
     * Gets query for [[Pesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesanans()
    {
        return $this->hasMany(Pesanan::class, ['id_pelanggan' => 'id_pelanggan']);
    }
}
