<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->

<script>$('.foto').click(function(e){    var f = $(this).parent().parent(),        c = f.clone(true,true);    c.insertAfter(f);});</script>
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
                        <strong>SUCESSO!</strong> Notícia cadastrada com sucesso!
                    </div>
                    <?php
                }
            }
            ?>
            
            
            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE SUB-EDITORIAS</strong></div>
                <div class="panel-body">

                    <form role="form" class=" form-validation" action="php/salva_noticia.php" data-ng-submit="submitForm()" method="POST" enctype='multipart/form-data'>
						                        <div class="form-group col-lg-6">                        	<label for="exampleInputEmail1">ESCOLHA A EDITORIA</label>                                <select data-ng-model="sub.editoria" required name="tipo_arquivo" class="form-control m-bot15">                                    <option>NOTÍCIAS</option>                                    <option>ESPORTES</option>                                    <option>ENTRETENIMENTO</option>                                    <option>AMAZÔNIA</option>                                    <option>POLÍCIA</option>                                    <option>CULTURA</option>                                    <option>RELIGIÃO</option>                                </select>                        </div>                        
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">NOVA SUB-EDITORIA</label>
                            <input                             	data-ng-model="sub.nova"                             	required                             	name="titulo"                             	tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS"                             	name="titulo"                             	type="text"                             	class="form-control"                             	data-placement="top">
                        </div>



                        <div class="form-group col-sm-12">                        	<hr/>                        	<input data-ng-disabled="!canSubmit()" type="submit" class="btn btn-primary " value="SALVAR"></input>                        </div>

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
