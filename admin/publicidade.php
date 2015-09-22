

<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
<!--main content start-->
<section id="main-content">
    <section class="wrapper">



        <div class="col-lg-10">


            <?php
            if (isset($_GET['respt'])) {

                if ($_GET['respt'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Foto cadastrada com sucesso!
                    </div>
                    <?php
                }
            }
            ?>

            <section class="panel">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE BANNER • PUBLICIDADE</strong></div>
                <div class="panel-body">



                    <form role="form" action="php/salva_fotos.php" method="POST" enctype='multipart/form-data'>

                       <div class="form-group col-sm-6">
                       	<label for="exampleInputEmail1">SELECIONE A DATA</label>
                          <div class="col-md-12">                              <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">                                  <input type="text" class="form-control dpd1" name="from">                                  <span class="input-group-addon"> até </span>                                  <input type="text" class="form-control dpd2" name="to">                              </div>                          </div>                          
                       </div>                                                                    	                        <div class="form-group col-lg-6">                        	<label for="exampleInputEmail1">FORMATO DO BANNER</label>                                <select name="tipo_arquivo" class="form-control m-bot15">                                    <option>•••••••••••••••••••</option>                                    <option>SUPER BANNER • HOME</option>                                    <option>SQUARE BANNER • HOME</option>                                    <option>RODAPÉ BANNER • HOME</option>                                    <option>S. BANNER • INTERNAS</option>                                </select>                        </div>                                                <div class="form-group col-sm-6">                            <label for="exampleInputEmail1">TÍTULO DO BANNER</label>                            <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="nome_autor_blog" type="text" class="form-control" data-placement="top">                        </div> 						<div class="form-group col-sm-6">                            <label for="exampleInputEmail1">LINK DE REDIRECIONAMENTO</label>                            <input name="link_blog" id="link" tooltip="Colque aqui o link do BLOG" type="text" class="form-control" value="http://">                        </div>                        
                        
                        <div class="form-group col-sm-12">                        <hr/>                        	<label class="col-sm-3">Usar imagens nos formatos JPG, PNG ou GIF.<br/> Com resolução de 72dpi</label>                        	<div class="form-group">                            	<div class="col-md-3">                                	<div class="fileupload fileupload-new" data-provides="fileupload">                                    	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">                                        	<img src="img/sem-banner.png" alt="" />                                        </div>                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>                                        <div>                                        	<span class="btn btn-white btn-file">                                            	<span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>                                                <input type="file" name="img" class="default" />                                            </span>                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>                                        </div>                                    </div>                          		</div>                           	</div>                           	                           		    <div class="alert alert-success fade in col-lg-6">                           		        <button type="button" class="close close-sm" data-dismiss="alert">                           		            <i class="fa fa-times"></i>                           		        </button>                           		        <b>LEMBRETE DE FORMATOS</b><br/>                           		        • SUPER BANNER = 728x90 PIXELS<br/>                           		        • SQUARE BANNER = 300x250 PIXELS<br/>                           		        • RODAPÉ BANNER = 728x90 PIXELS<br/>                           		        • SUPER BANNER INTERNAS = 728x90 PIXELS                           		    </div>                        </div>                        
                        <div class="form-group col-sm-12">                        	<hr/>                        	<input type="submit" class="btn btn-primary" value="SALVAR"></input>                        </div>                        
                    </form>

                </div>
            </section>
        </div>

    </section>
</section>
<!--main content end-->

<!--footer start-->
<?php include './footer.php'; ?>
<!--footer end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--this page plugins-->
  
    <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

</body>
</html>
