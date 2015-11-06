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

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE LIVRO</strong></div>
                <div class="panel-body">

                    <?php
                    if ($_GET['tipo'] == "insert") {
                        ?>
                        <form role="form" action="php/salva_livro.php" method="POST" enctype='multipart/form-data'>

                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">DATA</label>
                                <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                            </div>

                            <div class="radios col-sm-7" style="margin-top: -20px;">

                                <label for="exampleInputEmail1"><b>TIPO DE PUBLICAÇÃO</b></label>
                                <label class="label_radio" for="radio-02" style="float: left; padding-right: 25px;">
                                    <input name="sample-radio" id="radio-02" value="1" type="radio" />IMPRESSO
                                </label>
                                <label class="label_radio" for="radio-03" style="float: left;">
                                    <input name="sample-radio" id="radio-03" value="2" type="radio" />e-BOOK
                                </label>
                            </div>


                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>


                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">TÍTULO DA OBRA</label>
                                <input name="titulo" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">ASSUNTO</label>
                                <select name="assunto" class="form-control">
                                    <option>•••••••••••••••••••</option>

                                    <?php
                                    $sql_assuntos = "SELECT * FROM assunto";
                                    $executa_sql_assunto = mysql_query($sql_assuntos)or die(mysql_error());

                                    while ($array_assunto = mysql_fetch_array($executa_sql_assunto)) {
                                        ?>
                                        <option value='<?php echo $array_assunto['assunto_id']; ?>'><?php echo $array_assunto['nome']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">SELECIONE O AUTOR</label>
                                <select name="autor" class="form-control">
                                    <option>•••••••••••••••••••</option>

                                    <?php
                                    $sql_autor = "SELECT * FROM autor";
                                    $executa_autor = mysql_query($sql_autor)or die(mysql_error());


                                    while ($array_autor = mysql_fetch_array($executa_autor)) {
                                        ?>
                                        <option value='<?php echo $array_autor['autor_id']; ?>'><?php echo $array_autor['nome']; ?></option>

                                        <?php
                                    }
                                    ?>

                                </select>
                            </div>


                            <div class="form-group col-sm-12">

                                <label for="exampleInputEmail1"><i class="fa fa-chevron-circle-right"></i> SINOPSE</label>
                                <textarea name="sinopse" id="" class="form-control" rows="7"></textarea>

                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="exampleInputEmail1">PREÇO DE VENDA</label>
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon">R$</span>
                                    <input name="preco" type="text" class="form-control">
                                    <span class="input-group-addon">,00</span>
                                </div>
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="exampleInputEmail1">LINK DO BOTÃO DE COMPRA</label>
                                <input name="link" id="link" tooltip="Colque aqui o link do BLOG" type="text" class="form-control" value="http://">
                            </div>

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
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label style="color: #CE8611;">MAIS INFORMAÇÕES</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">FORMATO</span>
                                            <input name="formato" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                        <br/>
                                        <div class="input-group">
                                            <span class="input-group-addon">Nº PÁGINAS</span>
                                            <input name="npag" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                        <br/>
                                        <div class="input-group">
                                            <span class="input-group-addon">ISBN</span>
                                            <input name="isbn" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <hr/>
                                <input type="submit" class="btn btn-primary" value="SALVAR"></input>
                            </div>

                        </form>
                        <?php
                    } else if ($_GET['tipo'] == "edit") {

                        $id_livro = $_GET['id'];
                        $seleciona_dados_update = "SELECT *, assunto.nome as assuntonome, livro.img as imagemlivro,  autor.nome as autornome, livro.assunto_id as idassunto, autor.autor_id as autorid FROM livro INNER JOIN autor
                                                    ON autor.autor_id = livro.autor_id
                                                    INNER JOIN assunto ON assunto.assunto_id = livro.assunto_id
                                                    INNER JOIN usuario ON usuario.usuario_id = livro.usuario_id WHERE livro_id = $id_livro";


                        $executa_seleciona_dados = mysql_query($seleciona_dados_update)or die(mysql_error());
                        $dados_update = mysql_fetch_array($executa_seleciona_dados);


                        $data_autor = explode('-', $dados_update['data_livro']);
                        $nova_data = $data_autor[2] . "-" . $data_autor[1] . "-" . $data_autor[0];
                        ?>
                        <form role="form" action="php/update_livro.php" method="POST" enctype='multipart/form-data'>

                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">DATA</label>
                                <input value="<?php echo $nova_data; ?>" name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                            </div>

                            <div class="radios col-sm-7" style="margin-top: -20px;">

                                <label for="exampleInputEmail1"><b>TIPO DE PUBLICAÇÃO</b></label>

                                <label class="label_radio" for="radio-02" style="float: left; padding-right: 25px;">
                                    <input name="sample-radio" id="radio-02" value="1" type="radio" <?php
                                    if ($dados_update['tipo'] == 1) {
                                        echo "checked";
                                    }
                                    ?> />IMPRESSO
                                </label>

                                <label class="label_radio" for="radio-03" style="float: left;">
                                    <input name="sample-radio" id="radio-03" value="2" type="radio" <?php
                                    if ($dados_update['tipo'] == 2) {
                                        echo "checked";
                                    }
                                    ?> />e-BOOK
                                </label>

                            </div>


                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>


                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">TÍTULO DA OBRA</label>
                                <input value="<?php echo $dados_update['titulo']; ?>" name="titulo" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">ASSUNTO</label>
                                <select name="assunto" class="form-control">
                                    <option value="<?php echo $dados_update['idassunto']; ?>"><?php echo $dados_update['assuntonome']; ?></option>

                                    <?php
                                    $idassunto = $dados_update['idassunto'];
                                    $sql_assuntos = "SELECT * FROM assunto WHERE assunto_id <> $idassunto ";
                                    $executa_sql_assunto = mysql_query($sql_assuntos)or die(mysql_error());

                                    while ($array_assunto = mysql_fetch_array($executa_sql_assunto)) {
                                        ?>
                                        <option value='<?php echo $array_assunto['assunto_id']; ?>'><?php echo $array_assunto['nome']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group col-lg-6">
                                <label for="exampleInputEmail1">SELECIONE O AUTOR</label>
                                <select name="autor" class="form-control">
                                    <option value="<?php echo $dados_update['autorid']; ?>"><?php echo $dados_update['autornome']; ?></option>

                                    <?php
                                    $idautor = $dados_update['autorid'];
                                    $sql_autor = "SELECT * FROM autor WHERE autor_id <> $idautor";
                                    $executa_autor = mysql_query($sql_autor)or die(mysql_error());


                                    while ($array_autor = mysql_fetch_array($executa_autor)) {
                                        ?>
                                        <option value='<?php echo $array_autor['autor_id']; ?>'><?php echo $array_autor['nome']; ?></option>

                                        <?php
                                    }
                                    ?>

                                </select>
                            </div>


                            <div class="form-group col-sm-12">

                                <label for="exampleInputEmail1"><i class="fa fa-chevron-circle-right"></i> SINOPSE</label>
                                <textarea name="sinopse" id="" class="form-control" rows="7"><?php echo $dados_update['sinopse']; ?></textarea>

                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="exampleInputEmail1">PREÇO DE VENDA</label>
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon">R$</span>
                                    <input value="<?php echo $dados_update['preco']; ?>" name="preco" type="text" class="form-control">
                                    <span class="input-group-addon">,00</span>
                                </div>
                            </div>

                            <div class="form-group col-sm-9">
                                <label for="exampleInputEmail1">LINK DO BOTÃO DE COMPRA</label>
                                <input value="<?php echo $dados_update['link']; ?>" name="link" id="link" tooltip="Colque aqui o link do BLOG" type="text" class="form-control" value="http://">
                            </div>

                            <div class="form-group col-sm-12">
                                <hr/>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="col-sm-3">Usar imagens com tam. padrão <b>711x1000px</b>, com 72dpi<br/> salvando JPG for web.</label>
                                <div class="form-group">

                                    <div class="col-md-3">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 205px;">
                                                <img src="imagens/livro/<?php echo $dados_update['imagemlivro']; ?>" alt="" />
                                                
                                                <input type="hidden" name="imagem" value="<?php echo $dados_update['imagemlivro']; ?>"/>  
                                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>  
                                            
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
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label style="color: #CE8611;">MAIS INFORMAÇÕES</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">FORMATO</span>
                                            <input value="<?php echo $dados_update['formato']; ?>" name="formato" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                        <br/>
                                        <div class="input-group">
                                            <span class="input-group-addon">Nº PÁGINAS</span>
                                            <input value="<?php echo $dados_update['num_pag']; ?>" name="npag" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                        <br/>
                                        <div class="input-group">
                                            <span class="input-group-addon">ISBN</span>
                                            <input value="<?php echo $dados_update['isbn']; ?>" name="isbn" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="">
                                        </div>
                                    </div>
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
