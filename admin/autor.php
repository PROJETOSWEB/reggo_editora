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

            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE AUTORES</strong></div>
                <div class="panel-body">

                    <?php
                    if ($_GET['tipo'] == "insert") {
                        ?>

                        <form role="form" action="php/salva_autor.php" method="POST" enctype='multipart/form-data'>

                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">DATA</label>
                                <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                            </div>

                            <!--  <div class="checkboxes col-sm-7">
                                 <label for="exampleInputEmail1"><b>SELECIONE OS GENEROS DO AUTOR</b></label>
                                 <label class="label_check" for="checkbox-01" style="float: left; padding-right: 25px;">
                                    <input name="genero[]" id="checkbox-01" value="1" type="checkbox" checked />EMPRESAS
                                </label>
                                <label class="label_check" for="checkbox-02" style="float: left; padding-right: 25px;">
                                    <input name="genero" id="checkbox-02" value="2" type="checkbox" />LITERATURA 
                                </label>
                                <label class="label_check" for="checkbox-03" style="float: left;">
                                    <input name="genero1" id="checkbox-03" value="3" type="checkbox" />TÉCNICOS & ACADÊMICOS
                                </label>
                            </div>-->


                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">NOME DO AUTOR(a)</label>
                                <input name="nome" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                                <label style="color: #CE8611;">INFORMAÇÕES GERAIS</label>
                            </div>

                            <div class="form-group col-sm-12">

                                <label for="exampleInputEmail1"><i class="fa fa-chevron-circle-right"></i> Informações básicas</label>
                                <textarea name="informacoes" id="" class="form-control" rows="7"></textarea>

                            </div>


                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3">Usar imagens com tam. padrão 800x1018px, com 72dpi<br/> salvando JPG for web.</label>
                                <div class="form-group">

                                    <div class="col-md-3">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 191px;">
                                                <img src="img/sem-foto-autor.png" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 191px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                    <input type="file" name="img" class="default" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1"><i class="fa fa-comment"></i> REFLEXÃO DO AUTOR</label>
                                        <textarea name="reflexao" id="" class="form-control" rows="7"></textarea>
                                        <br/>                            
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-12">
                                <label style="color: #CE8611;">REDES SOCIAIS</label>
                                <div class="input-group">
                                    <span class="input-group-addon">FACEBOOK</span>
                                    <input name="facebook" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">GOOGLE +</span>
                                    <input name="google" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">TWITTER</span>
                                    <input name="twitter" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">INSTAGRAM</span>
                                    <input name="instagram" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                            </div>




                            <div class="form-group col-sm-12">
                                <hr/>
                                <input type="submit" class="btn btn-primary" value="SALVAR"></input>
                            </div>

                        </form>



                        <?php
                    } else if ($_GET['tipo'] == "edit") {


                        $id_autor = $_GET['id'];
                        $seleciona_dados_update = "SELECT * FROM autor WHERE autor_id = $id_autor";


                        $executa_seleciona_dados = mysql_query($seleciona_dados_update)or die(mysql_error());
                        $dados_update = mysql_fetch_array($executa_seleciona_dados);


                        $data_autor = explode('-', $dados_update['data_autor']);
                        $nova_data = $data_autor[2] . "-" . $data_autor[1] . "-" . $data_autor[0];
                        ?>

                        <form role="form" action="php/update_autor.php" method="POST" enctype='multipart/form-data'>

                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">DATA</label>
                                <input value='<?php echo $nova_data; ?>' name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                            </div>

                            <!-- <div class="checkboxes col-sm-7">
                               <label for="exampleInputEmail1"><b>SELECIONE OS GENEROS DO AUTOR</b></label>
                               <label class="label_check" for="checkbox-01" style="float: left; padding-right: 25px;">
                                   <input name="genero[]" id="checkbox-01" value="1" type="checkbox" checked />EMPRESAS
                               </label>
                               <label class="label_check" for="checkbox-02" style="float: left; padding-right: 25px;">
                                   <input name="genero" id="checkbox-02" value="2" type="checkbox" />LITERATURA 
                               </label>
                               <label class="label_check" for="checkbox-03" style="float: left;">
                                   <input name="genero1" id="checkbox-03" value="3" type="checkbox" />TÉCNICOS & ACADÊMICOS
                               </label>
                           </div>-->


                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">NOME DO AUTOR(a)</label>
                                <input value='<?php echo $dados_update['nome']; ?>' name="nome" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                                <label style="color: #CE8611;">INFORMAÇÕES GERAIS</label>
                            </div>

                            <div class="form-group col-sm-12">

                                <label for="exampleInputEmail1"><i class="fa fa-chevron-circle-right"></i> Informações básicas</label>
                                <textarea name="informacoes" id="" class="form-control" rows="7"><?php echo $dados_update['info']; ?></textarea>

                            </div>


                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3">Usar imagens com tam. padrão 800x1018px, com 72dpi<br/> salvando JPG for web.</label>
                                <div class="form-group">

                                    <div class="col-md-3">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 191px;">
                                                <img src="imagens/autor/<?php echo $dados_update['img']; ?>" alt="" />
                                                <input type='hidden' name='imagem' value='<?php echo $dados_update['img']; ?>'/>
                                                <input type='hidden' name='id' value='<?php echo $dados_update['autor_id']; ?>'>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 191px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                    <input type="file" name="img" class="default" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1"><i class="fa fa-comment"></i> REFLEXÃO DO AUTOR</label>
                                        <textarea name="reflexao" id="" class="form-control" rows="7"><?php echo $dados_update['reflexao']; ?></textarea>
                                        <br/>                            
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-12">
                                <label style="color: #CE8611;">REDES SOCIAIS</label>
                                <div class="input-group">
                                    <span class="input-group-addon">FACEBOOK</span>
                                    <input value='<?php echo $dados_update['facebook']; ?>' name="facebook" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">GOOGLE +</span>
                                    <input value='<?php echo $dados_update['google']; ?>' name="google" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">TWITTER</span>
                                    <input value='<?php echo $dados_update['twitter']; ?>' name="twitter" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon">INSTAGRAM</span>
                                    <input value='<?php echo $dados_update['instagram']; ?>' name="instagram" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="https://">
                                </div>
                            </div>



                            <div class="form-group col-sm-12">
                                <hr/>
                                <input type="submit" class="btn btn-primary" value="SALVAR"></input>
                            </div>

                        </form>


                        <?php
                    }
                    ?>

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

<!--script for this page-->
<script src="js/form-component.js"></script>

</body>
</html>
