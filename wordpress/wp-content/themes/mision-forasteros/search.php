<?php get_header(); ?>

<?php
$search_query = get_search_query();

/* obtener primer post con imagen para hero */
$hero_query = new WP_Query([
    's' => $search_query,
    'posts_per_page' => 1
]);

$hero_image = '';

if ($hero_query->have_posts()) :
    while ($hero_query->have_posts()) : $hero_query->the_post();

        if (has_post_thumbnail()) {
            $hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }

    endwhile;
    wp_reset_postdata();
endif;
?>

<!-- HERO -->
<section class="category-hero"
    style="background-image: url('<?php echo $hero_image; ?>');">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <h1>
            Resultados para:
            "<?php echo esc_html($search_query); ?>"
        </h1>

        <!-- BUSCADOR -->
        <form role="search"
              method="get"
              class="category-search"
              action="<?php echo home_url('/'); ?>">

            <input type="search"
                   name="s"
                   placeholder="Buscar artículos..."
                   value="<?php echo get_search_query(); ?>">

            <button type="submit">Buscar</button>

        </form>

    </div>

</section>

<!-- RESULTADOS -->
<section class="category-posts section-light">

    <div class="container">

        <?php if (have_posts()) : ?>

            <div class="posts-grid">

                <?php while (have_posts()) : the_post(); ?>

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

                <?php endwhile; ?>

            </div>

        <?php else : ?>

            <div class="no-results">
                <h2>No se encontraron resultados</h2>
                <p>Intenta buscar otra palabra clave.</p>
            </div>

        <?php endif; ?>

    </div>

</section>

<?php get_footer(); ?>