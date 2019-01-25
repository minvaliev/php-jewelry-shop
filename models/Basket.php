<?php
/**
 * Created by PhpStorm.
 * User: Альберт
 * Date: 25.01.2019
 * Time: 2:56
 */

namespace app\models;


use yii\db\ActiveRecord;


class Basket extends ActiveRecord
{
    public function addToBasket ($product) {
        if (isset($_SESSION['basket'][$product->id])) {
            $_SESSION['basket'][$product->id]['productQuantity'] += 1;
        }
        else {
            $_SESSION['basket'][$product->id] = [
                'productQuantity' => 1,
                'name' => $product['name'],
                'img' => $product['img'],
                'price' => $product['price'],
                'description' => $product['description'],
            ];
        }

        $_SESSION['product.totalQuantity'] = isset($_SESSION['product.totalQuantity']) ? $_SESSION['product.totalQuantity'] + 1 : 1;
        $_SESSION['product.totalSum'] = isset($_SESSION['product.totalSum']) ? $_SESSION['product.totalSum'] + $product->price : $product->price;

    }

    public function recalcBasket($id) {
        $quantity = $_SESSION['basket'][$id]['productQuantity'];
        $price = $_SESSION['basket'][$id]['price'] * $quantity;

        $_SESSION['product.totalSum'] -= $price;
        unset($_SESSION['basket'][$id]);
    }
}