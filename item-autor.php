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
        <title>PUBLIQUE • AUTOR</title>


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

                <div id="Subheader-tecnico"></div>


            </header>


            <!-- #Content -->
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <!-- .sections_group -->
                    <div class="sections_group" style="margin-top: 40px;">
                        <div id="post-519" class="post-519 post type-post status-publish format-standard has-post-thumbnail hentry category-motion tag-css3 tag-framework tag-wordpress">


                            <?php
                            $id_autor = $_GET['aut'];
                            $seleciona_autor = "SELECT * FROM autor WHERE autor_id = $id_autor";
                            $executa_seleciona_autor = mysql_query($seleciona_autor)or die(mysql_error());
                            $dados_autor = mysql_fetch_array($executa_seleciona_autor);
                            ?>



                            <div class="section pad0" >
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <div class="column one-second column_accordion">
                                            <div class="accordion">
                                                <h2 class="title"><?php echo $dados_autor['nome']; ?></h2>

                                                <div class="mfn-acc accordion_wrapper ">


                                                    <div class="question">
                                                        <h5><span class="icon"><i class="icon-right-open"></i></span>Sobre o autor</h5>
                                                        <div class="answer">
                                                            <?php echo $dados_autor['info']; ?>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Social -->
                                                <div class="social" style="float: right;">
                                                    <ul>
                                                        <li style="margin-right: 20px;" class="facebook"><a target="_blank" href="<?php echo $dados_autor['facebook']; ?>" title="Facebook"><i class="icon-facebook"></i></a></li>
                                                        <li style="margin-right: 20px;" class="googleplus"><a target="_blank" href="<?php echo $dados_autor['google']; ?>" title="Google+"><i class="icon-gplus"></i></a></li>
                                                        <li style="margin-right: 20px;" class="twitter"><a target="_blank" href="<?php echo $dados_autor['twitter']; ?>" title="Twitter"><i class="icon-twitter"></i></a></li>
                                                        <li style="margin-right: 20px;" class="instagram"><a target="_blank" href="<?php echo $dados_autor['instagram'] ?>" title="Instagram"><i class="icon-instagram"></i></a></li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="column one-fourth column_blockquote">
                                            <div class="blockquote blockquote_modern">
                                                <img  src="admin/imagens/autor/<?php echo $dados_autor['img']; ?>" class="scale-with-grid wp-post-image" alt="Autor"/>
                                            </div>
                                        </div>
                                        <div class="column one-fourth column_icon_box">
                                            <div class="icon_box icon_position_top">
                                                <div class="icon_wrapper">
                                                    <i class="icon-comment-fa"></i>
                                                </div>
                                                <div class="desc_wrapper">
                                                    <h4 class="title">REFLEXÃO DO AUTOR</h4>
                                                    <hr>
                                                    <div class="desc">
                                                        <?php echo $dados_autor['reflexao']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section section-post-footer">
                                <div class="section_wrapper clearfix">
                                    <div class="column one post-pager">
                                    </div>
                                </div>
                            </div>
                            <div class="section section-post-about">
                                <div class="section_wrapper clearfix">
                                    <div class="column one author-box">
                                        <div class="author-box-wrapper">
                                            <h5><i class="icon-book"></i>LIVROS QUE JÁ ESCREVEU</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section section-post-related">
                            <div class="section_wrapper clearfix">
                                <div class="column one column_portfolio">
                                    <div class="portfolio_wrapper isotope_wrapper">
                                        <ul class="portfolio_group one-fourth isotope" style="margin-top: 10px;">


                                            <?php
                                            $seleciona_livro_autor = "SELECT * FROM livro WHERE autor_id = $id_autor";
                                            $executa_seleciona_autor = mysql_query($seleciona_livro_autor)or die(mysql_error());

                                            while ($array_livro_autor = mysql_fetch_array($executa_seleciona_autor)) {
                                                ?>
                                                <li class="portfolio-item literatura">
                                                    <div class="photo">
                                                        <a class="woocommerce-main-image zoom" href="admin/imagens/livro/<?php echo $array_livro_autor['img']; ?>">
                                                            <img width="815"src="admin/imagens/livro/<?php echo $array_livro_autor['img']; ?>" class="scale-with-grid wp-post-image" alt="<?php echo $array_livro_autor['titulo']; ?>"/>
                                                        </a>
                                                        <div class="hover-box">
                                                            <a class="button button_yellow" href="item-livro.php?liv=<?php echo $array_livro_autor['livro_id']; ?>">ver mais</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <?php
                                            }
                                            ?>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .four-columns - sidebar -->
            </div><!-- // CONTENT WRAPPER -->

            <!-- #Footer -->
            <?php include './footer_reggo.php'; ?>	
        </div><!-- // CONTENT -->

    </div><!-- // WRAPPER -->



    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>


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
    <script type='text/javascript' src='js/prettyPhoto/jquery.prettyPhoto.min.js'></script>
    <script type='text/javascript' src='js/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>





    <script>
        //<![CDATA[
        jQuery(window).load(function () {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "upload/logo_retina.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
        //]]>
    </script>


</body>
</html>