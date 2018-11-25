<?php
require_once('includes/config.php');
require_once('includes/RD_Station.php');



    

$dados = array(
            "opcao" 		=> strip_tags($_POST['opcao']),
            "id"    		=> $_POST['id'],
            "inscricao"     => $_POST['inscricao'],
            "email"         => 'web02@dowbis.com.br'
        );


// print_r($dados['id']);
// print_r($dados['inscricao']);


$sql = "UPDATE matricula SET matriculaCurso_cursoAnterior = '" . $dados['opcao'] . "' WHERE matricula_inscricao LIKE '" . $dados['inscricao'] . "'";
mysqli_query($sqlconex, $sql);


print_r($sql);


        



$sql = "SELECT id_matricula as Comprovante, matricula_nome as Nome, matricula_email as Email, matricula_fixo as Fixo, matricula_celular as Celular, matriculaCurso_area as Area_de_Interesse , matricula_como_conheceu as Como_nos_conheceu, matriculaCurso_cursoAnterior as Promoção_Escolhida FROM matricula WHERE id_matricula = " . $dados['id'];
$query = mysqli_query($sqlconex, $sql);
$cal = $query->fetch_assoc();

// print_r($cal);


//INTEGRAÇÃO COM O RD STATION
// $rdAPI = new RDStationAPI("38a4b998860fd280171abcb6ce57af0f", "48846f841a9ffae9900976dc64eb8aba");
$cal += ["identificador" => "31-dias-de-desconto"];
$return1 = $rdAPI->sendNewLead($cal['Email'], $cal);
// print_r($return1);
$msg = "<div class='alert alert-success'>Mensagem enviada com sucesso! <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='color:green; font-size: 28px; font-weight: bold'>&times;</span></button></div>";

echo $msg;
echo $return1;





 
   

