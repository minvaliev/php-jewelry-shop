<?php
/**
 * Created by PhpStorm.
 * User: Альберт
 * Date: 23.01.2019
 * Time: 22:53
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Product;

class CategoryController extends Controller
    {
        public function actionIndex () {
            $product = new Product();
            $product = $product->getAllProduct();
            return $this->render('index', compact('product'));
        }

        public function actionView ($name) {
            $product = new Product();
            $product = $product->getProductsCategories($name);
            $this->layout = 'category-layout';
            return $this->render('view', compact('product'));
        }
    }