<?php include './admin/conections/conexao.php'; ?>

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
        <title>REGGO • </title>


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
    <body class="archive post-type-archive post-type-archive-product with_aside aside_right woocommerce woocommerce-page template-slider color-custom layout-full-width header-dark header-alpha sticky-header">
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


            <div id="Content" style="margin-top: 55px;">
                <div class="content_wrapper clearfix">
                    <!-- .sections_group -->
                    <div class="sections_group">
                        <div class="section">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column one woocommerce-content">
                                        <div  class="post-40 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-hoodies pa_color-black pa_color-blue sale shipping-taxable purchasable product-type-variable product-cat-clothing product-cat-hoodies instock">

        <!--<span class="onsale">LANÇAMENTO</span>-->


                                            <?php
                                            $id_livro = $_GET['liv'];
                                            $seleciona_livro = "SELECT *, autor.img as imautor, livro.img as livroimg, autor.autor_id as idautor FROM livro INNER JOIN
                                                               autor ON livro.autor_id = autor.autor_id  
                                                               WHERE livro_id = $id_livro ";
                                            $executa_seleciona_livro = mysql_query($seleciona_livro)or die(mysql_error());
                                            $dados_livro = mysql_fetch_array($executa_seleciona_livro);
                                            ?>

                                            <div class="images">

                                                <a href="admin/imagens/livro/<?php echo $dados_livro['livroimg']; ?>" class="woocommerce-main-image zoom" title="" >

                                                    <img width="500" src="admin/imagens/livro/<?php echo $dados_livro['livroimg']; ?>" class="attachment-shop_single wp-post-image" alt="" title="tributos"/></a>

                                                <!--<div class="thumbnails columns-3">
                                                
                                                        <a href="upload/hoodie_7_back.jpg" class="zoom first" title="hoodie_7_back" data-rel="prettyPhoto[product-gallery]"><img width="200" height="200" src="upload/hoodie_7_back-200x200.jpg" class="attachment-shop_thumbnail" alt="hoodie_7_back"/></a>
                                                        
                                                        <a href="upload/hoodie_1_back.jpg" class="zoom" title="hoodie_1_back" data-rel="prettyPhoto[product-gallery]"><img width="200" height="200" src="upload/hoodie_1_back-200x200.jpg" class="attachment-shop_thumbnail" alt="hoodie_1_back"/></a>
                                                        
                                                        <a href="upload/hoodie_1_front.jpg" class="zoom last" title="hoodie_1_front" data-rel="prettyPhoto[product-gallery]"><img width="200" height="200" src="upload/hoodie_1_front-200x200.jpg" class="attachment-shop_thumbnail" alt="hoodie_1_front"/></a>
                                                        
                                                </div>-->
                                            </div>

                                            <div class="summary entry-summary">
                                                <h1 class="product_title entry-title"><?php echo $dados_livro['titulo']; ?></h1>
                                                <br/>
                                                <div>
                                                    <p>

                                                        <?php echo $dados_livro['sinopse']; ?>
                                                    </p>
                                                    <hr/>
                                                </div>

                                                <div>
                                                    <p class="product_meta" style="margin-right: 30px; font-weight: 900; font-size: 25px;">
                                                        <span >R$ <?php echo number_format($dados_livro['preco'], 2, ',', ''); ?></span>
                                                    </p>

                                                    <a class="button" href="<?php echo $dados_livro['link']; ?>" target="_blank"><i class="icon-lock-line"></i> QUERO COMPRAR</a>
                                                </div>

                                                <div class="product_meta">
                                                    <h5>Mais informações</h5>
                                                    <ul class="list">
                                                        <li><strong>FORMATO:</strong> <?php echo $dados_livro['formato']; ?></li>
                                                        <li><strong>PÁGINAS:</strong> <?php echo $dados_livro['num_pag']; ?></li>
                                                        <li><strong>ISBN:</strong> <?php echo $dados_livro['isbn']; ?></li>
                                                    </ul>

                                                </div>

                                            </div>


                                        </div>
                                        <!-- #product-40 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- .four-columns - sidebar -->
                    <div class="four columns">
                        <div class="widget-area clearfix">
                            <aside id="woocommerce_products-2" class="widget woocommerce widget_products">


                                <?php
                                ?>



                                <!--<h3>AUTOR</h3>-->
                                <ul class="product_list_widget">
                                    <div class="article_box">
                                        <a class="has_hover" href="item-autor.php?aut=<?php echo $dados_livro['idautor']; ?>">
                                            <div class="photo_mask">
                                                <img class="scale-with-grid" src="admin/imagens/autor/<?php echo $dados_livro['imautor']; ?>" alt="SERAFIM CORRÊA"/>
                                                <div class="mask">
                                                </div>
                                                <span class="button_image more"><i class="icon-eye"></i></span>
                                            </div>
                                            <div class="desc_wrapper" style="margin-bottom: -10px;">
                                                <h6 class="title"><?php echo $dados_livro['nome']; ?> | <i class="icon-briefcase"></i></h6>
                                                <hr>
                                            </div>
                                        </a>
                                    </div>
                                </ul>
                            </aside>

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