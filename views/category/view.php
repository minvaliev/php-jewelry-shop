<?php
use yii\helpers\Url;
?>
<div id="body">
        <div class="container">
            <div class="pagination">
                <ul>
                    <li><a href="#"><span class="ico-prev"></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="ico-next"></span></a></li>
                </ul>
            </div>
            <div class="products-wrap">
                <aside id="sidebar">
                    <div class="widget">
                        <h3>Products per page:</h3>
                        <fieldset>
                            <input checked type="checkbox">
                            <label>8</label>
                            <input type="checkbox">
                            <label>16</label>
                            <input type="checkbox">
                            <label>32</label>
                        </fieldset>
                    </div>
                    <div class="widget">
                        <h3>Sort by:</h3>
                        <fieldset>
                            <input checked type="checkbox">
                            <label>Popularity</label>
                            <input type="checkbox">
                            <label>Date</label>
                            <input type="checkbox">
                            <label>Price</label>
                        </fieldset>
                    </div>
                    <div class="widget">
                        <h3>Condition:</h3>
                        <fieldset>
                            <input checked type="checkbox">
                            <label>New</label>
                            <input type="checkbox">
                            <label>Used</label>
                        </fieldset>
                    </div>
                    <div class="widget">
                        <h3>Price range:</h3>
                        <fieldset>
                            <div id="price-range"></div>
                        </fieldset>
                    </div>
                </aside>
                <div id="content">
                    <section class="products">
                        <?php foreach ($product as $products) {?>
                            <article>
                                <a href="<?=Url::to(['product/index', 'name' => $products['name']])?>"> <img style="width: 100px; height: 194px" src="<?=$products['img']?>" alt=""></a>
                                <h3><a href="<?=Url::to(['product/index', 'name' => $products['name']])?>"><?=$products['name']?></a></h3>
                                <h4><?='$' . ' ' . $products['price']?></h4>
                                <a href="cart.html" class="btn-add">Add to cart</a>
                            </article>
                        <?php } ?>
                    </section>
                </div>
                <!-- / content -->
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#"><span class="ico-prev"></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="ico-next"></span></a></li>
                </ul>
            </div>
        </div>
        <!-- / container -->
</div>
<!-- / body -->

