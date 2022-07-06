<?php
include_once("../config.php");

$result = $db->agendamentos->find();

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
    <title>Agendamentos</title>
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
                    <a class="nav-link" href="cad_agendamento.php?id=<?php echo $id; ?>">Novo agendamento</a><br/><br/>
                    <a class="nav-link" href='../avaliacoes/avaliacoes.php?id=<?php echo $id ?>'>Avaliacoes</a>
                    <form method="post" action="">
                        <input type="submit" name="logout" value="Logout!">
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
        </tr>
        <?php 	
        foreach ($result as $res) {
            if($res['fk_user'] == $id){
                echo "<tr>";
                echo "<td>".$res['barbeiro']."</td>";
                echo "<td>".$res['data']."</td>";
                echo "<td>".$res['hora']."</td>";	
                echo "<td>".$res['servico']."</td>";
                echo "<td><a href=\"edit_agendamento.php?id=$res[_id]\">Edit</a> | <a href=\"delete_agendamento.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"../avaliacoes/cad_avaliacao.php?id=$res[_id]&user=$_GET[id]\">Avaliar</a><br/><br/></td>";
            }		
        }
        ?>
    </table>
</body>
</html>