<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<?php
$this->title = 'Diana’s jewelry' . ' | ' . 'Basket';
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

            <h2 class="headline">Checkout</h2>

            <form method="POST" action="<?=Url::to(['basket/order'])?>">
                <div class="input">
                    <input class="input-one" type="text" name="name" required placeholder="Enter your name" > <br>
                    <input class="input-one" type="email" name="email" required placeholder="Enter email"> <br>
                    <input class="input-one" type="text" name="phone" required placeholder="Enter your phone"> <br>
                    <input class="input-one"type="text" name="adress" required placeholder="Enter your adress"> <br>
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                </div>
                <div class="total-count">
                    <h3 style="display: none" class="total-quantity"><?=$session['product.totalQuantity']?></h3>
                    <h3>Total to pay: $<strong><?=$session['product.totalSum']?></strong></h3>
<!--                    <input  class="btn-grey" type="submit">-->
                    <button class="btn-grey" type="submit" >SEND</button>
                </div>
            </form>

            <style>
                .headline {
                    padding-top: 25px;
                    text-align: center;
                    font-size: 20px;
                }
                .input {
                    padding-top: 15px;
                    padding-bottom: -20px;
                    top: 10px;
                    width: 48%;
                    margin: auto;
                    display: flex;
                    flex-direction: column;

                }
                .input-one {
                    padding-left: 6px;
                    height: 40px;
                    font-size: 17px;
                    border: 1px solid #d3d3d3;
                }

                ::-webkit-input-placeholder {color:#000000; opacity:0.4;}/* webkit */
                ::-moz-placeholder          {color:#000000; opacity:0.4;}/* Firefox 19+ */
                :-moz-placeholder           {color:#000000; opacity:0.4;}/* Firefox 18- */
                :-ms-input-placeholder      {color:#000000; opacity:0.4;}/* IE */

            </style>

        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<?php } else { ?>
<h1 style="padding-top: 100px; padding-bottom: 100px; text-align: center;">YOUR BASKET HAS NO NOTHING :(</h1>
<?php } ?>

