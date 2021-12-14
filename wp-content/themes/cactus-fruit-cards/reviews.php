<?php
// Template Name: reviews-page 
get_header();
?>

<div class="review-container">
<?php
            
            $reviewArgs = array(
                'post_type' => 'review',
                'orderby'=> 'ASC',
                
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
        
    </div>


    
</div>
<?php
get_footer();
?>

