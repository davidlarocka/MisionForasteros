<?php get_header(); ?>

<section class="error-404">

    <div class="error-overlay"></div>

    <div class="error-content">

        <h1>404</h1>

        <h2>Parece que este camino no existe.</h2>

        <p>
            La página que buscas fue movida, eliminada
            o simplemente nunca estuvo aquí.
        </p>

        <!-- BUSCADOR -->
        <form role="search"
              method="get"
              class="category-search"
              action="<?php echo home_url('/'); ?>">

            <input type="search"
                   name="s"
                   placeholder="Buscar artículos...">

            <button type="submit">Buscar</button>

        </form>

        <!-- CTA -->
        <a href="<?php echo home_url(); ?>" class="btn">
            Volver al inicio
        </a>

    </div>

</section>

<?php get_footer(); ?>