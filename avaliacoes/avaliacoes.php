<?php
include_once("../config.php");

$result = $db->avaliacoes->find();

require_once '../login/library.php';
    if(chkLogin()){

    }else{
        header("Location: ../login/login.php");
    }

    if(isset($_POST['logout'])){
        
        $var = removeall();
        if($var){
            header("Location:../index.php");
        }
        else{
            echo "Error!";
        }
    
    }

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barbearia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link button" href='../agendamentos/agendamentos.php?id=<?php echo $id ?>'>Agendamentos</a>
                    <form method="post" action="">
                        <input type="submit" name="logout" value="Logout!" class="nav-link">
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    

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
            if($res['fk_user'] == $id){
                $agendamento = $db->agendamentos->findOne(array('_id' => new MongoDB\BSON\ObjectID($res['fk_agendamento'])));
                echo "<tr>";
                echo "<td>".$agendamento['barbeiro']."</td>";
                echo "<td>".$agendamento['data']."</td>";
                echo "<td>".$agendamento['hora']."</td>";	
                echo "<td>".$agendamento['servico']."</td>";
                echo "<td>".$res['nota']."</td>";
                echo "<td>".$res['descricao']."</td>";
                echo "<td><a href=\"edit_avaliacao.php?id=$res[_id]\">Edit</a> | <a href=\"delete_avaliacao.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }		
        }
        ?>
    </table>
</body>
</html>