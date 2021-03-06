<?php

    function display_product( $product ) {
        $productImageURL = isset( $product['productImageURL'] ) ? $product['productImageURL'] : '#';
        $oldPrice = isset( $product['oldPrice'] ) ? $product['oldPrice'] : '';
        $newPrice = isset( $product['newPrice'] ) ? $product['newPrice'] : '';
        $price = isset( $product['price'] ) ? $product['price'] : '';
        $productName = isset( $product['product_name'] ) ? $product['product_name'] : '';
        ?>
        <div class="product"> 
            <?php
                if($product['wishlist']==true) {
            ?>
                <div class="yith-wcwl-add-to-wishlist">
                    <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                </div> 
             <?php } ?> 
             
        	<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
            
                <?php
                    if($product['onsale']==true) {
                ?>
                    <span class="onsale"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.04</span></span>
                <?php } ?> 

                    
                <img src="<?php echo $productImageURL;?>" width="224" height="197" class="wp-post-image" alt="">

                <span class="price">
                    <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
                    <?php if($oldPrice):?>
                        <del><span class="amount"><?php echo $oldPrice;?></span></del>
                    <?php endif;?>
                    <span class="amount"> <?php echo $price;?></span>
                </span><!-- /.price -->

                <h2 class="woocommerce-loop-product__title"><?php echo $productName;?></h2>
            </a>  


            <?php
                if($product['starrating']==true) {
            ?>

                <div class="techmarket-product-rating">
                    <div class="star-rating" title="Rated 0 out of 5">
                        <span style="width:0%"><strong class="rating">0</strong> out of 5</span>
                    </div> 
                    <span class="review-count">(5)</span>
                </div>

            <?php } ?>

            <div class="hover-area">
                <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">Add to cart</a>
                <a class="add-to-compare-link" href="index.php?page=compare">Add to compare</a>
            </div>
        </div><!-- /.product-outer -->
        <?php
    }
?>