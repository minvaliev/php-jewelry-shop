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

            <div class="total-count">
                <h3>Total to pay: <strong><?='$' . $session['product.totalSum']?></strong></h3>
                <a href="#" class="btn-grey">Finalize and pay</a>
            </div>

        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<?php } else { ?>
<h1 style="padding-top: 100px; padding-bottom: 100px; text-align: center;">YOUR BASKET HAS NO NOTHING :(</h1>
<?php } ?>

