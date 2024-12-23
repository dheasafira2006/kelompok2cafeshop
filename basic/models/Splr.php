<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "splr".
 *
 * @property int $id_supplier
 * @property string|null $nama_supplier
 * @property string|null $alamat
 * @property int|null $no_hp
 *
 * @property Bahanbaku[] $bahanbakus
 */
class Splr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'splr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier'], 'required'],
            [['id_supplier', 'no_hp'], 'integer'],
            [['nama_supplier'], 'string', 'max' => 45],
            [['alamat'], 'string', 'max' => 100],
            [['id_supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'nama_supplier' => 'Nama Supplier',
            'alamat' => 'Alamat',
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
        return $this->hasMany(Bahanbaku::class, ['id_supplier' => 'id_supplier']);
    }
}
