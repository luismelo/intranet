<?php
/* 
Template Name: Archives
*/
get_header(); ?>

<div id="primary" class="site-content">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
				
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>