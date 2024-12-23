<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int|null $jumlah
 * @property string|null $total_harga
 * @property string|null $tanggal
 * @property int|null $id_pesanan
 *
 * @property Pesanan $pesanan
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi'], 'required'],
            [['id_transaksi', 'jumlah', 'id_pesanan'], 'integer'],
            [['tanggal'], 'safe'],
            [['total_harga'], 'string', 'max' => 45],
            [['id_transaksi'], 'unique'],
            [['id_pesanan'], 'exist', 'skipOnError' => true, 'targetClass' => Pesanan::class, 'targetAttribute' => ['id_pesanan' => 'id_pesanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'jumlah' => 'Jumlah',
            'total_harga' => 'Total Harga',
            'tanggal' => 'Tanggal',
            'id_pesanan' => 'Id Pesanan',
        ];
    }

    /**
     * Gets query for [[Pesanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesanan()
    {
        return $this->hasOne(Pesanan::class, ['id_pesanan' => 'id_pesanan']);
    }
}
