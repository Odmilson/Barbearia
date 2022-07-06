<?php
require_once '../login/library.php';
    if(chkLogin()){

    }else{
        header("Location: ../login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<form action="add_avaliacao.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nota</td>
				<td><input type="range" class="form-range" min="0" max="5" id="nota" name="nota"></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input name="descricao" id="descricao" class="form-control" type="text" /></td>
			</tr>
			<tr> 
				<td></td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="hidden" name="user" value=<?php echo $_GET['user'];?>></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>