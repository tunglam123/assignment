<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property string $MaLSP
 * @property string $TenLSP
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLSP', 'TenLSP'], 'required'],
            [['MaLSP'], 'string', 'max' => 10],
            [['TenLSP'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLSP' => 'Ma Lsp',
            'TenLSP' => 'Ten Lsp',
        ];
    }
}
