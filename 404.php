<?php
get_header();
?>

<main class="page404">
    <div class="page404Top">
        <div class="page404TopLeft">
            <h1 class="page404TopLeftHeader">Upsss...</h1>
            <h2 class="page404TopLeftText">
                Chyba nie możemy znaleźć
                strony, której szukasz.
            </h2>
        </div>
        <div class="page404TopRight">
            404
        </div>
    </div>
    <div class="page404Bottom">
        <h3 class="page404Hint">
            W zamian proponujemy odwiedzić<br/>kilka innych miejsc
        </h3>
        <ul class="page404Menu">
            <li class="menuItem menuItemBordered <?php
            if(is_page('lean nawigator')) {
                echo 'greenBackground';
            }
            ?>"><a href="<?php echo get_page_link( get_page_by_title( 'lean nawigator' )->ID ); ?>">Lean Nawigator</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('akademia')) {
                echo 'greenBackground';
            }
            ?>"><a href="https://leanhealthcareacademy.pl">Akademia</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('konferencje')) {
                echo 'greenBackground';
            }
            ?>" ><a href="<?php echo get_page_link( get_page_by_title( 'konferencje' )->ID ); ?>">Konferencja</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('dofinansowania')) {
                echo 'greenBackground';
            }
            ?>"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
        </ul>
        <div class="socialMediaIcons socialMediaIcons404">
            <a aria-label="Facebook" id="facebook" href="https://www.facebook.com/leanwmedycynie" target="_blank" rel="noreferrer">

            </a>
            <a aria-label="Youtube" id="youtube" href="https://www.youtube.com/channel/UCnn9QMd7UEPmusGA_8pzCNA" target="_blank" rel="noreferrer">

            </a>
            <a aria-label="Linkedin" id="linkedin" href="https://www.linkedin.com/company/lean-w-medycynie/" target="_blank" rel="noreferrer">

            </a>
            <a aria-label="Twitter" id="twitter" href="https://twitter.com/leanwmedycynie" target="_blank" rel="noreferrer">

            </a>
        </div>
    </div>
</main>
</div>

<?php
get_footer();
?>
