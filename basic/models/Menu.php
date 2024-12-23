<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id_menu
 * @property string|null $nama_menu
 * @property string|null $harga_menu
 *
 * @property Mengolah[] $mengolahs
 * @property Pesanan[] $pesanans
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_menu'], 'required'],
            [['id_menu'], 'integer'],
            [['nama_menu', 'harga_menu'], 'string', 'max' => 45],
            [['id_menu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'harga_menu' => 'Harga Menu',
        ];
    }

    /**
     * Gets query for [[Mengolahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMengolahs()
    {
        return $this->hasMany(Mengolah::class, ['id_menu' => 'id_menu']);
    }

    /**
     * Gets query for [[Pesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesanans()
    {
        return $this->hasMany(Pesanan::class, ['id_menu' => 'id_menu']);
    }
}
