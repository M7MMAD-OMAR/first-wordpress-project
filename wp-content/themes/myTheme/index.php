<?php

/**
 * Main page template
 *
 * @package myTheme
 */

get_header();
?>\

    <div class="container">
		<?php
		if ( have_posts() ) { // check is this posts
			while ( have_posts() ) {  // while posts
				the_post();
				the_title( '<h3 class="bg-dark text-white m-5 p-5">', '</h3>' );
				?>
                <a href="<?php the_permalink(); ?>">permal link</a>
                <hr>
                <a href=""> <?php the_author_posts_link(); ?> </a>
                <hr>


                <h5>The Author:</h5>
                <p><?php the_author(); ?></p>
                <hr>
                <h5>The time and date:</h5>
                <p><?php the_date(); ?></p>

                <hr>
                <h5>Category</h5>
                <p><?php the_category(); ?></p>
                
				<?php
			} // end while posts
		} // end if check is this posts
		?>
    </div>


<?php get_footer(); ?>