<?php
require_once('includes/config.php');


//Verifica se o usuário já tem desconto salvo no banco ou não 
$id = $_REQUEST['c']; 
$consultar = "SELECT matriculaCurso_cursoAnterior FROM matricula WHERE id_matricula = " . $id;
$query = mysqli_query($sqlconex, $consultar);
$result = $query->fetch_assoc();
if (empty($result[matriculaCurso_cursoAnterior])) {
} else { 
  header('Location: index.php?c=' . $id . '');
};


/*$updatecamp   = "UPDATE landingpage_campaign SET campanha_num_clicks = :campanha_num_clicks WHERE campanha_id = :campanha_id";
$resultupcamp = $PDO->prepare($updatecamp);
$newclick     = $rowscamp['campanha_num_clicks'] + 1;
$resultupcamp->bindParam(':campanha_id', $rowscamp['campanha_id']);
$resultupcamp->bindParam(':campanha_num_clicks', $newclick);
$resultupcamp->execute();*/

$btninscrevase  = "BAIXE AGORA";
$btnaguarde     = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "<strong style='font-size: 22px'>Preencha o formulário abaixo e baixe grátis o infográfico.</strong><br>";
$btnregulamento = "regulamento-roleta-da-educacao-maio-18.pdf";

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
    <link href="css/media-xsss.css" rel="stylesheet" media="(min-width: 1px) and (max-width: 320px)">
    <link href="css/media-xss.css" rel="stylesheet" media="(min-width: 321px) and (max-width: 375px)">
    <link href="css/media-xs.css" rel="stylesheet" media="(min-width: 376px) and (max-width: 425px)">
    <link href="css/media-sm.css" rel="stylesheet" media="(min-width: 426px) and (max-width: 767px)">
    <link href="css/media-md.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 991px)">
    <link href="css/media-mdd.css" rel="stylesheet" media="(min-width: 992px) and (max-width: 1199px)">
    <link href="css/media-lg.css" rel="stylesheet" media="(min-width: 1200px) and (max-width: 1440px)">
    <link href="css/media-xl.css" rel="stylesheet" media="(min-width: 1441px)">
    <link href="css/style.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


</head>
<body>




