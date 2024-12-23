<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "antrian".
 *
 * @property int $id_antrian
 * @property string|null $tanggal_antrian
 * @property int|null $no_antrian
 * @property int|null $id_pelanggan
 *
 * @property Plgn $pelanggan
 */
class Antrian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_antrian'], 'required'],
            [['id_antrian', 'no_antrian', 'id_pelanggan'], 'integer'],
            [['tanggal_antrian'], 'safe'],
            [['id_antrian'], 'unique'],
            [['id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Plgn::class, 'targetAttribute' => ['id_pelanggan' => 'id_pelanggan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian' => 'Id Antrian',
            'tanggal_antrian' => 'Tanggal Antrian',
            'no_antrian' => 'No Antrian',
            'id_pelanggan' => 'Id Pelanggan',
        ];
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
}
