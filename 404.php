<?php get_header(); ?>

<section class="error-page">
    <div class="container">
        <div class="text-wrapper">
            <h1>
                Błąd 404
            </h1>
            <br>
            <p>
                Przepraszamy, strona nie została znaleziona
            </p>
            <br>

            <div class="btn-wrapper">
                <a href="<?php echo get_home_url(); ?>" class="btn btn-primary" title="Przejdź do strony głównej">
                    Przejdź do strony głównej
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>