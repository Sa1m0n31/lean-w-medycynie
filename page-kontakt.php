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
            Każde nowe wyzwanie to kolejne doświadczenie
        </h1>

        <div class="podstronaKontakt">
            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader green bold">
                    Lean w medycynie sp. z o.o.
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    ul. Twarda 18
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    00-105 Warszawa
                </h4>
            </div>

            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader kontaktHover">
                    <span class="green">T:</span> <a href="tel:+48573171137">+48 573 171 137</a>
                </h4>
                <h4 class="podstronaKontaktItemHeader kontaktHover">
                    <span class="green">M:</span> <a href="mailto:biuro@leanwmedycynie.pl">biuro@leanwmedycynie.pl</a>
                </h4>
            </div>

            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader">
                    NIP 525-281-24-44
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    KRS 0000823271
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    REGON 385318815
                </h4>
            </div>
        </div>

    </div>




    <div class="kontaktRight">
            <?php
                the_content();
            ?>
        <span class="kontaktDisclaimer">
            *pole obligatoryjne
        </span>

        <div class="kontaktMsg">
            <h2 class="kontaktMsg__header">
                Dziękujemy za przesłanie zapytania!
            </h2>
        </div>
    </div>
</main>

</div>

<?php
get_footer();
?>
