<?php

get_header();
// Template Name: card-page

?>


<!-- root page or what you know as the "home page" as rest does the rest of internet -->
<?php
while (have_posts()): the_post();
?>
    <h1><?php the_title(); ?> </h1>

    <?php the_content(); ?> 

<?php
endwhile;
?>

<!-- this is where querrys are  -->
<!-- products --> 

<div id="product-container">
<div class="product-container">
    <?php
        get_template_part('template-parts/aside-card-types');
    ?>
    <div class="card-container">
    <?php
            $productsArgs = array(
                'post_type' => 'product',
                'orderby'=> 'ASC',
                
            );
            $productsQ = new WP_Query( $productsArgs);
            if ($productsQ->have_posts()){
                ?> 
                
                    <div class="product-list">
                        <?php
                    
                            while ($productsQ ->have_posts()){
                            
                            $productsQ->the_post();

                            ?>
                            <div class="product-item">
                            <a href="<?php echo get_the_permalink(); ?>" class="product-link">
                                    <p class="card-title" href=""> <?php the_title(); ?></p>
                                    <?php
                                    
                                        the_post_thumbnail();
                                    ?> 
                                    <?php
                                    $product = wc_get_product( get_the_ID() );
                                    $price = $product->get_price_html();
                                    ?> 
                                    <span class="card-price"><?php echo $price?></span>
                                </a>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                
                <?php
            }
            wp_reset_postdata();
        ?>
    </div>
        
 </div>


</div>

<?php

get_footer();

?>