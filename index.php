<?php get_header() ?>

<main class="princpal">
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php 
                if(have_posts()):
                    while(have_posts()): the_post(); ?>
                <article class="formation__cours">
                    <?php 
                        $titre = get_the_title();
                        $titreFiltre =  substr($titre,7);
                        $titreFiltre = substr($titreFiltre, 0, strrpos($titreFiltre, '('));
                        $nb_heure = substr($titre, -6);
                        ?>
                    <h3 class="cours__titre"><?php echo $titreFiltre; ?></h3>
                    <p class="cours__sigle"><?php echo substr(get_the_title(),0,7);?></p>
                    <p class="cours__description"> <?php echo get_the_excerpt() ?></p>
                    <p class="cours__heure"> <?php echo $nb_heure ?> </p>
        </article>
        <?php endwhile ?>
        <?php endif ?>
        <div>
    </section>
   
    </main>
    <?php get_footer() ?>