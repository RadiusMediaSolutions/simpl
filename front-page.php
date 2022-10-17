<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="content-area">
        <?php the_content(); ?>
    </div>
</div>

<?php endwhile; else : endif; ?>


<?php
$args = array(
	'post_type' => 'post',
	'post_per_page' => 3
);
$_posts = new WP_Query($args);
?>

<?php if($_posts->have_posts()):?>
<div class="row">
    <div class="content-area col-4">
        <?php while ($_posts->have_posts()): $_posts->the_post();?>
        <div class="card">
            <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>">
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </a>
            <?php the_excerpt(); ?>
        </div>
        <?php endwhile;?>
    </div>
</div>
<?php endif;?>





<?php get_footer(); ?>