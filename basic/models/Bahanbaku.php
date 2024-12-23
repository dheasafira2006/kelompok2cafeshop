<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bahanbaku".
 *
 * @property int $id_bahanbaku
 * @property string|null $nama_bahan
 * @property string|null $satuan
 * @property string|null $harga_satuan
 * @property int|null $id_supplier
 * @property int|null $id_karyawan
 *
 * @property Kry $karyawan
 * @property Mengolah[] $mengolahs
 * @property Splr $supplier
 */
class Bahanbaku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahanbaku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bahanbaku'], 'required'],
            [['id_bahanbaku', 'id_supplier', 'id_karyawan'], 'integer'],
            [['nama_bahan', 'harga_satuan'], 'string', 'max' => 45],
            [['satuan'], 'string', 'max' => 10],
            [['id_bahanbaku'], 'unique'],
            [['id_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Splr::class, 'targetAttribute' => ['id_supplier' => 'id_supplier']],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Kry::class, 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bahanbaku' => 'Id Bahanbaku',
            'nama_bahan' => 'Nama Bahan',
            'satuan' => 'Satuan',
            'harga_satuan' => 'Harga Satuan',
            'id_supplier' => 'Id Supplier',
            'id_karyawan' => 'Id Karyawan',
        ];
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Kry::class, ['id_karyawan' => 'id_karyawan']);
    }

    /**
     * Gets query for [[Mengolahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMengolahs()
    {
        return $this->hasMany(Mengolah::class, ['id_bahanbaku' => 'id_bahanbaku']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Splr::class, ['id_supplier' => 'id_supplier']);
    }
}
