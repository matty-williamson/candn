<?php
/**
 * Template Name: Home
 *
 * This is the template that displays the home page.
 *
 * @package Creare Boilerplate
 */

get_header(); ?>

<section id="home-page" class="content-area">

  <div class="wrapper">

    <main id="main" class="site-main two-thirds" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // end of the loop. ?>

    </main>

    <?php get_sidebar(); ?>
  
  </div>

</section>

<?php get_footer(); ?>