<?php get_header(); ?>


<div class="container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" class="post">

            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

            <?php endif; ?>
            <!-- /post thumbnail -->
                <br>
            <h1><?php the_title(); ?></h1>


            <?php the_content(); // Dynamic Content ?>

            <p><?php edit_post_link(); // Always handy to have Edit Post Links available ?></p>



        </article>
        <!-- /article -->

    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

    </article>
    <!-- /article -->

<?php endif; ?>

</div>	<!-- /.container -->



<?php get_footer(); ?>
