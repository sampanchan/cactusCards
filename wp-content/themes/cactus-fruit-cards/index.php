<?php
// Template Name: blog-page 
get_header();
?>
<h1>My Blog</h1>
<?php
while (have_posts()): the_post();
?>
    
    <h2><?php the_title(); ?> </h2>

    <?php the_content(); ?> 
    <?php
endwhile;
?>

<!-- <h1>HIIIIII</h1> -->

<?php
get_footer();
?>