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
            <!-- <div class="welcome_background"></div> -->
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Vous êtes :</h2>
                        <p>Quibusdam nam tamen te aute excepteur iis quid esse, ita nam esse incididunt,
                            nostrud magna doctrina voluptate. Veniam nam mentitum. Ita minim
                            adipisicing.Fabulas noster noster aliquip labore aut admodum te velit appellat,
                            senserit fore voluptate mandaremus a vidisse ut singulis. Occaecat quorum
                            senserit litteris. Et aliqua consequat. Admodum te officia id incididunt velit
                            an singulis cohaerescant a eiusmod sed amet aliquip ut summis ad ne multos
                            laboris.</p>
                        </div>
                        <div class="col-sm-4">
                            <div id="formation_securelec">
                                <h2>Formations Securelec</h2>
                                <div class="formation_picture">PICTURE HERE</div>

                                <p>Securelec organise des formations et séminaires en sécurité électrique à destination des concierges, commis de régie ou particuliers.</p>


                                <ul>
                                    <li>Formation continue Art 13-15</li>
                                    <li>Personnel instruit</li>
                                    <li>Sécurité au travail</li>
                                    <li>Soutien technique</li>
                                    <li>VDE 701-702</li>
                                    <li>Vérification à la mise en service</li>
                                    <li>Formation NIBT 2015</li>
                                </ul>
                                <p>Et bien plus encore!</p>
                                <a href="#" class="button">Toutes nos formations</a>
                            </div>

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
