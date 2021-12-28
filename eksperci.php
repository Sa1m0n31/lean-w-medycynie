<?php
/* Template Name: Eksperci */
get_header();
?>

    <!-- PAGE HEADER -->
    <header class="pageHeader pageEksperciHeader">
        <h1 class="pageHeaderHeader">
            Nasi eksperci
        </h1>
    </header>

    <!-- EKSPERCI -->
    <main class="eksperci">
        <h2 class="firstHeader">
            Nasza misja
        </h2>
        <h1 class="bigHeader">
            <?php echo get_field('header'); ?>
        </h1>


        <div class="eksperciItem">
            <img class="eksperciImg" src="<?php echo get_field('zdjecie_eksperta_1'); ?>" alt="grzegorz-koczor" />

            <div class="eksperciItemRight">
                <h2 class="eksperciItemName">
                    <?php echo get_field('imie_i_nazwisko_eksperta_1'); ?>
                </h2>
                <h3 class="eksperciItemFunction">
                    <?php echo get_field('tytul_eksperta_1'); ?>
                </h3>

                <div class="eksperciItemText">
                    <?php echo get_field('bionotka_eksperta_1'); ?>
                </div>

                <div class="eksperciKontakt">
                    <div class="eksperciKontaktItem">
                        <a href="tel:<?php echo str_replace(" ", "", get_field('telefon_eksperta_1')); ?>"></a>
                        <img class="eksperciKontaktIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call.svg'; ?>" alt="telefon" />
                        <img class="eksperciKontaktIcon eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call-hover.svg'; ?>" alt="telefon" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('telefon_eksperta_1'); ?>
                        </h4>
                    </div>
                    <div class="eksperciKontaktItem">
                        <a href="mailto:<?php echo get_field('mail_eksperta_1'); ?>"></a>
                        <img class="eksperciKontaktIcon iconMargin" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter.svg'; ?>" alt="email" />
                        <img class="eksperciKontaktIcon iconMargin eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter-hover.svg'; ?>" alt="email" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('mail_eksperta_1'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="eksperciItem">
            <img class="eksperciImg" src="<?php echo get_field('zdjecie_eksperta_2'); ?>" alt="jakub-napierala" />

            <div class="eksperciItemRight">
                <h2 class="eksperciItemName">
                    <?php echo get_field('imie_i_nazwisko_eksperta_2'); ?>
                </h2>
                <h3 class="eksperciItemFunction">
                    <?php echo get_field('tytul_eksperta_2'); ?>
                </h3>

                <div class="eksperciItemText">
                    <?php echo get_field('bionotka_eksperta_2'); ?>
                </div>

                <div class="eksperciKontakt">
                    <div class="eksperciKontaktItem">
                        <a href="tel:<?php echo str_replace(" ", "", get_field('telefon_eksperta_2')); ?>"></a>
                        <img class="eksperciKontaktIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call.svg'; ?>" alt="telefon" />
                        <img class="eksperciKontaktIcon eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call-hover.svg'; ?>" alt="telefon" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('telefon_eksperta_2'); ?>
                        </h4>
                    </div>
                    <div class="eksperciKontaktItem">
                        <a href="mailto:<?php echo get_field('mail_eksperta_1'); ?>"></a>
                        <img class="eksperciKontaktIcon iconMargin" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter.svg'; ?>" alt="email" />
                        <img class="eksperciKontaktIcon iconMargin eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter-hover.svg'; ?>" alt="email" />
                        <h4 class="eksperciKontaktDane smallFont">
                            <?php echo get_field('mail_eksperta_2'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="eksperciItem">
            <img class="eksperciImg" src="<?php echo get_field('zdjecie_eksperta_3'); ?>" alt="magdalena-gałwa-gruszka" />

            <div class="eksperciItemRight">
                <h2 class="eksperciItemName">
                    <?php echo get_field('imie_i_nazwisko_eksperta_3'); ?>
                </h2>
                <h3 class="eksperciItemFunction">
                    <?php echo get_field('tytul_eksperta_3'); ?>
                </h3>

                <div class="eksperciItemText">
                    <?php echo get_field('bionotka_eksperta_3'); ?>
                </div>

                <div class="eksperciKontakt">
                    <div class="eksperciKontaktItem">
                        <a href="tel:<?php echo str_replace(" ", "", get_field('telefon_eksperta_3')); ?>"></a>
                        <img class="eksperciKontaktIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call.svg'; ?>" alt="telefon" />
                        <img class="eksperciKontaktIcon eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call-hover.svg'; ?>" alt="telefon" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('telefon_eksperta_3'); ?>
                        </h4>
                    </div>
                    <div class="eksperciKontaktItem">
                        <a href="mailto:<?php echo get_field('mail_eksperta_3'); ?>"></a>
                        <img class="eksperciKontaktIcon iconMargin" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter.svg'; ?>" alt="email" />
                        <img class="eksperciKontaktIcon iconMargin eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter-hover.svg'; ?>" alt="email" />
                        <h4 class="eksperciKontaktDane smallFont2">
                            <?php echo get_field('mail_eksperta_3'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

		<?php
if(get_field('zdjecie_eksperta_4')) {
		?>
  		        <div class="eksperciItem">
            <img class="eksperciImg" src="<?php echo get_field('zdjecie_eksperta_4'); ?>" alt="magdalena-gałwa-gruszka" />

            <div class="eksperciItemRight">
                <h2 class="eksperciItemName">
                    <?php echo get_field('imie_i_nazwisko_eksperta_4'); ?>
                </h2>
                <h3 class="eksperciItemFunction">
                    <?php echo get_field('tytul_eksperta_4'); ?>
                </h3>

                <div class="eksperciItemText">
                    <?php echo get_field('bionotka_eksperta_4'); ?>
                </div>

                <div class="eksperciKontakt">
                    <div class="eksperciKontaktItem">
                        <a href="tel:<?php echo str_replace(" ", "", get_field('telefon_eksperta_4')); ?>"></a>
                        <img class="eksperciKontaktIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call.svg'; ?>" alt="telefon" />
                        <img class="eksperciKontaktIcon eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call-hover.svg'; ?>" alt="telefon" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('telefon_eksperta_4'); ?>
                        </h4>
                    </div>
                    <div class="eksperciKontaktItem">
                        <a href="mailto:<?php echo get_field('mail_eksperta_4'); ?>"></a>
                        <img class="eksperciKontaktIcon iconMargin" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter.svg'; ?>" alt="email" />
                        <img class="eksperciKontaktIcon iconMargin eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter-hover.svg'; ?>" alt="email" />
                        <h4 class="eksperciKontaktDane smallFont2">
                            <?php echo get_field('mail_eksperta_4'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
  <?php
	}
		?>

		<?php
if(get_field('zdjecie_eksperta_5')) {
		?>
  		        <div class="eksperciItem">
            <img class="eksperciImg" src="<?php echo get_field('zdjecie_eksperta_5'); ?>" alt="magdalena-gałwa-gruszka" />

            <div class="eksperciItemRight">
                <h2 class="eksperciItemName">
                    <?php echo get_field('imie_i_nazwisko_eksperta_5'); ?>
                </h2>
                <h3 class="eksperciItemFunction">
                    <?php echo get_field('tytul_eksperta_5'); ?>
                </h3>

                <div class="eksperciItemText">
                    <?php echo get_field('bionotka_eksperta_5'); ?>
                </div>

                <div class="eksperciKontakt">
                    <div class="eksperciKontaktItem">
                        <a href="tel:<?php echo str_replace(" ", "", get_field('telefon_eksperta_5')); ?>"></a>
                        <img class="eksperciKontaktIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call.svg'; ?>" alt="telefon" />
                        <img class="eksperciKontaktIcon eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-call-hover.svg'; ?>" alt="telefon" />
                        <h4 class="eksperciKontaktDane">
                            <?php echo get_field('telefon_eksperta_5'); ?>
                        </h4>
                    </div>
                    <div class="eksperciKontaktItem">
                        <a href="mailto:<?php echo get_field('mail_eksperta_5'); ?>"></a>
                        <img class="eksperciKontaktIcon iconMargin" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter.svg'; ?>" alt="email" />
                        <img class="eksperciKontaktIcon iconMargin eksperciKontaktIconHover" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/letter-hover.svg'; ?>" alt="email" />
                        <h4 class="eksperciKontaktDane smallFont2">
                            <?php echo get_field('mail_eksperta_5'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
  <?php
	}
		?>
    </main>

    </div>


<?php
get_footer();
