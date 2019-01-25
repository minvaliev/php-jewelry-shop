<?php

namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Product extends ActiveRecord

    {
        public static function tableName()
    {
        return 'products';
    }
        public function getAllProduct () {
            $product = Yii::$app->cache->get('product');
            if (!$product) {
                $product = Product::find()->limit(10)->orderby(['id'=>SORT_DESC])->asArray()->all();
                Yii::$app->cache->set('product',$product,20);
            }
            return $product;
        }


        public function getProductsCategories ($name) {
            $catProduct = Yii::$app->cache->get("catProduct{$name}");
            if (!$catProduct) {
                $catProduct = Product::find()->where(['category_name' => $name])->limit(10)->orderby(['id'=>SORT_DESC])->asArray()->all();
                Yii::$app->cache->set("catProduct{$name}", $catProduct, 20);
            }
            return $catProduct;
        }

        public function getOneProduct ($name) {
            return Product::find()->where(['name' => $name ])->one();
        }

    }