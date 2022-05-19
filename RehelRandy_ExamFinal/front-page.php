<?php get_header() ?>
<main class="site__main">
<h1>Randy Rehel</h1>

    <h1>Les études en TIM</h1>
    
    <?php 
    /* --------------------------------------------- menu accueil */
    wp_nav_menu(array("menu"=>"menu_accueil",
                              "container_class"=>"site__footer__menu",
                              "menu_class"=>"site__footer__menu__ul")); ?>
    
   <?php 
   /* --------------------------------------------- menu ateliers */
   wp_nav_menu(array("menu"=>"menu_ateliers",
                              "container_class"=>"ateliers__menu",
                              "menu_class"=>"ateliers__menu__ul")); ?>

   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content() ?>   
   <?php endif ?>
   
</main>
<?php get_footer() ?>