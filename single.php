<?php get_header(); ?>
<article class="article">
    <div class="row">
        <div class="content-area">
            <?php
               if ( have_posts() ) {
               
                   the_post();
               
                   get_template_part( 'template-parts/content', get_post_type() );
                   ?>
            <?php 
               
               } else {
               
                 // If no content, include the "No posts found" template.
                 get_template_part( 'template-parts/content/content-none' );
               
               } ?>
        </div>

    </div>
</article>
<?php get_footer(); ?>