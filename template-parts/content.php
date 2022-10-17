<article id="post-<?php the_ID(); ?>" <?php post_class('cat_list'); ?>>
    <header class="entry-header">
        <?php
				if ( is_singular() ) :
				simpl_post_thumbnail();
					the_title( '<h1 class="entry-title">', '</h1>' );
				    
				else :
				    
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				    simpl_posted_on();
				    simpl_posted_by();
				          endif;
				          ?>
    </header>
    <!-- .entry-header -->
    <div class="post-content">
        <?php
				if ( is_singular() ) :
				    // simpl_post_thumbnail();
					?>
        <div class="drop-cap">
            <?php the_content();?>
        </div>

        <div class="entry-meta">
            <div>
                <?php 
							simpl_posted_on();
							simpl_posted_by();
							?>
            </div>
            <div class="li_item">
                <?php the_category( ',' );
							?>
            </div>
        </div>
        <div class="post_nav">
            <div>
                <?php
						previous_post_link(
						    '<h4>' . __('Previous Post', 'read') . '</h4>%link',
						    '<span class="meta-nav">&#8592;</span> %title'
						);
						?>
            </div>
            <div>
                <?php
						next_post_link(
						    '<h4>' . __('Next Post', 'read') . '</h4>%link',
						    '%title <span class="meta-nav">&#8594;</span>'
						);
						?>
            </div>
        </div>

        <?php 
			
				else :
					
				the_excerpt( );   
				endif; ?>
    </div>
    <!-- .entry-content -->
</article>
<!-- #post-<?php the_ID(); ?> -->