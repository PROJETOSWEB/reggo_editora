<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="col-lg-8">
            
               <?php
            if (isset($_GET['respt'])) {

                if ($_GET['respt'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Autor(a) cadastrado(a) com sucesso!
                    </div>
                    <?php
                }
            }
            ?>
            
            
            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE LIVRO</strong></div>
                <div class="panel-body">

                    <form role="form" action="php/salva_noticia.php" method="POST" enctype='multipart/form-data'>
						

                        <div class="form-group col-sm-4">
                        	<label for="exampleInputEmail1">DATA</label>
                            <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                        </div>                         <div class="radios col-sm-7" style="margin-top: -20px;">                         <label for="exampleInputEmail1"><b>TIPO DE PUBLICAÇÃO</b></label>                             <label class="label_radio" for="radio-02" style="float: left; padding-right: 25px;">                                 <input name="sample-radio" id="radio-02" value="1" type="radio" />IMPRESSO                             </label>                             <label class="label_radio" for="radio-03" style="float: left;">                                 <input name="sample-radio" id="radio-03" value="1" type="radio" />e-BOOK                             </label>                         </div>                                                                           <div class="form-group col-sm-12">                         	<hr/>                         </div>                                                                  

						<div class="form-group col-sm-12">						    <label for="exampleInputEmail1">TÍTULO DA OBRA</label>						    <input name="titulo" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">						</div>						<div class="form-group col-lg-6">							<label for="exampleInputEmail1">ASSUNTO</label>						        <select name="tipo_arquivo" class="form-control">						            <option>•••••••••••••••••••</option>						            <option>literatura</option>						            <option>arte</option>						            <option>arquitetura</option>						            <option>ciencias humanas</option>						            <option>cinema e teatro</option>						            <option>design</option>						            <option>fotografia</option>						            <option>infantojuvenil</option>						            <option>poesia</option>						            <option>moda</option>						            <option>música e dança</option>						            <option>institucionais e outros</option>						        </select>						</div>																		<div class="form-group col-lg-6">							<label for="exampleInputEmail1">SELECIONE O AUTOR</label>						        <select name="tipo_arquivo" class="form-control">						            <option>•••••••••••••••••••</option>						            <option>CELDO BRAGA</option>						            <option>RENATO BAGRE</option>						            <option>ROBERIO BRAGA</option>						            <option>GILBERTO SUCESSO</option>						        </select>						</div>												
 						<div class="form-group col-sm-12">

                            <label for="exampleInputEmail1"><i class="fa fa-chevron-circle-right"></i> SINOPSE</label>
                            <textarea name="texto" id="" class="form-control" rows="7"></textarea>

                        </div>                                                <div class="form-group col-sm-12">                        	<hr/>                        </div>                                                <div class="form-group col-sm-3">                            <label for="exampleInputEmail1">PREÇO DE VENDA</label>                        	<div class="input-group m-bot15">                            	<span class="input-group-addon">R$</span>                            	<input type="text" class="form-control">                            	<span class="input-group-addon">,00</span>                       		</div>                        </div>                        						<div class="form-group col-sm-9">                            <label for="exampleInputEmail1">LINK DO BOTÃO DE COMPRA</label>                            <input name="link_blog" id="link" tooltip="Colque aqui o link do BLOG" type="text" class="form-control" value="http://">                        </div>                        
 						<div class="form-group col-sm-12">
 							<hr/>
						</div>
						
                        <div class="form-group col-sm-12">
                        	<label class="col-sm-3">Usar imagens com tam. padrão <b>711x1000px</b>, com 72dpi<br/> salvando JPG for web.</label>
							<div class="form-group">							
                            	<div class="col-md-3">
	                            	<div class="fileupload fileupload-new" data-provides="fileupload">
                                    	<div class="fileupload-new thumbnail" style="width: 150px; height: 205px;">
                                        	<img src="img/sem-capa-livro.png" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 205px; line-height: 20px;"></div>
                                        <div>
                                        	<span class="btn btn-white btn-file">
                                            	<span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                <input type="file" name="img" class="default" />
                                            </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                        </div>
                                    </div>
                          		</div>                          		                          		<div class="form-group col-sm-6">                          		    <label style="color: #CE8611;">MAIS INFORMAÇÕES</label>                          		    <div class="input-group">                          		        <span class="input-group-addon">FORMATO</span>                          		        <input name="codigo" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">                          		    </div>                          		    <br/>                          		    <div class="input-group">                          		        <span class="input-group-addon">Nº PÁGINAS</span>                          		        <input name="codigo" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">                          		    </div>                          		    <br/>                          		    <div class="input-group">                          		        <span class="input-group-addon">ISBN</span>                          		        <input name="codigo" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">                          		    </div>                          		</div>
                           	</div>
                        </div>                                                                                                 
												<div class="form-group col-sm-12">							<hr/>
                        	<input type="submit" class="btn btn-primary" value="SALVAR"></input>
						</div>						
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

<!-- js placed at the end of the document so the pages load faster --><script src="js/jquery.js"></script><script src="js/jquery-1.8.3.min.js"></script><script src="js/bootstrap.min.js"></script><script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script><script src="js/jquery.scrollTo.min.js"></script><script src="js/jquery.nicescroll.js" type="text/javascript"></script><script src="js/jquery.sparkline.js" type="text/javascript"></script><script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script><script src="js/owl.carousel.js" ></script><script src="js/jquery.customSelect.min.js" ></script><script src="js/respond.min.js" ></script>  <!--custom switch-->  <script src="js/bootstrap-switch.js"></script>  <!--custom tagsinput-->  <script src="js/jquery.tagsinput.js"></script>  <!--this page plugins-->      <!--this page plugins-->  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>  <!--common script for all pages-->    <script src="js/common-scripts.js"></script>    <!--this page  script only-->    <script src="js/advanced-form-components.js"></script>          <!--script for this page-->      <script src="js/form-component.js"></script>
</body>
</html>
