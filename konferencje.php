<?php
/* Template Name: Konferencje */
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader konferencjeHeader">
    <!--<img class="pageHeaderImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/hero_image_podstrona_konferencja-2209.png'; ?>" alt="nasza-misja" />
        --><h1 class="pageHeaderHeader">
        Konferencje
    </h1>
</header>

<!-- MAIN -->
<main class="misjaFirst">
    <!-- FUTURE EVENTS -->
    <?php
    $today = date('Ymd');
    $args = array(
        'post_type' => 'Konferencje',
        'meta_query' => array(
            array(
                'key'     => 'data_konferencji',
                'compare' => '>=',
                'value'   => $today
            )
        )
    );

    $konf = new WP_Query( $args );

    if($konf->have_posts()) {
        ?>
        <h2 class="firstHeader">
            Nasze konferencje
        </h2>
        <h1 class="bigHeader">
            Zapraszamy na<br/> IV Konferencję<br/> Lean w Medycynie
        </h1>
        <div class="konferencjeContainer">
            <?php
            while($konf->have_posts()) {
                $konf->the_post(); ?>

                <a class="konferencjeItem" href="<?php echo the_permalink(); ?>">
                    <h4 class="konferencjeItemDate">
                        <?php echo get_field('data_konferencji'); ?>
                    </h4>

                    <h2 class="konferencjeItemTitle">
                        <?php echo get_field('nazwa_konferencji'); ?>
                    </h2>

                    <h3 class="konferencjeItemPlace">
                        <?php echo get_field('miejsce_konferencji'); ?>
                    </h3>

                    <div class="ofertaRightLeft">
                        <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                        <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                    </div>
                </a>


                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
    }

    ?>

        <!-- PREVIOUS EVENTS -->
        <?php
            $today = date('Ymd');
            $args = array(
                    'post_type' => 'Konferencje',
                    'meta_query' => array(
                        array(
                            'key'     => 'data_konferencji',
                            'compare' => '<=',
                            'value'   => $today
                        )
                    )
            );

            $konf = new WP_Query( $args );

            if($konf->have_posts()) {
                ?>
                <h2 class="firstHeader">
                    Nasze konferencje
                </h2>
                <h1 class="bigHeader">
                    Wydarzenia, które mieliśmy okazję organizować
                </h1>
    <div class="konferencjeContainer">
        <?php
                while($konf->have_posts()) {
                    $konf->the_post(); ?>

                    <a class="konferencjeItem" href="<?php echo the_permalink(); ?>">
                        <h4 class="konferencjeItemDate">
                            <?php echo get_field('data_konferencji'); ?>
                        </h4>

                        <h2 class="konferencjeItemTitle">
                            <?php echo get_field('nazwa_konferencji'); ?>
                        </h2>

                        <h3 class="konferencjeItemPlace">
                            <?php echo get_field('miejsce_konferencji'); ?>
                        </h3>

                        <div class="ofertaRightLeft">
                            <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                            <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                        </div>
                    </a>


                        <?php
                }
                wp_reset_postdata();
                ?>
    </div>
        <?php
            }

        ?>
</main>

</div>


<?php
get_footer();