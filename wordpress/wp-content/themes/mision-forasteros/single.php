<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- HERO (60% alto) -->
<section class="single-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- CONTENIDO -->
<section class="single-content section-light">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>