<main>
    <table class="calendar">
        <caption class="calendar__banner--month">
            <h1>31 dias de desconto </h1>
        </caption>
        <thead>
            <tr>
                <th class="calendar__day__header">Dom</th>
                <th class="calendar__day__header">Seg</th>
                <th class="calendar__day__header">Ter</th>
                <th class="calendar__day__header">Qua</th>
                <th class="calendar__day__header">Qui</th>
                <th class="calendar__day__header">Sex</th>
                <th class="calendar__day__header">Sab</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell">1</td>
            </tr>

            <tr id="firstWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4 border-mobile" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabou de garantir o seu desconto!</h2><br>
                        <h3>Este é o número do seu cupom: <strong><?php echo $_REQUEST['c']; ?></strong> Guarde-o. <br></h3>
                        <p style="padding-top: 15px;">Em breve um de nossos consultores educacionais entrará em contato com você. <br>Fique atento ao nosso telefone: <br>Central de atendimento em Minas Gerais <strong>DDD (31).</strong></p>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    <input type="hidden" name="inscricao" value="<?php echo $_REQUEST['e']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->



           <tr>
                <td class="calendar__day__cell">2</td>
                <td class="calendar__day__cell">3</td>
                <td class="calendar__day__cell">4</td>
                <td class="calendar__day__cell">5</td>
                <td class="calendar__day__cell">6</td>
                <td class="calendar__day__cell">7</td>
                <td class="calendar__day__cell">8</td>
            </tr>


            <tr id="secondWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabar de garantir o seu desconto!</h2><br>
                        <h3>Este é o seu numero de comprovante: <?php echo $_REQUEST['c']; ?></h3>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->


            <tr>
                <td class="calendar__day__cell">9</td>
                <td class="calendar__day__cell">10</td>
                <td class="calendar__day__cell">11</td>
                <td class="calendar__day__cell">12</td>
                <td class="calendar__day__cell">13</td>
                <td class="calendar__day__cell">14</td>
                <td class="calendar__day__cell">15</td>
            </tr>

            <tr id="thirdWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabar de garantir o seu desconto!</h2><br>
                        <h3>Este é o seu numero de comprovante: <?php echo $_REQUEST['c']; ?></h3>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->


            <tr>
                <td class="calendar__day__cell">16</td>
                <td class="calendar__day__cell">17</td>
                <td class="calendar__day__cell">18</td>
                <td class="calendar__day__cell">19</td>
                <td class="calendar__day__cell">20</td>
                <td class="calendar__day__cell">21</td>
                <td class="calendar__day__cell">22</td>
            </tr>


            <tr id="fourWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabar de garantir o seu desconto!</h2><br>
                        <h3>Este é o seu numero de comprovante: <?php echo $_REQUEST['c']; ?></h3>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->










            <tr>
                <td class="calendar__day__cell">23</td>
                <td class="calendar__day__cell">24</td>
                <td class="calendar__day__cell">25</td>
                <td class="calendar__day__cell">26</td>
                <td class="calendar__day__cell">27</td>
                <td class="calendar__day__cell">28</td>
                <td class="calendar__day__cell">29</td> 
            </tr>

            <tr id="fiveWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabar de garantir o seu desconto!</h2><br>
                        <h3>Este é o seu numero de comprovante: <?php echo $_REQUEST['c']; ?></h3>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->

            <tr>
                <td class="calendar__day__cell">30</td>
                <td class="calendar__day__cell">31</td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td>
                <td class="calendar__day__cell"></td> 
            </tr>  

            <tr id="sixWeek">
              <td colspan="7">
                <h2 id="diah2" style="text-align: center; padding: 10px 0">Promoções Do Dia</h2>
                <hr>
                  
                  
                  <form style="display: contents;" id="calendario" method="post" accept-charset="utf-8" enctype="multipart/form-data">


                  <div id="opt" class="row">
                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>PÓS-GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Todas as áreas)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="PÓS-GRADUAÇÃO: " checked />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>2º GRADUAÇÃO</h4>
                      <p style="font-size: 12px">(Letras e Pedagógia)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="2º GRADUAÇÃO: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: center;">
                      <h4>COMPLEMENTAÇÃO</h4>
                      <p style="font-size: 12px">(Letras, Física ou Matemática)</p>
                      <label>
                        <input type="radio" class="option-input radio" name="opcao" value="COMPLEMENTAÇÃO PEDAGÓGICA: " />
                        <br><br>
                        <span></span>
                      </label>
                    </div>
                    </div>

                    <div id="comprovante" class="row" style="display: none;">
                      <div class="col-md-12" style="text-align: center;  padding: 20px">
                        <img src="https://www.refugeecouncil.org.au/wp-content/uploads/2014/03/Tick.png" style="max-width: 120px; height: 120px">
                        <h2 style="padding: 5px 0">Parabéns, você acabar de garantir o seu desconto!</h2><br>
                        <h3>Este é o seu numero de comprovante: <?php echo $_REQUEST['c']; ?></h3>
                      </div>
                    </div>

                  </div> <!-- END ROW -->

                    <div id="btn" class="col-md-12" style="text-align: center; padding: 15px 0">
                      <button  type="submit" class="btn btn-info" aria-pressed="true">CONFIRMAR</button>
                    </div> 
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['c']; ?>">
                    <input type="hidden" name="inscricao" value="<?php echo $_REQUEST['e']; ?>">
                    
                  </form> 
                  
              </td>
            </tr> <!-- FIM WEEK -->



        </tbody>
    </table>
</main>



<!-- 
 <td class="calendar__day__cell" data-bank-holiday="Good Friday" >17</td>
 <td class="calendar__day__cell" data-moon-phase="Full Moon">31</td> -->
<style type="text/css">
    .btn span.glyphicon {               
    opacity: 0;             
}
.btn.active span.glyphicon {                
    opacity: 1;             
}
</style>







