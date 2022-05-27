<?php
/**
* Template Name: Évenement
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
     <article class="evenement">
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>
          <h2>Description de l'evenement</h2>
          <section class="evenement__resume">
               <?php the_field('resume'); ?>
          </section>
          <p class="evenement__endroit"> L'endroit ou se deroulera l'evenement: <br>
          <?php the_field('endroit'); ?>
          </p>
          <p class="evenement__date"> La date de l'evenement:
          <?php the_field('date'); ?>
          </p>
          <p class="evenement__heure"> L'heure a laquelle commence l'evenement:
          <?php the_field('heure'); ?>
          </p>
          <p>L'evenement sera organisé par <?php the_field('organisateur'); ?> </p>
          <?php 
          $image = get_field('image');
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>

     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>