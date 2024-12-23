<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mengolah".
 *
 * @property int $no_mengolah
 * @property int|null $jumlah
 * @property string|null $satuan
 * @property int|null $id_bahanbaku
 * @property int|null $id_menu
 * @property int|null $id_karyawan
 *
 * @property Bahanbaku $bahanbaku
 * @property Kry $karyawan
 * @property Menu $menu
 */
class Mengolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mengolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mengolah'], 'required'],
            [['no_mengolah', 'jumlah', 'id_bahanbaku', 'id_menu', 'id_karyawan'], 'integer'],
            [['satuan'], 'string', 'max' => 10],
            [['no_mengolah'], 'unique'],
            [['id_bahanbaku'], 'exist', 'skipOnError' => true, 'targetClass' => Bahanbaku::class, 'targetAttribute' => ['id_bahanbaku' => 'id_bahanbaku']],
            [['id_menu'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['id_menu' => 'id_menu']],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Kry::class, 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_mengolah' => 'No Mengolah',
            'jumlah' => 'Jumlah',
            'satuan' => 'Satuan',
            'id_bahanbaku' => 'Id Bahanbaku',
            'id_menu' => 'Id Menu',
            'id_karyawan' => 'Id Karyawan',
        ];
    }

    /**
     * Gets query for [[Bahanbaku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahanbaku()
    {
        return $this->hasOne(Bahanbaku::class, ['id_bahanbaku' => 'id_bahanbaku']);
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
}
