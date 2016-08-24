<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property string $MaSP
 * @property string $TenSP
 * @property string $SoLuong
 * @property string $MoTa
 * @property string $MaLSP
 * @property string $LoaiSanPham_MaLSP
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'TenSP', 'SoLuong', 'MoTa', 'MaLSP', 'LoaiSanPham_MaLSP'], 'required'],
            [['MaSP', 'SoLuong', 'MaLSP', 'LoaiSanPham_MaLSP'], 'string', 'max' => 10],
            [['TenSP', 'MoTa'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'SoLuong' => 'So Luong',
            'MoTa' => 'Mo Ta',
            'MaLSP' => 'Ma Lsp',
            'LoaiSanPham_MaLSP' => 'Loai San Pham  Ma Lsp',
        ];
    }
}
