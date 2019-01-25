<?php
/**
 * Created by PhpStorm.
 * User: Альберт
 * Date: 24.01.2019
 * Time: 4:33
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;
class Category extends ActiveRecord
    {
        public static function tableName()
        {
            return 'category';
        }

        public function getCategories () {
            $categories = Yii::$app->cache->get('categories');
            if (!$categories) {
                $categories = Category::find()->asArray()->all();
                Yii::$app->cache->set('categories', $categories, 20);
            }
            return $categories;
        }
    }