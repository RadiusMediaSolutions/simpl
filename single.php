<?php get_header(); ?>
<article class="article my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
               if ( have_posts() ) {
               
                   the_post();
               
                   get_template_part( 'template-parts/content', get_post_type() );
				   the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'simpl' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'simpl' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
               
               } else {
               
                 // If no content, include the "No posts found" template.
                 get_template_part( 'template-parts/content/content-none' );
               
               } ?>
            </div>

        </div>
    </div>
</article>
<?php get_footer(); ?>