<?php
use yii\helpers\Url;
?>
<?php
$this->title = 'Diana’s jewelry' . ' | ' . 'Home page';
?>
<div class="last-products">
    <h2>Last added products</h2>

    <section class="products">
        <?php foreach ($product as $products) {?>
        <article>
            <a href="<?=Url::to(['product/index', 'name' => $products['name']])?>"> <img style="width: 100px; height: 194px" src="<?=$products['img']?>" alt=""></a>
            <h3><a href="<?=Url::to(['product/index', 'name' => $products['name']])?>"><?=$products['name']?></a></h3>
            <h4><?='$' . ' ' . $products['price']?></h4>
            <a href="#" data-name="<?=$products['name']?>" class="btn-add">Add to cart</a>
        </article>
        <?php } ?>
    </section>
</div>
