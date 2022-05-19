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
          <section class="atelier__resume">
               <?php the_field('resume'); ?>
          </section>
          <p class="atelier__animateur">
          <?php the_field('animateur'); ?>
          </p>
          <p class="atelier__dateDebut">
          <?php the_field('dateDebut'); ?>
          <p class="atelier__dateFin">
          <?php the_field('dateFin'); ?>
          </p>
          <p class="atelier__horaire">
          <?php the_field('horaire'); ?>
          </p>
          <p class="atelier__heureDebut">
          <?php the_field('heureDebut'); ?>
          </p>
          <p class="atelier__heureFin">
          <?php the_field('heureFin'); ?>
          </p>  
          <p class="atelier__duree">
          <?php the_field('duree'); ?>
          </p>
          <p class="atelier__local">
          <?php the_field('local'); ?>
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