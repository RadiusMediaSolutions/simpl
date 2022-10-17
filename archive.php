<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
    <div class="content-area">
        <h1 class="mb-lg-5 mb-4">
            <?php  the_title();?>
        </h1>
        <p> <?php the_content(); ?></p>
    </div>

</div>

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>