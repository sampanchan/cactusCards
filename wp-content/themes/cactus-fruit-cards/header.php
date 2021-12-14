


<html>
    <head>
        
        <?php
        wp_head();
        ?>
    </head>
    <body>
    <div class="page-container">
        <header class="site-header">
            <div>
                <div class="site-name">
                    <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/assets/img/logo.jpg" alt="logo">
                    <a  class ="wordpress-a" href="<?php echo home_url('/')?>"><?php echo get_bloginfo('name');?></a>
                </div>
                
                <div class="navigation">
                
                    <input type="checkbox" id="hamburger-nav" />
                    <label for="hamburger-nav" class="hamburger-nav" id="menu" aria-label="menu" tabindex="1"> 
                        <span></span> 
                        <span></span> 
                    </label>
                        <nav class="header-nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'cfc-menu-class',
                                'container_class' => 'cfc-container-class',
                                'items_wrap' => '<ul id="cfc-menu" class="%2$s">%3$s</ul>'
                            ));
                            ?>
                            <ol class="aside">
                                <ul class="aside-ul">
                                    <li><span class="card-type">All</span></li>
                                    <li><span class="card-type">Christmas</span></li>
                                    <li><span class="card-type">Birthday</span></li>
                                    <li><span class="card-type">Love</span><</li>
                                    <li><span class="card-type">Wedding</span></li>
                                    <li><span class="card-type">Graduation</span></li>
                                    <li><span class="card-type">Just Because</span></li>
                                    <li><span class="card-type">Get Well Soon</span></li>
                                    <li><span class="card-type">Father's Day</span></li>
                                    <li><span class="card-type">Mother's Day</span></li>
                                </ul>
                            </ol>
                        </nav>
                </div>
               
            </div>
        </header>






