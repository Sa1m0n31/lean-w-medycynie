<?php
get_header();
?>

    <!-- PAGE HEADER -->
    <header class="pageHeader pageProduktyHeader">
        <h1 class="pageHeaderHeader">
            Produkty
        </h1>
    </header>

    <!-- PRODUKTY -->
    <main class="produktyMain">
         <section class="pageProduktyItem">
             <span class="kotwica" id="lean-hospital"></span>
            <div class="pageProduktyItemLeft">
                <h1 class="pageProduktyItemLeftNumber">
                    01
                </h1>
                <h2 class="pageProduktyItemLeftHeader">
                    <?php echo get_field('header_1'); ?>
                </h2>
                <h3 class="pageProduktyItemLeftDescription">
                    <?php echo get_field('subheader_1'); ?>
                </h3>
            </div>

            <div class="pageProduktyItemRight">
                <?php echo get_field('tekst_1'); ?>

                <div class="pageProduktyItemImages">
                    <?php echo do_shortcode('[popup_anything id="323"]'); ?>
                    <?php echo do_shortcode('[popup_anything id="326"]'); ?>
                </div>
            </div>
        </section>

        <section class="pageProduktyItem">
            <span class="kotwica" id="diagnoza-potencjalu"></span>
            <div class="pageProduktyItemLeft">
                <h1 class="pageProduktyItemLeftNumber">
                    02
                </h1>
                <h2 class="pageProduktyItemLeftHeader">
                    <?php echo get_field('header_2'); ?>
                </h2>
                <h3 class="pageProduktyItemLeftDescription">
                    <?php echo get_field('subheader_2'); ?>
                </h3>
            </div>

            <div class="pageProduktyItemRight">
                <?php echo get_field('tekst_2'); ?>

                <div class="pageProduktyItemImages">
                    <?php echo do_shortcode('[popup_anything id="328"]'); ?>
                    <?php echo do_shortcode('[popup_anything id="331"]'); ?>

                </div>
            </div>
        </section>

        <section class="pageProduktyItem">
            <span class="kotwica" id="online-transformacje"></span>
            <div class="pageProduktyItemLeft">
                <h1 class="pageProduktyItemLeftNumber">
                    03
                </h1>
                <h2 class="pageProduktyItemLeftHeader">
                    <?php echo get_field('header_3'); ?>
                </h2>
                <h3 class="pageProduktyItemLeftDescription">
                    <?php echo get_field('subheader_3'); ?>
                </h3>
            </div>

            <div class="pageProduktyItemRight">
                <?php echo get_field('tekst_3'); ?>

                <div class="pageProduktyItemImages">
                    <?php echo do_shortcode('[popup_anything id="332"]'); ?>
                    <?php echo do_shortcode('[popup_anything id="335"]'); ?>
                </div>
            </div>
        </section>

        <section class="pageProduktyItem">
            <span class="kotwica" id="akademia-healthcare"></span>
            <div class="pageProduktyItemLeft">
                <h1 class="pageProduktyItemLeftNumber">
                    04
                </h1>
                <h2 class="pageProduktyItemLeftHeader">
                    <?php echo get_field('header_4'); ?>
                </h2>
                <h3 class="pageProduktyItemLeftDescription">
                    <?php echo get_field('subheader_4'); ?>
                </h3>
                <button class="akademiaHealthcareBtn">
                    <a href="<?php echo get_page_link(get_page_by_title('akademia')->ID); ?>">
                        Przejdź do Akademii Healthcare
                    </a>
                </button>
            </div>

            <div class="pageProduktyItemRight">
                <?php echo get_field('tekst_4'); ?>

                <div class="pageProduktyItemImages">
                    <?php echo do_shortcode('[popup_anything id="336"]'); ?>
               </div>
            </div>
        </section>

        <section class="pageProduktyItem">
            <span class="kotwica" id="warsztaty-leanair"></span>
            <div class="pageProduktyItemLeft">
                <h1 class="pageProduktyItemLeftNumber">
                    05
                </h1>
                <h2 class="pageProduktyItemLeftHeader">
                    <?php echo get_field('header_5'); ?>
                </h2>
                <h3 class="pageProduktyItemLeftDescription">
                    <?php echo get_field('subheader_5'); ?>
                </h3>
            </div>

            <div class="pageProduktyItemRight">
                <?php echo get_field('tekst_5'); ?>

                <div class="pageProduktyItemImages">
                    <?php echo do_shortcode('[popup_anything id="340"]'); ?>
                    <?php echo do_shortcode('[popup_anything id="341"]'); ?>
               </div>
            </div>
        </section>
    </main>

    </div>


<?php
get_footer();
