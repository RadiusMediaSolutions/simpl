<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h1 class="mb-lg-5 mb-4">
                        <?php  the_title();?>
                    </h1>
                    <p> <?php the_content(); ?></p>
                </div>

            </div>
        </div>
    </section>
</main>

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>