<?php get_header() ?>
<main class="site__main">

    
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>