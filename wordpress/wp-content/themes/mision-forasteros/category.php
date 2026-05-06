<?php get_header(); ?>

<?php
$category = get_queried_object();

$latest_post = new WP_Query([
    'posts_per_page' => 1,
    'cat' => $category->term_id
]);

if ($latest_post->have_posts()) :
    while ($latest_post->have_posts()) : $latest_post->the_post();
?>

<!-- HERO -->
<section class="category-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <h1><?php single_cat_title(); ?></h1>

        <!-- BUSCADOR -->
        <form role="search" method="get" class="category-search" action="<?php echo home_url('/'); ?>">

            <input type="search"
                   name="s"
                   placeholder="Buscar artículos..."
                   value="<?php echo get_search_query(); ?>">

            <!-- limitar búsqueda a categoría -->
            <input type="hidden"
                   name="category_name"
                   value="<?php echo $category->slug; ?>">

            <button type="submit">Buscar</button>

        </form>

    </div>

</section>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>

<!-- POSTS -->
<section class="category-posts section-light">

    <div class="container">

        <div class="posts-grid">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="post-card">

                    <a href="<?php the_permalink(); ?>">

                        <div class="post-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <div class="post-content">
                            <h3><?php the_title(); ?></h3>

                            <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                            </p>
                        </div>

                    </a>

                </article>

            <?php endwhile; endif; ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>