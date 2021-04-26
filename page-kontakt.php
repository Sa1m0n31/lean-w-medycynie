<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader pageKontaktHeader">
    <h1 class="pageHeaderHeader">
        Kontakt
    </h1>
</header>

<!-- KONTAKT CONTAINER -->
<main class="kontaktContainer">
    <div class="kontaktLeft">
        <h2 class="firstHeader">
            Skontaktuj się z nami
        </h2>
        <h1 class="bigHeader">
            <?php echo get_field('header'); ?>
        </h1>

        <div class="podstronaKontakt">
            <div class="podstronaKontaktItem">
                <?php echo get_field('adres'); ?>
            </div>

            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader kontaktHover">
                    <span class="green">T:</span> <a href="tel:<?php echo str_replace(' ', '', get_field('telefon')); ?>"><?php echo get_field('telefon'); ?></a>
                </h4>
                <h4 class="podstronaKontaktItemHeader kontaktHover">
                    <span class="green">M:</span> <a href="mailto:<?php echo get_field('mail'); ?>"><?php echo get_field('mail'); ?></a>
                </h4>
            </div>

            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader">
                    NIP <?php echo get_field('nip'); ?>
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    KRS <?php echo get_field('krs'); ?>
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    REGON <?php echo get_field('regon'); ?>
                </h4>
            </div>
        </div>

    </div>




    <div class="kontaktRight">
            <?php
                the_content();
            ?>
    </div>
</main>

</div>

<?php
get_footer();
?>
