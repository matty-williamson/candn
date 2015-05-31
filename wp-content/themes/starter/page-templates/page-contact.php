<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays the home page.
 *
 * @package Creare Boilerplate
 */

get_header(); ?>

<section id="contact-page" class="content-area">

  <div class="wrapper">

    <main id="main" class="site-main two-thirds left" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?> 

      <?php endwhile; // end of the loop. ?>

    </main>

    <?php get_sidebar(); ?>
  
  </div>

</section>

<?php get_footer(); ?>