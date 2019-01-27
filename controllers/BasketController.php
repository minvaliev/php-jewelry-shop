<?php
/**
 * Created by PhpStorm.
 * User: Альберт
 * Date: 25.01.2019
 * Time: 0:49
 */

namespace app\controllers;


use app\models\Basket;
use app\models\Order;
use app\models\Product;
use yii\web\Controller;
use Yii;

class BasketController extends Controller
{
    public function actionOrder () {
        $session = Yii::$app->session;
        $session->open();
    }

    public function actionDelete ($id) {
        $session = Yii::$app->session;
        $session->open();
        $product = new Basket();
        $product = $product->recalcBasket($id);
        $this->layout = 'basket-delete-layout';
        return $this->render('index', compact( 'session'));
    }

    public function actionAdd ($name) {
        $product = new Product();
        $product = $product->getOneProduct($name);
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('basket');
//        $session->remove('product.totalSum');
//        $session->remove('product.totalQuantity');
        $basket = new Basket();
        $basket = $basket->addToBasket($product);
        $this->layout = 'basket-layout';
        return $this->render('index', compact('product', 'session'));
    }

    public function actionOpen () {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        $this->layout = 'basket-layout';
        return $this->render('index', compact('session', 'order'));
    }

}