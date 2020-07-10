<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property string $card_num
 * @property string $purpose
 * @property float $price
 * @property int $date
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_num', 'purpose', 'price', 'date'], 'required'],
            [['price'], 'number'],
            [['date'], 'integer'],
            [['card_num'], 'string', 'max' => 40],
            [['purpose'], 'string', 'max' => 360],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'card_num' => 'Card Num',
            'purpose' => 'Purpose',
            'price' => 'Price',
            'date' => 'Date',
        ];
    }
}
