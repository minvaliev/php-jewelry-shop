
<div id="body">
    <div class="container">
        <div id="content" class="full">
            <div class="product">
                <div class="image">
                    <img src="<?=$product['img']?>" alt="">
                </div>
                <div class="details">
                    <h1><?=$product['name']?></h1>
                    <h4><?='$' . $product['price']?></h4>
                    <div class="entry">
                        <p><?=$product['description']?></p>
                        <div class="tabs">
                            <div class="nav">
                                <ul>
                                    <li class="active"><a href="#desc">Description</a></li>
                                    <li><a href="#spec">Specification</a></li>
                                    <li><a href="#ret">Returns</a></li>
                                </ul>
                            </div>
                            <div class="tab-content active" id="desc">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                            <div class="tab-content" id="spec">
                                <p>выsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia ывф sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                            <div class="tab-content" id="ret">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <label>Quantity:</label>
                        <select><option>1</option></select>
                        <a href="#" class="btn-grey">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->