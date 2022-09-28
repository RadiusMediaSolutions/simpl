<?php

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-6 col-12">

            <?php
				while ( have_posts() ) :
					the_post();


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
        </div>
    </div>
</div>

<?php

get_footer();