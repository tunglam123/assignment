<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property string $MaSP
 * @property string $MaHD
 * @property string $SoLuongMua
 * @property string $DonGiaBan
 * @property string $HoaDon_MaHD
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaHD', 'SoLuongMua', 'DonGiaBan', 'HoaDon_MaHD'], 'required'],
            [['MaSP', 'MaHD', 'SoLuongMua', 'HoaDon_MaHD'], 'string', 'max' => 10],
            [['DonGiaBan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'MaHD' => 'Ma Hd',
            'SoLuongMua' => 'So Luong Mua',
            'DonGiaBan' => 'Don Gia Ban',
            'HoaDon_MaHD' => 'Hoa Don  Ma Hd',
        ];
    }
}
