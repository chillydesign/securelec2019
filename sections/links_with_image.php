<?php $links =  get_sub_field('links'); ?>

<?php if ($links): ?>

    <div class="container">

        <div class="page_links">
            <?php while ( have_rows('links') ) : the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <?php $page = get_sub_field('page'); ?>
                <?php $url =  get_permalink($page->ID); ?>
                <div class="page_link">
                    <a href="<?php echo $url; ?>">
                        <?php if ($image): ?>

                            <span class="page_link_image" style="background-image:url(<?php echo $image['sizes']['medium']; ?>)" ></span>

                        <?php endif; ?>
                        <strong><?php echo $page->post_title; ?></strong>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>
