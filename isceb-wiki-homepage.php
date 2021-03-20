<?php
/**
* Template Name: WikiHomepage
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>

<?php

get_header(); ?>

<?php
wp_nav_menu( array( 
    'theme_location' => 'top', 
    'container_class' => 'custom-menu-class' ) ); 
?>

<div class="wiki-homepage-content-wrapper">
    <div class="wiki-homepage-content">
        <?php the_content(); ?>
    </div>
</div>
<?php   

