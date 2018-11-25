<?php
require_once('includes/config.php');
require_once('includes/RD_Station.php');

$sql = "SELECT * FROM matricula WHERE matricula_cpf = '" . $_REQUEST["CPF"] . "' AND matricula_codigo = 2";
$query = mysqli_query($sqlconex, $sql);
$cont = mysqli_num_rows($query);

print_r($cont);

if ($_SESSION['emailEnviado'] && $cont < 1) {
    $checaemail = explode("@", $_REQUEST["Email"]);
    if ($checaemail[1] != "teste.com.br" || $checaemail[1] != "dowbis.com.br" || $checaemail[1] != "gamartins.com.br") {
        $now       = gmdate("Y-m-d H:i:s", time() + 3600 * (-3 + date("I")));
        $cpfmd5 = md5($_REQUEST['CPF']);
        $sql
            = "INSERT INTO matricula (
                  matricula_instituicao,
                  matricula_codigo,
                  matricula_nome,
                  matricula_cpf,
                  matricula_email,
                  matricula_fixo,
                  matricula_celular,
                  matriculaCurso_area,
                  matricula_como_conheceu,
                  matricula_inscricao,
                  matricula_tipo,
                  matricula_dataCadastro
              ) VALUES (
                  '{$universidade}',
                  '{$campanha}',
                  '{$_REQUEST['NomeCompleto']}',
                  '{$_REQUEST['CPF']}',
                  '{$_REQUEST['Email']}',
                  '{$_REQUEST['Telefone']}',
                  '{$_REQUEST['Celular']}',
                  '{$_REQUEST['AreaPretendida']}',
                  '{$_REQUEST['ComoConheceu']}',
                  '{$cpfmd5}',
                  'lp',
                  '{$now}'
              )";

        if (mysqli_query($sqlconex, $sql)) {
            //echo "New record created successfully";



         
            $lastid = mysqli_insert_id($sqlconex);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($sqlconex);
        }



    }

    header('Location: calendario.php?c=' . $lastid . '&e=' . $cpfmd5);
}
else {
    header('Location: index.php?e=e');
}