<?php
/**
 * Created by PhpStorm.
 * User: Альберт
 * Date: 24.01.2019
 * Time: 19:57
 */

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex($name) {
        $product = new Product();
        $product = $product->getOneProduct($name);
        $this->layout = 'product-layout';
        return $this->render('index', compact('product'));
    }
}