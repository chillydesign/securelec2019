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

                    <div class="col-sm-4 col-sm-push-8">
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

                        <div class="person_box" id="<?php echo $person; ?>">
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php echo $person; ?>
                                    <?php echo $person; ?>
                                    <?php echo $person; ?>
                                    <?php echo $person; ?>
                                    <img src="" alt="" />
                                </div>
                                <div class="col-sm-8">
                                    <h3>Contrôle d’inspection périodique ou vente d’un bien immobilier</h3>
                                    <p>Votre installation électrique doit subir périodiquement un contrôle. La périodicité de ce contrôle dépend des locaux où se situe l’installation électrique. Outre le contrôle périodique échu, pour les installations dont la périodicité est 10 ans ou 20 ans, lors de la vente d’un bien immobilier, un contrôle périodique est nécessaire si le dernier contrôle date de plus de cinq ans. Prenez rendez-vous avec un de nos inspecteurs certifiés qui réaliseront votre contrôle d’inspection sur les cantons de Genève et Vaud.</p>
                                    <a href="#" class="button">En savoir plus</a>
                                </div>
                            </div>
                        </div><!--  END OF grey_box -->
                    <?php endforeach; ?>

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
