<?php
include './admin/conections/conexao.php';
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US"> <!--<![endif]-->
    <head>
        <!-- head -->

        <!-- meta -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>REGGO • AUTORES</title>


        <link rel="shortcut icon" href="images/ico-reggo.png" type="image/x-icon" />	

        <link rel='stylesheet' id='contact-form-7-css'  href='css/cform.css' type='text/css' media='all' />
        <link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='css/tp_twitter_plugin.css' type='text/css' media='screen' />
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='rs-plugin/css/settings.css' type='text/css' media='all' />

        <link rel='stylesheet' id='select2-css'  href='css/select.css' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'  href='css/woocommerce-layout.css' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'  href='css/woocommerce.css' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='prettyPhoto-css'  href='css/prettyPhoto.css' type='text/css' media='all' />
        <link rel='stylesheet' id='owl-carousel-css'  href='js/owl-carousel/owl.carousel.css' type='text/css' media='all' />
        <link rel='stylesheet' id='owl-theme-css'  href='js/owl-carousel/owl.theme.css' type='text/css' media='all' />
        <link rel='stylesheet' id='jplayer-css'  href='css/blue.monday/jplayer.blue.monday.css' type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-ui-css'  href='css/ui/jquery.ui.all.css' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='images-green-css'  href='css/skins/green/images.css' type='text/css' media='all' />
        <link rel='stylesheet' id='style-colors-php-css'  href='css/style-colors.css' type='text/css' media='all' />
        <link rel='stylesheet' id='style-php-css'  href='css/style-2.css' type='text/css' media='all' />
        <link rel='stylesheet' id='mfn-woo-css'  href='css/woocommerce.css' type='text/css' media='all' />
        <link rel="stylesheet" href="css/fonts/mfn-icons.css" media="all" />
        <link rel="stylesheet" href="css/custom.css" media="all" />

        <link rel='stylesheet' id='Ubuntu-css'  href='http://fonts.googleapis.com/css?family=Ubuntu%3A100%2C300%2C400%2C400italic%2C700&amp;ver=4.2' type='text/css' media='all' />
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,600,900,200' rel='stylesheet' type='text/css' media='all'>



        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>

    <!-- body -->
    <body class="home page page-id-4311 page-parent page-template-default template-slider color-custom layout-full-width header-dark header-alpha sticky-header">
        <!-- #Wrapper -->
        <div id="Wrapper">
            <!-- #Action_bar 
            <div id="Action_bar">
                    <ul id="menu-action-menu" class="top-bar-menu">
                            <li class="menu-item  current-menu-item page_item current_page_item "><a href="index.html">Home</a></li>
                            <li class="menu-item  "><a href="help.html">Help Center</a></li>
                            <li class="menu-item  "><a href="about-us.html">About us</a></li>
                            <li class="menu-item  "><a href="contact.html">Contact</a></li>
                            <li class="menu-item  menu-item-10792"><a href="#">Buy it</a></li>
                    </ul>
                    <div class="contact_info">
                            <p class="phone">
                                    <i class="icon-phone"></i><a href="#">+61 (0) 3 8376 6284</a>
                            </p>
                            <p class="mail">
                                    <i class="icon-mail-line"></i><a href="#">noreply@envato.com</a>
                            </p>
                    </div>
            </div>-->
            <!-- #Header -->
            <header id="Header">
                <!-- .header_placeholder 4sticky  -->
                <div class="header_placeholder"></div>
                <?php include './menu_reggo.php'; ?>


                <div id="Subheader-autores"></div>

            </header>


            <div id="Content">
                <div class="content_wrapper clearfix">

                    <!-- .sections_group -->
                    <div class="sections_group">
                        <div class="section pad0" style="padding-top:30px; padding-bottom:10px;" >
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">


                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_big_icon " style="">
                                            <span class="icon"><i class="icon-users"></i></span>
                                            <h3>NOSSOS AUTORES</h3>
                                            <!--<div class="inside">
                                                    Some short description text to fulfill the heading
                                            </div>-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- .sections_group -->
                    <div class="sections_group">
                        <div class="section pad0" >
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">

                                    <?php
                                    //PEGANDO PAGINA ATUAL
                                    $p = $_GET["page"];
                                    if (isset($p)) {
                                        $p = $p;
                                    } else {
                                        $p = 1;
                                    }


                                    //DEFININDO A QUANTIDADE DE REGISTROS POR PAGINA
                                    $qnt = 10;
                                    $inicio = ($p * $qnt) - $qnt;


                                    $sql_autores = "SELECT * FROM autor ORDER BY nome LIMIT $inicio, $qnt";
                                    $executa_autores = mysql_query($sql_autores)or die(mysql_error());

                                    while ($array_autor = mysql_fetch_array($executa_autores)) {
                                        ?>
                                        <div class="column one-fourth column_article_box">
                                            <div class="article_box">
                                                <a class="has_hover" href="item-autor.php?aut=<?php echo $array_autor['autor_id']; ?>">
                                                    <div class="photo_mask">
                                                        <img class="scale-with-grid" src="admin/imagens/autor/<?php echo $array_autor['img']; ?>" alt="<?php echo $array_autor['nome']; ?>"/>
                                                        <div class="mask">
                                                        </div>
                                                        <span class="button_image more"><i class="icon-eye"></i></span>
                                                    </div>
                                                    <div class="desc_wrapper" style="margin-bottom: -10px;">
                                                        <h6 class="title"><?php echo $array_autor['nome']; ?> | <i class="icon-briefcase"></i></h6>
                                                        <hr>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                </div>
                            </div>
                        </div>


                        <div class="column one pager_wrapper">

                            <?php
                            $sql_noticia_count = "SELECT * FROM autor ORDER BY nome ";
                            $sql_query_all = mysql_query($sql_noticia_count)or die(mysql_error());
                            $total_registros = mysql_num_rows($sql_query_all);
                            $pags = ceil($total_registros / $qnt);

                            // Número máximos de botões de paginação 
                            $max_links = 5;
                            ?>


                            <div class="pager">

                                <?php
                                if (isset($_GET['page'])) {


                                    if ($_GET['page'] == 1) {
                                        ?>
                                        <a class="prev_page" href="autores.php?page=1"><i class="icon-left-open"></i></a>

                                        <?php
                                    } else {
                                        ?>
                                        <a class="prev_page" href="autores.php?page=<?php echo $p - 1; ?>"><i class="icon-left-open"></i></a>

                                        <?php
                                    }
                                } else {
                                    ?>
                                    <a class="prev_page" href="autores.php?page=1"><i class="icon-left-open"></i></a>

                                    <?php
                                }
                                ?>


                                <?php
                                for ($i = $p - $max_links; $i <= $p - 1; $i++) {

                                    if ($i <= 0) {

                                        //FAZ NADA
                                    } else {
                                        ?> 
                                        <a href="autores.php?page=<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
                                        <?php
                                    }
                                }


                                echo "<a href='#' class='page active'>$p</a>";

                                for ($i = $p + 1; $i <= $p + $max_links; $i++) {


                                    if ($i > $pags) {

                                        //FAZ NADA
                                    } else {
                                        ?>
                                        <a href="autores.php?page=<?php echo $i; ?>" class="page"><?php echo $i; ?></a>

                                        <?php
                                    }
                                }


                                if (isset($_GET['page'])) {

                                    if ($_GET['page'] == $pags) {
                                        ?>
                                        <a class="next_page" href="autores.php?page=<?php echo $pags; ?>"><i class="icon-right-open"></i></a>

                                        <?php
                                    } else {
                                        ?>
                                        <a class="next_page" href="autores.php?page=<?php echo $p + 1; ?>"><i class="icon-right-open"></i></a>

                                        <?php
                                    }
                                } else {
                                    ?>
                                    <a class="next_page" href="autores.php?page=<?php echo $pags; ?>"><i class="icon-right-open"></i></a>

                                    <?php
                                }
                                ?>


<!--                                <a class="prev_page" href="#"><i class="icon-left-open"></i></a>
                                <a href="#" class="page active">1</a>
                                <a href="#" class="page">2</a>
                                <a class="next_page" href="#"><i class="icon-right-open"></i></a>-->





                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <!-- #Footer -->
            <?php include './footer_reggo.php'; ?>	

        </div><!-- // WRAPPER -->




        <script type='text/javascript' src='js/jquery/jquery.js'></script>
        <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

        <script type='text/javascript'>
            /* <![CDATA[ */
            var mejsL10n = {"language": "en-US", "strings": {"Close": "Close", "Fullscreen": "Fullscreen", "Download File": "Download File", "Download Video": "Download Video", "Play\/Pause": "Play\/Pause", "Mute Toggle": "Mute Toggle", "None": "None", "Turn off Fullscreen": "Turn off Fullscreen", "Go Fullscreen": "Go Fullscreen", "Unmute": "Unmute", "Mute": "Mute", "Captions\/Subtitles": "Captions\/Subtitles"}};
            var _wpmejsSettings = {"pluginPath": "/js\/mediaelement\/"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='js/mediaelement/mediaelement-and-player.min.js'></script>
        <script type='text/javascript' src='js/mediaelement/wp-mediaelement.js'></script>
        <script type="text/javascript">
            /******************************************
             -	PREPARE PLACEHOLDER FOR SLIDER	-
             ******************************************/
            var setREVStartSize = function () {
                var tpopt = new Object();
                tpopt.startwidth = 1200;
                tpopt.startheight = 818;
                tpopt.container = jQuery('#rev_slider_9_2');
                tpopt.fullScreen = "off";
                tpopt.forceFullWidth = "off";
                tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
                tpopt.width = parseInt(tpopt.container.width(), 0);
                tpopt.height = parseInt(tpopt.container.height(), 0);
                tpopt.bw = tpopt.width / tpopt.startwidth;
                tpopt.bh = tpopt.height / tpopt.startheight;
                if (tpopt.bh > tpopt.bw)
                    tpopt.bh = tpopt.bw;
                if (tpopt.bh < tpopt.bw)
                    tpopt.bw = tpopt.bh;
                if (tpopt.bw < tpopt.bh)
                    tpopt.bh = tpopt.bw;
                if (tpopt.bh > 1) {
                    tpopt.bw = 1;
                    tpopt.bh = 1
                }
                if (tpopt.bw > 1) {
                    tpopt.bw = 1;
                    tpopt.bh = 1
                }
                tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on")
                    tpopt.height = tpopt.startheight;
                if (tpopt.fullScreen == "on") {
                    tpopt.height = tpopt.bw * tpopt.startheight;
                    var cow = tpopt.container.parent().width();
                    var coh = jQuery(window).height();
                    if (tpopt.fullScreenOffsetContainer != undefined) {
                        try {
                            var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                            jQuery.each(offcontainers, function (e, t) {
                                coh = coh - jQuery(t).outerHeight(true);
                                if (coh < tpopt.minFullScreenHeight)
                                    coh = tpopt.minFullScreenHeight
                            })
                        } catch (e) {
                        }
                    }
                    tpopt.container.parent().height(coh);
                    tpopt.container.height(coh);
                    tpopt.container.closest(".rev_slider_wrapper").height(coh);
                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                    tpopt.container.css({height: "100%"});
                    tpopt.height = coh;
                } else {
                    tpopt.container.height(tpopt.height);
                    tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                }
            };
            /* CALL PLACEHOLDER */
            setREVStartSize();
            var tpj = jQuery;
            tpj.noConflict();
            var revapi9;
            tpj(document).ready(function () {
                if (tpj('#rev_slider_9_2').revolution == undefined) {
                    revslider_showDoubleJqueryError('#rev_slider_9_2');
                } else {
                    revapi9 = tpj('#rev_slider_9_2').show().revolution(
                            {
                                dottedOverlay: "none",
                                delay: 9000,
                                startwidth: 1200,
                                startheight: 818,
                                hideThumbs: 200,
                                thumbWidth: 100,
                                thumbHeight: 50,
                                thumbAmount: 2,
                                simplifyAll: "off",
                                navigationType: "none",
                                navigationArrows: "solo",
                                navigationStyle: "round",
                                touchenabled: "on",
                                onHoverStop: "on",
                                nextSlideOnWindowFocus: "off",
                                swipe_threshold: 0.7,
                                swipe_min_touches: 1,
                                drag_block_vertical: false,
                                keyboardNavigation: "off",
                                navigationHAlign: "center",
                                navigationVAlign: "bottom",
                                navigationHOffset: 0,
                                navigationVOffset: 20,
                                soloArrowLeftHalign: "left",
                                soloArrowLeftValign: "center",
                                soloArrowLeftHOffset: 10,
                                soloArrowLeftVOffset: 0,
                                soloArrowRightHalign: "right",
                                soloArrowRightValign: "center",
                                soloArrowRightHOffset: 10,
                                soloArrowRightVOffset: 0,
                                shadow: 0,
                                fullWidth: "on",
                                fullScreen: "off",
                                spinner: "spinner0",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                forceFullWidth: "off",
                                hideTimerBar: "on",
                                hideThumbsOnMobile: "off",
                                hideNavDelayOnMobile: 1500,
                                hideBulletsOnMobile: "off",
                                hideArrowsOnMobile: "off",
                                hideThumbsUnderResolution: 0,
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                startWithSlide: 0});
                }
            });	/*ready*/
        </script>

        <script type='text/javascript' src='js/jquery.form.min.js'></script>

        <script type='text/javascript' src='js/frontend/add-to-cart.min.js'></script>
        <script type='text/javascript' src='js/select2/select2.min.js'></script>
        <script type='text/javascript' src='js/jquery-blockui/jquery.blockUI.min.js'></script>
        <script type='text/javascript' src='js/frontend/woocommerce.min.js'></script>
        <script type='text/javascript' src='js/jquery-cookie/jquery.cookie.min.js'></script>
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;ver=1.3.4'></script>

        <script type='text/javascript' src='js/frontend/cart-fragments.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/core.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/widget.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/mouse.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/sortable.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/tabs.min.js'></script>
        <script type='text/javascript' src='js/jquery/ui/accordion.min.js'></script>
        <script type='text/javascript' src='js/owl-carousel/owl.carousel.min.js'></script>
        <script type='text/javascript' src='js/jquery.jplayer.min.js'></script>
        <script type='text/javascript' src='js/jquery.plugins.js'></script>
        <script type='text/javascript' src='js/mfn.menu.js'></script>
        <script type='text/javascript' src='js/scripts.js'></script>

        <script>
            //<![CDATA[
            jQuery(window).load(function () {
                var retina = window.devicePixelRatio > 1 ? true : false;
                if (retina) {
                    var retinaEl = jQuery("#logo img");
                    var retinaLogoW = retinaEl.width();
                    var retinaLogoH = retinaEl.height();
                    retinaEl.attr("src", "images/logo-reggo.png").width(retinaLogoW).height(retinaLogoH)
                }
            });
            //]]>
        </script>

        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "//cluster-piwik.locaweb.com.br/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 1032]);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <noscript><p><img src="//cluster-piwik.locaweb.com.br/piwik.php?idsite=1032" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->

    </body>
</html>