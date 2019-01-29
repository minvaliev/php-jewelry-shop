<?php
$this->title = 'Diana’s jewelry' . ' | ' . 'Thank you for the order';
?>

<h1 style="padding-top: 30px; font-size: 35px;">THANKS FOR YOUR PURCHASE) YOUR ORDER UNDER "<?=$currentId?>" IS ACCEPTED.</h1>
<h3 style="font-weight: bold;">Your data:</h3>
<p><i style="font-weight: bold;">Имя:</i> <?=$_POST['name']?></p>
<p><i style="font-weight: bold;">Name:</i> <?=$_POST['adress']?></p>
<p><i style="font-weight: bold;">Email:</i> <?=$_POST['email']?></p>
<p><i style="font-weight: bold;">Phone number:</i> <?=$_POST['phone']?></p>
<p style="font-weight: bold; padding-top: 20px;">Information about order:</p>
<div class="table-responsive" style="padding-bottom: 30px;">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd">Name</th>
            <th style="padding: 8px; border: 1px solid #ddd">Amount</th>
            <th style="padding: 8px; border: 1px solid #ddd">Price</th>
            <th style="padding: 8px; border: 1px solid #ddd">Amount</th>
        </tr>
        </thead>
        <tbody>
        <?foreach ($session['basket'] as $id=>$item) {?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd">
                    <?=$item['name']?></td>
                <td style="padding: 8px; border: 1px solid #ddd"><?=$item['productQuantity']?></td>
                <td style="padding: 8px; border: 1px solid #ddd"><?=$item['price'] ?> $</td>
                <td style="padding: 8px; border: 1px solid #ddd"><?=$item['price']*$item['productQuantity'] ?> $</td>
            </tr>
        <? } ?>
        <tr>
            <td colspan="3">TOTAL:</td>
            <td><?=$session['product.totalQuantity'] ?> th</td>
        </tr>
        <tr>
            <td colspan="3">For the amount of:</td>
            <td><b><?=$session['product.totalSum'] ?></b> $</td>
        </tr>
        </tbody>
    </table>

</div>

<?php
$session->remove('basket');
$session->remove('product.totalSum');
$session->remove('product.totalQuantity');
?>