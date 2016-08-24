<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property string $MaHD
 * @property string $NgayLap
 * @property string $MaKH
 * @property string $KhachHang_MaKH
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'NgayLap', 'MaKH', 'KhachHang_MaKH'], 'required'],
            [['NgayLap'], 'safe'],
            [['MaHD', 'MaKH', 'KhachHang_MaKH'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHD' => 'Ma Hd',
            'NgayLap' => 'Ngay Lap',
            'MaKH' => 'Ma Kh',
            'KhachHang_MaKH' => 'Khach Hang  Ma Kh',
        ];
    }
}
