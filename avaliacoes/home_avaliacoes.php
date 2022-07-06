<?php
include_once("../config.php");

$result = $db->avaliacoes->find();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../index.php">Voltar</a><br/><br/>
    <table width='80%' border=0>

        <tr bgcolor='#CCCCCC'>
            <td>Barbeiro</td>
            <td>Data</td>
            <td>Horário</td>
            <td>Serviço</td>
            <td>Nota</td>
            <td>Descrição</td>
        </tr>
        <?php 	
        foreach ($result as $res) {
            $agendamento = $db->agendamentos->findOne(array('_id' => new MongoDB\BSON\ObjectID($res['fk_agendamento'])));
            echo "<tr>";
            echo "<td>".$agendamento['barbeiro']."</td>";
            echo "<td>".$agendamento['data']."</td>";
            echo "<td>".$agendamento['hora']."</td>";	
            echo "<td>".$agendamento['servico']."</td>";
            echo "<td>".$res['nota']."</td>";
            echo "<td>".$res['descricao']."</td>";		
        }
        ?>
    </table>
</body>
</html>