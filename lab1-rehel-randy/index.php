<?php get_header(); ?>
    <h1>
        Vive wordpress!
    </h1>
    <?php
        if (have_posts()):
            while (have_posts()): the_post();
            the_title('<h2>' , '</h2>');
            the_content('<p>','</p>');
            endwhile;
        endif; 
    ?>   
<?php get_footer();?>

