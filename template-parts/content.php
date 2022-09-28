<div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
            simpl_post_thumbnail();
            	the_title( '<h1 class="entry-title">', '</h1>' );
            else :
            	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                      endif;
                      if ( 'post' === get_post_type() ) :
                      ?>
            <div class="entry-meta">
                <?php
               simpl_posted_on();
               simpl_posted_by();
               ?>

            </div>
            <!-- .entry-meta -->
            <?php endif; ?>
        </header>
        <!-- .entry-header -->
        <div class="entry-content">
            <?php
            if ( is_singular() ) :
            simpl_post_thumbnail();
            	the_content();
            else :
				 the_excerpt( );                          
            ?>
            <?php endif; ?>
        </div>
        <!-- .entry-content -->
    </article>
    <!-- #post-<?php the_ID(); ?> -->
</div>