<script type="text/javascript">

    // Parte 1
    var data = new Date();
    // var dia = data.getDate();
    var dia = 1;

    $('#diah2').append(' '+dia);





    if (dia == 1) {
      $('#firstWeek').css('display','visible');
      $('#secondWeek').remove();
      $('#thirdWeek').remove();
      $('#fourWeek').remove();
      $('#fiveWeek').remove();
      $('#sixWeek').remove();
    } else if (dia < 9 ) {
      $('#firstWeek').remove();
      $('#secondWeek').css('display','visible');
      $('#thirdWeek').remove();
      $('#fourWeek').remove();
      $('#fiveWeek').remove();
      $('#sixWeek').remove();
      $('#diah2').append(' '+dia);
    } else if (dia < 16 ) {
      $('#firstWeek').remove();
      $('#secondWeek').remove();
      $('#thirdWeek').css('display','visible');
      $('#fourWeek').remove();
      $('#fiveWeek').remove();
      $('#sixWeek').remove();
      $('#diah2').append(' '+dia);
    } else if (dia < 23 ) {
      $('#firstWeek').remove();
      $('#secondWeek').remove();
      $('#thirdWeek').remove();
      $('#fourWeek').css('display','visible');
      $('#fiveWeek').remove();
      $('#sixWeek').remove();
      $('#diah2').append(' '+dia);
    } else if (dia < 30) {
      $('#firstWeek').remove();
      $('#secondWeek').remove();
      $('#thirdWeek').remove();
      $('#fourWeek').remove();
      $('#fiveWeek').css('display','visible');
      $('#sixWeek').remove();
      $('#diah2').append(' '+dia);
    } else {
      $('#firstWeek').remove();
      $('#secondWeek').remove();
      $('#thirdWeek').remove();
      $('#fourWeek').remove();
      $('#fiveWeek').remove();
      $('#sixWeek').css('display','visible');
      $('#diah2').append(' '+dia);
    }


    $('tbody tr td').each(function(){
      var name = $(this).text();  
      // var name = $(this).text();
      // console.log("=>"+name);
      if(name < 1) {
          $(this).css('color','blue');
      }

     else if (dia > name) {
        $(this).append('<img class="figure" src="img/esgotado.png"/>');
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        $(this).css('color','#e66053');

     } else if (dia < name) {
        // Dias seguintes
        $(this).html('?');
        $(this).css('color','#e66053;');

     } else if (dia == name) {
         $(this).css('color','#e66053');
         $(this).css('background-image','url(../img/conteudo_a.png)');
         $(this).css('background-color','#4E4F4A');
     }


    });


    // PARTE 2
    var i = 0;
    var promocoes = {
    1:["Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 55,00/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 138,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 133,28/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 66,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 261,22/mês</strong>"],
    2:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 147,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 60,57/mês</strong>","Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 106,62/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 138,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 133,28/mês</strong>"],
    3:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 144,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 63,32/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 147,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 117,28/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 87,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 223,91/mês</strong>"],
    4:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 141,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 66,08/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 123,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 159,93/mês</strong>","Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 106,62/mês</strong>"],
    5:["Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>18x R$ 90,00/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 144,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 122,61/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 69,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 255,89/mês</strong>"],
    6:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 138,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 68,83/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 102,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 197,25/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 147,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 117,28/mês</strong>"],
    7:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 135,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 71,58/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 141,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 127,94/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 123,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 159,93/mês</strong>"],
    8:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 132,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 74,34/mês</strong>","Por 18x de R$ 266,56/mês<br><strong> E ganhe 2 Cursos de extensão</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 144,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 122,61/mês</strong>"],
    9:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 129,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 77,09/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 135,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 138,61/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 118,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 197,25/mês</strong>"],
    10:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 126,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 79,84/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 90,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 218,57/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 141,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 127,94/mês</strong>"],
    11:["Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>18x R$ 79,90/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 132,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 143,94/mês</strong>","Por: 18x de R$ 266,56/mês. <strong><br>E ganhe 2 Cursos de extensão</strong>"],
    12:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 123,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 82,60/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 129,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 149,27/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 140,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 138,61/mês</strong>"],
    13:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 120,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 85,35/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 126,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 154,60/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 90,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 218,57/mês</strong>"],
    14:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 117,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 88,10/mês</strong>","Por 18x de R$ 266,56/mês<br><strong>E ganhe 1 Curso de extensão</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 132,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 143,94/mês</strong>"],
    15:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 114,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 90,86/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 120,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 165,26/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 129,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 149,27/mês</strong>"],
    16:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 111,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 93,61/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 66,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 261,22/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 126,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 154,60/mês</strong>"],
    17:["Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 122,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 96,36/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 117,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 170,59/mês</strong>","Por: 18x de R$ 266,56/mês. <strong><BR>E ganhe 1 Curso de extensão</strong>"],
    18:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 105,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 99,12/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 114,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 175,92/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 120,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 165,26/mês</strong>"],
    19:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 102,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 101,87/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 124,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 181,26/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 117,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 170,59/mês</strong>"],
    20:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 99,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 104,62/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 108,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 186,59/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 114,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 175,92/mês</strong>"],
    21:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 96,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 107,38/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 105,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 191,92/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 111,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 181,26/mês</strong>"],
    22:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 93,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 110,13/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 99,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 202,58/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 108,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 186,59/mês</strong>"],
    23:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 90,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 112,88/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 96,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 207,48/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 105,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 191,92/mês</strong>"],
    24:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 87,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 115,64/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 93,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 213,24/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 99,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 202,58/mês</strong>"],
    25:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 84,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 118,39/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 69,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 255,89/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 96,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 207,91/mês</strong>"],
    26:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 81,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 121,14/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 78,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 239,90/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 93,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 213,24/mês</strong>"],
    27:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 78,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 123,90/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 87,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 223,91/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 75,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 245,23/mês</strong>"],
    28:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 75,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 126,65/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 84,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 229,24/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 78,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 239,90/mês</strong>"],
    29:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 72,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 129,40/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 81,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 234,57/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 84,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 229,24/mês</strong>"],
    30:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 69,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 134,91/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 72,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 245,23/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 81,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 234,57/mês</strong>"],
    31:["Matrícula:<br><strike>De: R$ 150,00</strike> Por: <strong>R$ 66,00</strong> <br> Parcelas: <br> <strike>De: R$ 137,67</strike> Por: <strong>R$ 132,16/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 75,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 250,56/mês</strong>","Matrícula: <br> <strike>De: R$ 150,00</strike> Por: <strong>R$ 72,00</strong> <br> Parcelas: <br> <strike>De: R$ 266,56</strike> Por: <strong>R$ 250,56/mês</strong>"],
    };

    console.log(promocoes);

    $('tbody tr td span').each(function(i,b){
      //Monta as opções de acordo com o dia.
      $(this).append('' + promocoes[dia][i]);
      var concat = $(this).closest('label').find('input').val();
      $(this).closest('label').find('input').val('DIA '+dia+' / '+concat+promocoes[dia][i]);
      i++;
    });

