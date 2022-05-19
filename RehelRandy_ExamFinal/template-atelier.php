<?php
/**
* Template Name: ateliers
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
     <article class="atelier">
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>
          <h2> Description de l'atelier </h2>
          <p class="atelier__animateur"> L'animateur de l'atelier:
          <?php the_field('animateur'); ?>
          </p>

          <p class="atelier__local"> L'atelier sera donne au local:
          <?php the_field('local'); ?>
          <section class="atelier__resume">
               <?php the_field('resume'); ?>
          </section>
          <h2> Date et heures de l'atelier </h2>
          
          <p class="atelier__dateDebut"> Date de debut:
          <?php the_field('dateDebut'); ?>
          <p class="atelier__dateFin"> Date de fin:
          <?php the_field('dateFin'); ?>
          </p>
          <p class="atelier__horaire"> La formation se donnera:
          <?php the_field('horaire'); ?>
          </p>
          <p class="atelier__heure"> L'horaire est de 
          <?php the_field('heureDebut'); ?>
          a
          <?php the_field('heureFin'); ?>
          </p>  
          <p class="atelier__duree"> Duree de chacune des seances est de:
          <?php the_field('duree'); ?>
          heures
          </p>
          
          </p>
          <?php 
          $image = get_field('image');
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>

     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>