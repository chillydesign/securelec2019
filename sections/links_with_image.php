<?php $links =  get_sub_field('links'); ?>

<?php if ($links): ?>

    <div class="container">

        <div class="page_links">
            <?php while ( have_rows('links') ) : the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <?php $page = get_sub_field('page'); ?>
                <?php $url =  get_permalink($page->ID); ?>
                <div class="page_link">
                    <?php if ($image): ?>
                        <a href="<?php echo $url; ?>">
                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $page->post_title; ?>">
                        </a>
                    <?php endif; ?>
                    <h3><a href="<?php echo $url; ?>"><?php echo $page->post_title; ?></a></h3>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    
<?php endif; ?>
