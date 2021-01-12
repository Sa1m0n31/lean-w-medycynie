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
                    LEAN W MEDYCYNIE Sp. z o.o.
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    ul. Twarda 18
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    00-105 Warszawa
                </h4>
            </div>

            <div class="podstronaKontaktItem">
                <h4 class="podstronaKontaktItemHeader">
                    <span class="green">T:</span> +48 573 171 137
                </h4>
                <h4 class="podstronaKontaktItemHeader">
                    <span class="green">M:</span> biuro@leanwmedycynie.pl
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
            <!--<label class="label label-100">
                <input name="imie-i-nazwisko"
                       type="text"
                       placeholder="Imię i nazwisko"
                       class="input" />
            </label>

            <label class="label label-50">
                <input name="email"
                       type="email"
                       placeholder="Adres email"
                       class="input" />
            </label>

            <label class="label label-50">
                <input name="numer-telefonu"
                       type="text"
                       placeholder="Numer telefonu"
                       class="input" />
            </label>

            <label class="label label-100 textAreaLabel">
                <textarea name="wiadomosc"
                          class="textArea"
                          placeholder="Treść wiadomości"></textarea>
            </label>

            <label class="label label-50 checkboxLabel">
                <input type="checkbox" class="checkbox" />
                <span class="checkboxText">Wyrażam zgodę na przetwarzanie moich danych osobowych</span>
            </label>

            <button class="submitButton" type="submit">
                Wyślij wiadomość
            </button> -->

            <!-- ZAWARTOSC FORMMULARZA DLA WTYCZKI CONTACT FORM 7:
            <label class="label label-100">
                [text* your-name class:input placeholder "Imie i nazwisko"] </label>

            <label class="label label-50">
                [email* your-email class:input placeholder "Adres email"] </label>

            <label class="label label-50">
                [text* your-subject class:input placeholder "Numer telefonu"] </label>

            <label class="label label-100  textAreaLabel">
                [textarea your-message class:textArea placeholder "Tekst wiadomości"] </label>

            [acceptance acceptance-155 class:checkboxLabel] Wyrażam zgodę na przetwarzanie moich danych osobowych [/acceptance]

            [submit class:submitButton "Wyślij"]
            -->

            <?php
                the_content();
            ?>
    </div>
</main>

</div>

<?php
get_footer();
?>
