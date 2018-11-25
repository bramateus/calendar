
<?php
require_once('includes/config.php');


$btninscrevase  = "QUERO ME INSCREVER";
$btnaguarde     = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "<span>PREENCHA O FORMULÁRIO E GARANTA A SUA VAGA!</span>";
$btnregulamento = "regulamento-graduarte-pos-graduacao-e-curso-de-ingles.pdf";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php echo $rowsun['instituicao_tagmanager_head']; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title><?php echo $rowscamp['campanha_titulo']; ?> | <?php echo $rowsun['instituicao_titulo']; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="language" content="pt-br">
    <meta name="url" content="<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>">
    <meta name="doc-class" content="completed">
    <meta name="doc-rights" content="public">
    <meta name="autor" content="<?php echo $rowsun['instituicao_titulo']; ?>">
    <meta name="company" content="<?php echo $rowsun['instituicao_titulo']; ?>">
    <meta name="revisit-after" content="1">
    <link rev="made" href="mailto:<?php echo $rowsun['instituicao_email_matricula']; ?>">
    <link rel="canonical" href="<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/lpbootstrap.min.css" rel="stylesheet">

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss-home.css" rel="stylesheet" media="(min-width: 1px) and (max-width: 320px)">
    <link href="css/media-xss-home.css" rel="stylesheet" media="(min-width: 321px) and (max-width: 375px)">
    <link href="css/media-xs-home.css" rel="stylesheet" media="(min-width: 376px) and (max-width: 425px)">
    <link href="css/media-sm-home.css" rel="stylesheet" media="(min-width: 426px) and (max-width: 767px)">
    <link href="css/media-md-home.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 991px)">
    <link href="css/media-mdd-home.css" rel="stylesheet" media="(min-width: 992px) and (max-width: 1199px)">
    <link href="css/media-lg-home.css" rel="stylesheet" media="(min-width: 1200px) and (max-width: 1440px)">
    <link href="css/media-xl-home.css" rel="stylesheet" media="(min-width: 1441px)">
    <link href="css/style.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php echo $rowsun['instituicao_tagmanager_body']; ?>

<!-- LP -->
<!-- FORMULÁRIO -->
<div class="box" id="form-box"  style="border: solid 5px #E57C00;  padding: 8px; border-radius: 9px; background-clip: content-box; background-color: #E57C00;  /*line-height: 1.5;*/ border-top-right-radius: 25px; border-top-left-radius: 25px; border-bottom-left-radius: 25px; border-bottom-right-radius:25px; position: absolute;">
    <a name="form-inscrevase"></a>
    <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
    <p class="text-uppercase"><?php echo $topoformulario; ?></p>

    <?php if($_REQUEST['e'] === 'e') : ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Você já se registrou nessa campanha, aguarde nosso contatoo.</strong>
    </div>
    <?php endif; ?>

    <?php if($_REQUEST['c'] != null) : ?>
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <h5>Você já se registrou nessa campanha, o seu número de comprovante é </h5><h4><strong><?= $_REQUEST['c'] ?></h4></strong>
    </div>
    <?php endif; ?>

    <form action="formulario.php" method="post">
        <div class="form-group">
            <input type="text" name="NomeCompleto" class="form-control" placeholder="Nome:" required>
        </div>
        <div class="form-group">
            <input type="text" name="CPF" class="form-control" placeholder="CPF:" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="E-mail:" id="myEmail" required>
        </div>
        <div class="form-group">
            <input type="text" name="Telefone" class="form-control" placeholder="Telefone:" id="celular" required>
        </div>
        <div class="form-group">
            <input type="text" name="Celular" class="form-control" placeholder="Celular:">
        </div>
        <div class="form-group">
            <select class="form-control" name="AreaPretendida" title="" required>
                <option value="">Área do curso que deseja?</option>
                <option value="Comunicação">Comunicação</option>
                <option value="Agronomia">Agronomia</option>
                <option value="Educação">Educação</option>
                <option value="Gestão">Gestão</option>
                <option value="Informática">Informática</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Saúde">Saúde</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="ComoConheceu" title="" required>
                <option value="">Como nos conheceu?</option>
                <option value="Facebook">Facebook</option>
                <option value="Instagram">Instagram</option>
                <option value="Vi em um site">Vi em um site</option>
                <option value="Pesquisei no Google">Pesquisei no Google</option>
                <option value="Recebi um SMS">Recebi um SMS</option>
                <option value="Recebi um e-mail">Recebi um e-mail</option>
                <option value="Indicação de Amigo">Indicação de Amigo</option>
                <option value="Conversei com um vendedor externo">Conversei com um vendedor externo</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Faixa">Faixa</option>
                <option value="Panfleto">Panfleto</option>
                <option value="Rádio">Rádio</option>
                <option value="Cartaz">Cartaz</option>
            </select>
        </div>

        <!-- <div class="form-check">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" name="AceiteRegulamento" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description"><a href="<?php echo $btnregulamento; ?>" target="_blank" class="text-light">Clique aqui e leia o regulamento*.</a></span>
            </label>
        </div>
 -->

        <div class="form-check">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <!-- <input type="checkbox" class="custom-control-input" name="AceiteRegulamento" required> -->
                <!-- <span class="custom-control-indicator"></span> -->
                <span class="custom-control-description"><a href="<?php echo $btnregulamento; ?>" target="_blank" class="text-light">Clique aqui e leia o regulamento*.</a></span>
            </label>
        </div>
        <div style="padding-bottom: 15px"></div>

        <div class="form-group">
            <button id="submit" class="btn btn-hover d-block mx-auto btn-glass-hover" aria-pressed="true" style="background-color: #004060 ;color: #fff; position: absolute; left: 10%;  width: 80%; height: 12%; bottom: -6%; border-radius: 10px; cursor: pointer;">
                <div class="reflexo"></div>
                <span style="font-size: 1.1em; font-weight: bold" id="inscreva"><?php echo $btninscrevase; ?></span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php echo $btnaguarde; ?></span>
            </button>
        </div>


      

        <!-- <div class="form-group text-center">
            <button id="submit" class="btn btn-primary d-block mx-auto" aria-pressed="true">
                <span id="inscreva"><?php echo $btninscrevase; ?></span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php echo $btnaguarde; ?></span>
            </button>
            <small>*CONSULTE REGULAMENTO</small>
        </div> -->


    </form>
</div>

<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-auto col-mdd-2 col-lg-2 col-xl-3"></div>

        <!-- CONTEUDO -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-5 col-lg-6 col-xl-5">
            <img src="img/conteudo_a.png" class="img-fluid ml-2 conteudo-a d-block mx-auto" alt="">
           <!--  <a href="#form-inscrevase" class="btn-mobile btn btn-primary btn-lg d-block mx-auto mb-4">INSCREVA-SE!</a> -->
        </div>

        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div class="col-xs-12 col-sm-12 col-md-auto col-mdd-4 col-lg-4 col-xl-4"></div>
    </div>

    <!-- LINHA CINZA -->
    <div class="row mt-2">
        <div class="col-md-12 col-lg-8 col-lx-8 mt-2">
            
        </div>
    </div>



  



    <!-- FOLGA -->
    <div class="mt-4 col-xl-12"></div>



    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <div class="btn-formulario-display">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a"><?php echo $btninscrevase; ?></button>
    </div>
</section>




<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>