<?php get_header(); ?>





<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" >


        <section class="section section_welcome">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Votre sécurité, notre priorité</h1>
                        <p>Securelec est une société d’inspection des installations électriques pour les régies et les particuliers. Nous réalisons l’inspection électrique obligatoire de votre propriété mandatée par votre fournisseur d’électricité.</p>
                        <p>Avec 17 contrôleurs dans le canton de Genève et 8 sur le canton de Vaud, tous titulaires du brevet fédéral, nous avons à coeur de vous fournir un service de qualité. Notre système de prise de rendez-vous en ligne vous permet d’effectuer les démarches en toute simplicité.</p>
                        <a href="#" class="button">Prendre rendez-vous</a>
                    </div>
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
