<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader pageWarsztatyHeader">
    <h1 class="pageHeaderHeader">
        Warsztaty<br/>analityczne
    </h1>
</header>

<?php
function reverse_wpautop( $s ) {
    // Strip li
//                $s = str_replace("</li>\n", "</li>", $s);

    // Strip newlines
    $s = str_replace( "\n", "---", $s );

    return $s;
}
function split_delimited_string( $s ) {
    // Take a substring, removing the final 3 characters (---)
    $s = substr( $s, 0 );

    return explode( "---", $s );
}
//echo get_the_content();
$arr = split_delimited_string(reverse_wpautop(get_the_content()));
?>

<main class="eksperci warsztatyMain">
    <div class="warsztatyLeft">
        <h2 class="firstHeader">
            Lean w medycynie
        </h2>
        <h1 class="bigHeader">
            Zmiana organizacji pracy w trybie "COVID"
        </h1>

        <p>
            “Kiedy jest najlepszy czas, na wprowadzanie zmian w organizacji?” – pytają nas osoby zarządzające podmiotami medycznymi lub ich pracownicy. Wszystkim odpowiadamy w ten sam sposób: “właśnie zaczęliście je wprowadzać”. Dlaczego? Ponieważ już samo postawienie takiego pytania dowodzi, że w instytucji uświadomiono sobie potrzebę transformacji.
        </p>
        <p>
            Nie tak dawno, na prośbę Zarządu Wojewódzkiego Szpitala Specjalistycznego im. J. Gromkowskiego we Wrocławiu, rozpoczęliśmy pracę nad usprawnieniem istotnych procesów, mających miejsce w tej placówce. Na przestrzeni kolejnych miesięcy, pacjenci, pracownicy oraz pracodawcy zaczęli odczuwać pozytywne efekty zmian. Licznik usprawnień, które przekładają się na wymierne korzyści, wciąż bije, a działania zaczęły obejmować coraz to większe obszary.
        </p>
        <p>
            W jaki sposób propagować wiedzę o lean management wśród pracowników szpitala oraz osób związanych z podobnymi jednostkami? Najlepiej poprzez dobry przykład! Dlatego zrealizowaliśmy krótki film, w którym zebrane zostały przykłady zaangażowania, pomysłowości i ciężkiej pracy całego personelu wspomnianej placówki. Serdecznie zachęcamy do obejrzenia tego materiału.
        </p>
    </div>

    <div class="warsztatyRight">
        <?php
        the_content();
        ?>
    </div>
</main>

</div>


<?php
get_footer();
?>
