<?php get_header(); ?>





<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <?php include('section-loop.php'); ?>



<?php endwhile; ?>

<?php else: ?>

    <div class="container">

        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

    </div>

<?php endif; ?>






<?php get_footer(); ?>
