<?php

get_header();

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
<p class="title-description"> I make greeting cards with a lating flare.</p>
<div id="product-container">
<div class="product-container">
    <?php
        get_template_part('template-parts/aside-card-types');
    ?>
    <div class="card-container">
    <?php
            $productsArgs = array(
                'post_type' => 'product',
                'orderby'=> 'rand',
                'posts_per_page' => '4',
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

<button><a href="/cards/">View More</a></button>
</div>
<!-- blog (1) -->
<div class="blog-container">
<?php
            $sticky = get_option( 'sticky_posts' );
            $blogArgs = array(
                'post_type' => 'post',
                'p' => $sticky[0],
                // 'orderby'=> 'rand',
                'posts_per_page' => '1',
            );
            $blogQ = new WP_Query( $blogArgs);
            if ($blogQ->have_posts()){
                ?> 
                
                    <div class="blog-list">
                        <?php
                    
                            while ($blogQ ->have_posts()){
                            $blogQ->the_post();

                            ?>
                            
                                 <h3><?php the_title();?></h3>
                                 <div class="flex-blog">
                                    <?php the_content();?>
                                    <?php the_post_thumbnail();?> 
                                 </div>
                                 
                             
                            
                            <?php
                            }
                        ?>
                    </div>
                
                <?php
            }
            wp_reset_postdata();
        ?>
         <button><a href="/blog/">View More</a></button>
    </div>


   
</div>
<!-- reviews -->
<div class="review-container">
<?php
            
            $reviewArgs = array(
                'post_type' => 'review',
                'orderby'=> 'rand',
                'posts_per_page' => '4',
            );
            $reviewQ = new WP_Query( $reviewArgs);
            if ($reviewQ->have_posts()){
                ?> 
                
                    <div class="review-list">
                        <?php
                    
                            while ($reviewQ ->have_posts()){
                            $reviewQ->the_post();

                            ?>
                            <div class="review">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="review-content"><?php the_content(); ?></p>
                                <p class="review-name"><?php echo get_field('name')?></p>
                                <p class="review-year"><?php echo get_field('year')?></p>
                            </div>
                            
                            <?php
                            }
                        ?>
                    </div>
                <?php
            }
            wp_reset_postdata();
        ?>
         
    
   

    <button><a href="/reviews/">View More</a></button>
</div>



<?php

get_footer();

?>