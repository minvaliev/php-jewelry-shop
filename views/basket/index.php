<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<?php
if ($session['basket']) {
?>
<div id="body-basket">
    <div class="container">
        <div id="content" class="full">
            <div class="cart-table">
                <table>
                    <tr>
                        <th class="items">Items</th>
                        <th class="price">Price</th>
                        <th class="qnt">Quantity</th>
                        <th class="total">Total</th>
                        <th class="delete"></th>
                    </tr>
                    <?php foreach ($session['basket'] as $id => $product) { ?>
                    <tr>
                        <td class="items">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <h3><a href="#"><?=$product['name']?></a></h3>
                            <p><?=$product['description']?></p>
                        </td>
                        <td class="price"><?='$' . $product['price']?></td>
                        <td class="qnt"><select><option><?=$product['productQuantity']?></option><option>1</option></select></td>
                        <td class="total"><?='$' . $product['price']*$product['productQuantity']?></td>
                        <td class="delete" data-id="<?=$id?>"><a href="#" class="ico-del" ></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

            <h2>Оформление заказа</h2>

            <form method="POST" action="<?=Url::to(['basket/order'])?>">
                <p>Регистрация на сайте</p>
                <input type="text" name="name" required placeholder="Enter your name" > <br>
                <input type="email" name="email" required placeholder="Enter email"> <br>
                <input type="text" name="phone" required placeholder="Enter your phone"> <br>
                <input type="text" name="adress" required placeholder="Enter your adress"> <br>
                <input  class="btn-grey" type="submit">
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
<!--                <div class="total-count">-->
<!--                    <h3 style="display: none" class="total-quantity">--><?//=$session['product.totalQuantity']?><!--</h3>-->
<!--                    <h3>Total to pay: <strong>--><?//=$session['product.totalSum']?><!--</strong></h3>-->
<!--                    <!--                <a href="#" class="btn-grey">Finalize and pay</a>-->-->
<!--                    <input  class="btn-grey" type="submit">-->
<!--                </div>-->
            </form>

            <?php
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";
            ?>

        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<?php } else { ?>
<h1 style="padding-top: 100px; padding-bottom: 100px; text-align: center;">YOUR BASKET HAS NO NOTHING :(</h1>
<?php } ?>

