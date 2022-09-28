<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main>
    <section>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>