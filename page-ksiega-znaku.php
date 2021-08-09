<?php
get_header();
?>

<!-- PAGE HEADER -->
<main class="eksperci">
    <div class="konferencjaInner logoInner">
        <ul class="konferencjaMenu">
            <h2 class="firstHeader">
                Lean w medycynie
            </h2>
            <h1 class="bigHeader">
                Księga znaku
            </h1>
            <li class="konferencjaMenuItem" id="logoMenu1" onclick="ksiegaZnaku(1)">Logo</li>
            <li class="konferencjaMenuItem" id="logoMenu2" onclick="ksiegaZnaku(2)">Stosowanie</li>
            <li class="konferencjaMenuItem" id="logoMenu3" onclick="ksiegaZnaku(3)">Wartość minimalna</li>
            <li class="konferencjaMenuItem" id="logoMenu4" onclick="ksiegaZnaku(4)">Warianty kolorystyczne</li>
            <li class="konferencjaMenuItem" id="logoMenu5" onclick="ksiegaZnaku(5)">Niedozwolone modyfikacje</li>
            <li class="konferencjaMenuItem" id="logoMenu6" onclick="ksiegaZnaku(6)">Kolorystyka</li>
        </ul>


        <div class="konferencjaContent logoContent">

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

            <section class="logoSection logo1">
                <span id="kz1"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[0]; ?>
                </h3>
                <p class="ksiegaText">
                    <?php echo $arr[2] . '<br/>' . $arr[3] . '<br/>' . $arr[4] . '<br/>' . $arr[5]; ?>
                </p>

                <div class="logoSectionBottom">
                    <img class="logoKsiegaImg1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-1.png'; ?>" alt="logo" />

                    <div class="logoFrame">
                        <h4 class="logoFrameHeader">
                            Zestaw logo do pobrania
                        </h4>

                        <button class="pobierzPaczkeBtn">
                            <img class="pobierzPaczkeBtnImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/pobierz.png'; ?>" alt="pobierz" />
                            <span>
                                <?php
                                echo $arr[31];
                                ?>
                            </span>
                        </button>
                    </div>

                </div>
            </section>

            <section class="logoSection logo2">
                <span id="kz2"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[7]; ?>
                </h3>
                <div class="ksiegaText">
                    <?php echo $arr[9]; ?>
                    <br/><br/>
                    <?php echo $arr[11]; ?>
                </div>

                <div class="logoSectionBottom">
                    <img class="logoSectionBottomImg2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-2.png'; ?>" alt="logo" />
                </div>
            </section>

            <section class="logoSection logo3">
                <span id="kz3"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[13]; ?>
                </h3>
                <div class="ksiegaText">
                    <?php echo $arr[15]; ?>
                    <br/><br/>
                    <?php echo $arr[17]; ?>
                </div>

                <div class="logoSectionBottom">
                    <img class="logoSectionBottomImg3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-3.png'; ?>" alt="logo" />
                </div>
            </section>

            <section class="logoSection logo4">
                <span id="kz4"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[19]; ?>
                </h3>
                <div class="ksiegaText">
                    <?php echo $arr[21]; ?>
                </div>

                <div class="logoSectionBottom">
                    <img class="logoSectionBottomImg3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-4.png'; ?>" alt="logo" />
                </div>
            </section>

            <section class="logoSection logo5">
                <span id="kz5"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[23]; ?>
                </h3>
                <div class="ksiegaText">
                    <?php echo $arr[25]; ?>
                </div>

                <div class="logoSectionBottom">
                    <img class="logoSectionBottomImg3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-5.png'; ?>" alt="logo" />
                </div>
            </section>

            <section class="logoSection logo6">
                <span id="kz6"></span>
                <h3 class="ksiegaHeader">
                    <?php echo $arr[27]; ?>
                </h3>
                <div class="ksiegaText">
                    <?php echo $arr[29]; ?>
                </div>

                <div class="logoSectionBottom">
                    <img class="logoSectionBottomImg3" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/ksiega-6.png'; ?>" alt="logo" />
                </div>
            </section>
    </div>

</main>


</div>

<?php
get_footer();
?>