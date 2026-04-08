<?php get_header(); ?>
<section class="page-content glass-panel" style="max-width: 1200px; margin: 8rem auto 4rem; padding: 3rem;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="section-title" style="margin-top:0;"><?php the_title(); ?></h1>
        <div class="content-body" style="color: white; font-family: 'Rajdhani', sans-serif; font-size: 1.1rem; line-height: 1.6;">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
