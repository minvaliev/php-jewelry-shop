<?php
use yii\helpers\Url;
?>

<nav id="menu">
    <div class="container">
        <div class="trigger"></div>
        <ul>
            <?php foreach ($data as $id) {?>
            <li><a href="<?=Url::to(['category/view', 'name' => $id['cat_name']])?>"><?=$id['cat_name']?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- / container -->
</nav>
<!-- / navigation -->