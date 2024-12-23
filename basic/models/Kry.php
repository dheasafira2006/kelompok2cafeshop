<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kry".
 *
 * @property int $id_karyawan
 * @property string|null $nama_karyawan
 * @property string|null $jabatan
 * @property string|null $alamat
 * @property string|null $TTL
 * @property int|null $no_hp
 *
 * @property Bahanbaku[] $bahanbakus
 * @property Mengolah[] $mengolahs
 * @property Pesanan[] $pesanans
 */
class Kry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan'], 'required'],
            [['id_karyawan', 'no_hp'], 'integer'],
            [['TTL'], 'safe'],
            [['nama_karyawan'], 'string', 'max' => 45],
            [['jabatan'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 100],
            [['id_karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'jabatan' => 'Jabatan',
            'alamat' => 'Alamat',
            'TTL' => 'Ttl',
            'no_hp' => 'No Hp',
        ];
    }

    /**
     * Gets query for [[Bahanbakus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahanbakus()
    {
        return $this->hasMany(Bahanbaku::class, ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Mengolahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMengolahs()
    {
        return $this->hasMany(Mengolah::class, ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Pesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesanans()
    {
        return $this->hasMany(Pesanan::class, ['id_karyawan' => 'id_karyawan']);
    }
}
