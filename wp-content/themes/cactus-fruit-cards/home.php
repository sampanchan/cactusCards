<?php
// Template Name: blog-page 
get_header();
?>

<div class="blog-container">
    <h1>My Blog</h1>
<?php
            $sticky = get_option( 'sticky_posts' );
            $blogArgs = array(
                'post_type' => 'post',
                // 'p' => $sticky[0],
                'orderby'=> 'rand',
                
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
         
    </div>


   
</div>

<!-- <h1>HIIIIII</h1> -->

<?php
get_footer();
?>