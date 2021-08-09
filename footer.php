<!-- FOOTER -->
<footer class="footer">
    <div class="footerFirst">
        <div class="footerCol">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_logo_kontra.svg'; ?>" alt="lean-logo" />
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

        <span class="mobileDivider"></span>

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

            <img class="footerCertyfikat footerCertyfikat--mobile" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/iso_9001.jpg'; ?>" alt="certyfikat" />
        </div>

        <span class="mobileDivider"></span>

        <div class="footerCol">
            <ul class="footerMenu">
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'akademia' )->ID ); ?>">Akademia</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'o nas' )->ID ); ?>">O nas</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'konferencje' )->ID ); ?>">Konferencja</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'eksperci' )->ID ); ?>">Eksperci</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ); ?>">Produkty</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'lean nawigator' )->ID ); ?>">Lean Nawigator</a></li>
                <li class="footerMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'kontakt' )->ID ); ?>">Kontakt</a></li>
            </ul>

            <img class="footerCertyfikat" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/iso_9001.jpg'; ?>" alt="certyfikat" />
        </div>
    </div>

    <div class="footerSecond">
        <h5 class="footerSecondLeft">
            © 2021 Lean w Medycynie | Wszystkie prawa zastrzeżone.
        </h5>

        <span class="mobileDivider mobileDivider2"></span>

        <div class="footerSecondRight">
            <a class="politykaLink" href="<?php echo get_page_link(get_page_by_title('Polityka prywatności')->ID); ?>">
                Polityka prywatności
            </a>
            <h5>Śledź nas:</h5>
            <div class="socialMediaIcons">
                <a aria-label="Facebook" id="facebookF" href="https://www.facebook.com/leanwmedycynie" target="_blank" rel="noreferrer">

                </a>
                <a aria-label="Youtube" id="youtubeF" href="https://www.youtube.com/channel/UCnn9QMd7UEPmusGA_8pzCNA" target="_blank" rel="noreferrer">

                </a>
                <a aria-label="Linkedin" id="linkedinF" href="https://www.linkedin.com/company/lean-w-medycynie/" target="_blank" rel="noreferrer">

                </a>
                <a aria-label="Twitter" id="twitterF" href="https://twitter.com/_leanwmedycynie" target="_blank" rel="noreferrer">

                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
