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
use yii\helpers\Url;

class BasketController extends Controller
{
    public function actionOrder () {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        if (!$session['product.totalSum']) {
            return Yii::$app->response->redirect(Url::to('/'));
        }
        if ($_POST['name']&&$_POST['email']&&$_POST['phone']&&$_POST['adress']) {
            $order = new Order();
            $order->name = $_POST['name'];
            $order->email = $_POST['email'];
            $order->phone = $_POST['phone'];
            $order->adress = $_POST['adress'];
            $order->date = date('Y-m-d H:i:s');
            $order->sum = $session['product.totalSum'];
            if ($order->save()) {
                $currentId = $order->id;
                Yii::$app->mailer->compose('order-mail', ['session' => $session, 'order' => $order])
                    ->setFrom(['minvalievalbert@mail.ru' => 'Diana_s_jewelry'])
                    ->setTo($order->email)
                    ->setSubject('Ваш заказ принят')
                    ->send();
                $this->layout = 'basket-layout';
                return $this->render('success', compact('session', 'currentId'));
            }
        }
        $this->layout ='basket-layout';
        return $this->render('index', compact( 'session'));

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
        $this->layout = 'basket-layout';
        return $this->render('index', compact('session'));
    }

}