<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%companiy}}".
 *
 * @property integer $id_comp
 * @property string $comp
 *
 * @property Taxist[] $taxists
 */
class Companiy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%companiy}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comp'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comp' => 'Id Comp',
            'comp' => 'Comp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxists()
    {
        return $this->hasMany(Taxist::className(), ['id_comp' => 'id_comp']);
    }
}
