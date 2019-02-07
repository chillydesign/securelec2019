<?php get_header(); ?>





<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" >


        <?php $welcome_content = get_field('welcome_content'); ?>
        <?php $sidebar_title = get_field('sidebar_title'); ?>
        <?php $sidebar_content = get_field('sidebar_content'); ?>
        <?php $sidebar_image = get_field('sidebar_image'); ?>


        <section class="section section_welcome">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <?php echo $welcome_content; ?>
                    </div>
                </div>
            </div>
            <!-- <div class="welcome_background"></div> -->
        </section>


        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-4 col-sm-push-8">
                        <div id="formation_securelec">
                            <h2>    <?php echo $sidebar_title; ?></h2>
                            <?php if ($sidebar_image): ?>
                                <div class="formation_picture" style="background-image:url('<?php echo $sidebar_image['sizes']['medium']; ?>'); ">
                                </div>
                            <?php endif; ?>

                            <?php echo $sidebar_content; ?>
                        </div>

                    </div> <!-- END OF col-sm-4 -->


                    <div class="col-sm-8 col-sm-pull-4">
                        <h2>Vous êtes :</h2>
                        <?php $people = array(
                            'propritetaire' => 'Un particulier propritétaire',
                            'entreprise' => 'Une entreprise',
                            'gerance' => 'Une régie ou gérance ',
                            'installateur' => 'Un installateur électrique'
                        ); ?>
                        <ul id="services_for">
                            <?php foreach ($people as $person => $description) : ?>
                                <li data-person="<?php echo $person; ?>"  id="s_<?php echo $person; ?>"><?php echo $description; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- END OF col-sm-8 -->

                </div>

            </div>
        </section>

        <section>
            <div class="container">


                <div id="people_boxes">
                    <div id="arrow" >&nbsp;</div>


                    <?php foreach ($people as $person => $description) : ?>
                        <?php  $person_repeater = get_field( $person ); ?>
                        <?php if ($person_repeater): ?>
                            <div class="person_box" id="<?php echo $person; ?>">
                                <?php foreach ($person_repeater as $person_box) : ?>
                                    <?php $image = $person_box['image']; ?>
                                    <?php $content = $person_box['content']; ?>
                                    <div class="person_box_inner">
                                    <div class="row" >
                                        <div class="col-sm-4">
                                            <?php if ($image): ?>
                                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $person; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-8">
                                            <?php echo $content; ?>
                                        </div>
                                    </div> <!--  END OF .row -->
                                </div><!--  END OF .person_box_inner -->
                                <?php endforeach; ?>
                            </div><!--  END OF person_box -->
                        <?php endif; // end of if $person_repeater ?>
                    <?php endforeach; // end of each person ?>

                </div>
            </div>
        </section>



        <?php include('section-loop.php'); ?>


        <div class="container">
            <?php the_content(); ?>
        </div>



    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article class="container">

        <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>
