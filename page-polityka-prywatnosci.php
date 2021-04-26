<?php
get_header();
?>

<main class="politykaPrywatnosci">
    <div class="politykaLeft">
        <h2 class="firstHeader">
            Lean w medycynie
        </h2>
        <h1 class="bigHeader">
            Polityka<br/>Prywatności
        </h1>
    </div>

    <div class="politykaRight">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</main>
</div>

<?php
get_footer();
?>
