

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
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE FOTOS</strong></div>
                <div class="panel-body">



                    <form role="form" action="php/salva_fotos.php" method="POST" enctype='multipart/form-data'>

                       <div class="form-group col-sm-6">
                       	<label for="exampleInputEmail1">SELECIONE A DATA</label>
                           <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                       </div>                                              <div class="form-group col-sm-6">                       		<br/>                       		<label for="exampleInputEmail1">CRIE UM NOVO ALBUM</label>                            <a href="#maisAlbum" data-toggle="modal" class="btn btn-primary">                               CRIAR ÁLBUM                           </a>								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="maisAlbum" class="modal fade">                                  <div class="modal-dialog">                                      <div class="modal-content">                                          <div class="modal-header">                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>                                              <h4 class="modal-title">CRIANDO ÁLBUM DE FOTOS</h4>                                          </div>                                          <div class="modal-body">                                              <form role="form">                                                  <div class="form-group">                                                      <label for="exampleInputEmail1">Nome do novo álbum</label>                                                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="nome do álbum">                                                  </div>                                                  <button type="submit" class="btn btn-default">CRIAR</button>                                              </form>                                          </div>                                      </div>                                  </div>                              </div>                       	</div>                       	                        <div class="form-group col-lg-12">                        	<label for="exampleInputEmail1">SELECIONE O ÁLBUM</label>                                <select name="tipo_arquivo" class="form-control m-bot15">                                    <option>FESTA 01</option>                                    <option>FESTA 02</option>                                    <option>FESTA 03</option>                                    <option>FESTA 04</option>                                </select>                        </div>
                        
                        <div class="form-group col-sm-12">                        <hr/>                        	<label class="col-sm-3">usar imagens com tam. padrão 627x422px.<br/> postar até 3 fotos por vez</label>                        	<div class="form-group">                            	<div class="col-md-4">                                	<div class="fileupload fileupload-new" data-provides="fileupload">                                    	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">                                        	<img src="img/sem-imagem.png" alt="" />                                        </div>                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>                                        <div>                                        	<span class="btn btn-white btn-file">                                            	<span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>                                                <input type="file" name="img" class="default" />                                            </span>                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>                                        </div>                                    </div>                          		</div>                                <div class="col-sm-5">                                    <label for="exampleInputEmail1">LEGENDA DA FOTO</label>                                    <textarea name="texto" id="" class="form-control" rows="3"></textarea>                                </div>								<div class="col-sm-5">                            		<hr/>                            		<label style="margin-right: 20px;" class="col-sm-4">CAPA DO ÁLBUM</label>                                	<div class="switch switch-square"                                 		data-on-label="<i class=' fa fa-check'></i>"                                		data-off-label="<i class='fa fa-times'></i>">                                    	<input name="destaque" value="1" type="checkbox" />                                	</div>                                </div>                                                           	</div>                        </div>                                                 <a href="#"><div class="col-sm-6">+ clique para adicionar mais fotos</div></a>
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
