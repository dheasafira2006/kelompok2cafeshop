<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $id_pesanan
 * @property int|null $id_pelanggan
 * @property int|null $id_karyawan
 * @property int|null $id_menu
 *
 * @property Kry $karyawan
 * @property Menu $menu
 * @property Plgn $pelanggan
 * @property Transaksi[] $transaksis
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pesanan'], 'required'],
            [['id_pesanan', 'id_pelanggan', 'id_karyawan', 'id_menu'], 'integer'],
            [['id_pesanan'], 'unique'],
            [['id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Plgn::class, 'targetAttribute' => ['id_pelanggan' => 'id_pelanggan']],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Kry::class, 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
            [['id_menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['id_menu' => 'id_menu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesanan' => 'Id Pesanan',
            'id_pelanggan' => 'Id Pelanggan',
            'id_karyawan' => 'Id Karyawan',
            'id_menu' => 'Id Menu',
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
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::class, ['id_menu' => 'id_menu']);
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Plgn::class, ['id_pelanggan' => 'id_pelanggan']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::class, ['id_pesanan' => 'id_pesanan']);
    }
}
