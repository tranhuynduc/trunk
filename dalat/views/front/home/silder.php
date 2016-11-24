<div class="slider-layout">
    <div class="container">
        <div class="inner-container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                    <div class="menu-left">
                        <div class="menu-left-header"><h2>Newest</h2> </div>
                        <?php $product_latest = get_product_latest_list($db);
                        while($category_active = mysqli_fetch_assoc($product_latest)):?>
                            <div class="menu-left-item">
                                <a  href="<?php echo SITE_URL . 'product-list.php?category_id=' .  $category_active['product_id']; ?>"><?php echo  $category_active['name']; ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12">
                    <ul class="box-pagination" id="choose">
                        <li data-id="1" class="slide-choose"><a href="#">1</a></li>
                        <li data-id="2" class="slide-choose"><a href="#">2</a></li>
                        <li data-id="3" class="slide-choose"><a href="#">3</a></li>
                        <li data-id="4" class="slide-choose"><a href="#">4</a></li>
                        <li data-id="5" class="slide-choose"><a href="#">5</a></li>

                    </ul>
                    <div id="slider">

                        <ul class="slides">
                            <?php while($product_active = mysqli_fetch_assoc($product_latest_list)): ?>
                                <li class="slide">
                                    <img src="<?php echo SITE_URL . 'userfiles/' . $product_active['image']; ?>" />
                                </li>
                            <?php endwhile; ?>
                            <?php $latest_product_result = get_product_latest_list($db, 1);
                            $latest_product = mysqli_fetch_assoc($latest_product_result);?>
                            <li class="slide">
                                <img src="<?php echo SITE_URL . 'userfiles/' . $latest_product['image']; ?>" />
                            </li>

                        </ul>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>