<?php

namespace app\models;

use Yii;

class OrderProduct extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'order_product';
    }

    public function rules()
    {
        return [
            [['order_id', 'product_id'], 'required'],
            [['order_id', 'product_id', 'quantity', 'sum'], 'integer'],
            [['name', 'price'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'name' => 'Name',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'sum' => 'Sum',
        ];
    }
}
