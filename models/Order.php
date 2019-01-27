<?php

namespace app\models;

use Yii;

class Order extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'adress', 'phone'], 'required'],
            [['email'], 'email'],
            [['name', 'email', 'adress'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'adress' => 'Adress',
            'phone' => 'Phone',
        ];
    }
}
