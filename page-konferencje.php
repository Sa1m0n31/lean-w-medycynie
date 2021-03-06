<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader naszaMisjaHeader">
    <!--<img class="pageHeaderImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/hero_image_podstrona_misja.jpg'; ?>" alt="nasza-misja" />
        --><h1 class="pageHeaderHeader">
        Konferencje
    </h1>
</header>

<!-- MAIN -->
<main class="misjaFirst">
    <h2 class="firstHeader">
        Nasze konferencje
    </h2>
    <h1 class="bigHeader">
        Wydarzenia, które mieliśmy okazję organizować
    </h1>

    <div class="konferencjeContainer">
        <?php
            $args = array(
                    'post_type' => 'Konferencje'
            );

            $konf = new WP_Query( $args );

            if($konf->have_posts()) {
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
            }

        ?>

    </div>
</main>

</div>


<?php
get_footer();