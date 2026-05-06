<?php get_header(); ?>

<section class="hero-slider">

    <?php
    $query = new WP_Query([
        'category_name' => 'destacado-home',
        'posts_per_page' => 5
    ]);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();

            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>

            <div class="slide" style="background-image: url('<?php echo $image; ?>');">
                <div class="overlay"></div>

                <div class="hero-content">
                    <h1><?php the_title(); ?></h1>
                    <a href="<?php the_permalink(); ?>" class="btn">Ver más</a>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

</section>

<!-- ABOUT -->
<section class="section">
    <h2>¿Qué es Forasteros?</h2>
    <p>
        Un movimiento que vive para llevar el evangelio,
        servir a otros y formar discípulos.
    </p>
</section>

<!-- WHAT WE DO -->
<section class="section">
    <h2>Lo que hacemos</h2>

    <div class="grid">

        <!-- EVANGELISMO -->
        <div class="card">
            <h3>Evangelismo</h3>
            <svg viewBox="0 0 24 24" class="icon">
                <path d="M12 4v16M8 8h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" fill="none" />
            </svg>
        </div>

        <!-- AYUDA SOCIAL -->
        <div class="card">
            <h3>Ayuda social</h3>
            <svg viewBox="0 0 24 24" class="icon">
                <path d="M8 12l2 2 4-4M2 12a10 10 0 1020 0 10 10 0 10-20 0z" stroke="currentColor" stroke-width="1.5"
                    fill="none" />
            </svg>
        </div>

        <!-- FORMACIÓN -->
        <div class="card">
            <h3>Formación</h3>
            <svg viewBox="0 0 24 24" class="icon">
                <path d="M4 6h10a2 2 0 012 2v10H6a2 2 0 01-2-2V6zM14 6v12" stroke="currentColor" stroke-width="1.5"
                    fill="none" />
            </svg>
        </div>

        <!-- MISIONES -->
        <div class="card">
            <h3>Misiones</h3>
            <svg viewBox="0 0 24 24" class="icon">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" fill="none" />
                <path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18" stroke="currentColor" stroke-width="1.5"
                    fill="none" />
            </svg>
        </div>

    </div>
</section>

<section class="section-light">
    <h1>Impacto</h1>

    <div class="stats">
        <div class="stat">+120<br><small>Personas alcanzadas</small></div>
        <div class="stat">+30<br><small>Voluntarios</small></div>
        <div class="stat">+5<br><small>Misiones</small></div>
        <div class="stat">+4<br><small>Países</small></div>
    </div>
</section>

<!-- ABOUT US -->
<section class="section">
    <h2>Quiénes somos</h2>
    <p>
        No somos turistas espirituales.
        Somos enviados.
        Creemos en vivir el evangelio fuera de las paredes.
    </p>
</section>

<section class="section cta">
    <h2>¿Quieres ser parte de la misión?</h2>

    <form class="cta-form">
        <div class="form-grid">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="tel" name="telefono" placeholder="Teléfono">
        </div>

        <button type="submit" class="btn" style="background-color: #000;">Únete</button>
    </form>
</section>

<?php get_footer(); ?>