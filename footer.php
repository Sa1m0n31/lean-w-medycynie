<!-- FOOTER -->
<footer class="footer">
    <div class="footerFirst">
        <div class="footerCol">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Lean_w_medycynie_logo_01.svg'; ?>" alt="lean-logo" />
        </div>

        <div class="footerCol">
            <h3 class="footerColTitle">
                Dane adresowe
            </h3>
            <h4>
                Lean w medycynie sp. z o.o.
            </h4>
            <h4>
                ul. Twarda 18
            </h4>
            <h4 class="addMargin">
                00-105 Warszawa
            </h4>

            <h4>
                NIP 525-281-24-44
            </h4>
            <h4>
                KRS 0000823271
            </h4>
            <h4>
                REGON 385318815
            </h4>
        </div>

        <div class="footerCol">
            <h3 class="footerColTitle">
                Dane kontaktowe
            </h3>

            <h4 class="contact">
                <a href="tel:+48573171137">
                    T: +48 573 171 137
                </a>
            </h4>
            <h4 class="contact">
                <a href="mailto:biuro@leanwmedycynie.pl">
                    M: biuro@leanwmedycynie.pl
                </a>
            </h4>
        </div>

        <div class="footerCol">
            <ul class="footerMenu">
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'misja' )->ID ); ?>">Misja</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'eksperci' )->ID ); ?>">Eskperci</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'sklep' )->ID ); ?>">Sklep</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'kontakt' )->ID ); ?>">Kontakt</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'lean-nawigator' )->ID ); ?>">Lean Nawigator</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'akademia' )->ID ); ?>">Akademia</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'konferencja' )->ID ); ?>">Konferencja</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
            </ul>
        </div>
    </div>

    <div class="footerSecond">
        <h5 class="footerSecondLeft">
            © 2021 Lean w Medycynie | Wszystkie prawa zastrzeżone.
        </h5>

        <div class="footerSecondRight">
            <h5>Polityka Prywatności</h5>
            <h5>Śledź nas:</h5>
        </div>
    </div>

    <div class="footerThird">
        <h5>
            Strona Lean w Medycynie, na której się znajdujesz korzysta z plików cookie. Pozostając na tej stronie wyrażasz zgodę na korzystanie z nich.
        </h5>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