</script>





<!-- $(this).closest('label').find('input').val(promocoes[dia][i]); -->







<style type="text/css">
    *{font-family: 'Roboto', sans-serif;}

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  height: 40px;
  width: 40px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}

</style>




<script type="text/javascript">
  $(document).on('submit', '#calendario', function(e){
  e.preventDefault();

  var data =  $("#calendario").serialize();
  // var data =  '1123';
 
  console.log("--> " + data);


  // var id = $_REQUEST['c'];

console.log("Data Serializado é =:> "+data);


  $.ajax({
      type:'POST',
      url: 'envio.php',
      data : data,



      beforeSend: function(){
        //Aqui adicionas o loader
        // $('#btn-tb').attr('value','CARREGANDO.');
        
      },
      success: function(data){





        
         
         $('#opt,#btn,#diah2').css('display','none');
         $('#comprovante').css('display','inherit');
        // console.log("afterSend");
        //         $('#genericFormSuccess').css('display','block');
        //         $('#genericFormSuccess').css('margin-bottom','35px');
        //         var functionWarrning = function () {
        //         $('#genericFormSuccess').removeClass('show');
        //         };
        //         setTimeout(functionWarrning, 5000);
        //         $('#formPodemosTeAjudarInterno')[0].reset();
        //         $('#btn-tb').attr('value','ENVIAR')  ;
       
        // alert(c);

        // alert(id);
        // alert("CAIU NO SUCCESS => " + c);
        // console.log("-> "+data);
      },
      error: function(data){
            // alert(data.responseText);
            //     $('#genericFormSuccess').removeClass('alert-success');
            //     $('#genericFormSuccess').addClass('alert-danger');
            //     $('#genericFormSuccess').html('OPS, Houve um erro, tente novamente dentro de alguns instantes :(');
            //     $('#genericFormSuccess').addClass('show');
            //     $('#genericFormSuccess').css('margin-bottom','35px');
            //     var functionWarrning = function () {
            //         $('#genericFormSuccess').removeClass('show');
            //     };
            //     setTimeout(functionWarrning, 5000);
            alert("ERRO");
      } 
  });  
});
</script>








<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/api.js"></script>



<!-- <script src="js/index.js"></script> -->

<input type="hidden" name="idmatricula" id="idmatricula" value="<?php echo $_REQUEST['c']; ?>">
<!-- <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('bHVjaWFuYTpiOTAzOTJmNi1mOGJkLTQyOWUtYTA1NC00YTg5NzEwM2UyMzM=')
            .withButton({"color":"#BF1E2E","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/Services/Images/a74a202c-20e4-45bf-9969-0640a09e1472"})
            .build();
        }
    })();
</script> -->
</body>
</html>