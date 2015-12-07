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
        <title>COMPRE UM LIVRO</title>


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


                    <!-- // CHARTS PORCENTAGENS % -->

                    <!-- .sections_group -->
                    <div class="sections_group" style="background-color: #fff;">

                        <div class="section pad0" >
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_small_icon ">
                                            <i class="icon-graduation-cap"></i>
                                            <i class="icon-briefcase"></i>
                                            <i class="icon-book"></i>
                                            <br/><br/>
                                            <h3>PREENCHA O FORMULÁRIO<br/> e solicite seu orçamento de compra</h3>

                                            <div class="inside">
                                                Preencha o formulário de contato abaixo para solicitar um orçamento de compra.                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section pad0">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">

                                    <div class="column one-second  column_column">

                                        <?php
                                        $livro_id = $_GET['id'];
                                        $sql_seleciona_livro = "SELECT * FROM livro WHERE livro_id = $livro_id";
                                        $executa_sql_seleciona = mysql_query($sql_seleciona_livro)or die(mysql_error());
                                        $livro_comprar = mysql_fetch_array($executa_sql_seleciona);
                                        ?>


                                        <img src="admin/imagens/livro/<?php echo $livro_comprar['img']; ?>" width="65%" style="float: right;" alt="" />

                                    </div>

                                    <div class="column one-second  column_column" >
                                        <h3><b>R$ <?php echo $livro_comprar['preco']; ?>,00 </b></h3>
                                        <div role="form" class="wpcf7" id="wpcf7-f9896-p5721-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>

                                            <form action="envia_compra.php?id=<?php echo $_GET['id']; ?>" method="POST" class="contact">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap name">
                                                        <input type="text" required="required"  name="nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Seu nome"/>
                                                    </span>

                                                    <span class="wpcf7-form-control-wrap email">
                                                        <input type="email"  required="required" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Seu email"/>
                                                    </span>

                                                    <span class="wpcf7-form-control-wrap subject">
                                                        <input type="text" required="" name="telefone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telefones"/>
                                                    </span>                                            

                                                    <br/>
                                                    <span class="wpcf7-form-control-wrap message" style="width: 150px; float: left; ">
                                                        <input type="text" required="required" name="quant_livros" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Quantos livros?"/>
                                                    </span>
                                                    
                                                    <span class="wpcf7-form-control-wrap message" style="width: 250px;">
                                                        <select required="" name="tipo_envio" class="form-control">
                                                            <option value="">TIPO DE ENVIO</option>
                                                            <option value="PAC">PAC</option>
                                                            <option value="SEDEX">SEDEX</option>
                                                            <option value="TRANSPORTADORA">TRANSPORTADORA</option>
                                                        </select>
                                                    </span>


                                                    <span class="wpcf7-form-control-wrap message" style="width: 150px; float: left; ">
                                                        <input type="text" required="required" name="cep" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="seu CEP"/>
                                                    </span>
                                                    
                                                    <span class="wpcf7-form-control-wrap message">
                                                        <textarea  name="obs" id="comment" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Observações"></textarea>
                                                    </span>

                                                <hr/>



                                                <input class="button " type="submit" value="enviar" class="wpcf7-form-control wpcf7-submit"/>
                                                <div id="msg" class="message"></div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div><!-- // CONTENT WRAPPER -->

                <!-- #Footer -->
<?php include './footer_reggo.php'; ?>
            </div><!-- // CONTENT -->

        </div><!-- // WRAPPER -->



        <script type='text/javascript' src='js/jquery/jquery.js'></script>
        <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

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




        <script type='text/javascript' src='js/jquery.form.min.js'></script>

        <script type='text/javascript' src='js/frontend/add-to-cart.min.js'></script>
        <script type='text/javascript' src='js/select2/select2.min.js'></script>
        <script type='text/javascript' src='js/jquery-blockui/jquery.blockUI.min.js'></script>
        <script type='text/javascript' src='js/frontend/woocommerce.min.js'></script>
        <script type='text/javascript' src='js/jquery-cookie/jquery.cookie.min.js'></script>

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