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
<form action="add_agendamento.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Barbeiro</td>
				<td>
                    <select name="barbeiro" id="barbeiro">
                        <option selected>Open this select menu</option>
                        <option value="Eduardo">Eduardo</option>
                        <option value="Joao">João</option>
                    </select>
                </td>
			</tr>
			<tr> 
				<td>Data</td>
				<td><input name="data" id="data" class="form-control" type="date" /></td>
			</tr>
            <tr> 
				<td>Horário</td>
				<td>
                    <select name="hora" id="hora">
                        <option selected>Open this select menu</option>
                        <option value="08:00:00">08:00</option>
                        <option value="08:30:00">08:30</option>
                        <option value="09:00:00">09:00</option>
                        <option value="09:30:00">09:30</option>
                        <option value="10:00:00">10:00</option>
                        <option value="10:30:00">10:30</option>
                        <option value="11:00:00">11:00</option>
                        <option value="11:30:00">11:30</option>
                        <option value="12:00:00">12:00</option>
                        <option value="12:30:00">12:30</option>
                        <option value="13:00:00">13:00</option>
                        <option value="13:30:00">13:30</option>
                        <option value="14:00:00">14:00</option>
                        <option value="14:30:00">14:30</option>
                        <option value="15:00:00">15:00</option>
                        <option value="15:30:00">15:30</option>
                        <option value="16:00:00">16:00</option>
                        <option value="16:30:00">16:30</option>
                        <option value="17:00:00">17:00</option>
                        <option value="17:30:00">17:30</option>
                        <option value="18:00:00">18:00</option>
                        <option value="18:30:00">18:30</option>
                    </select>
                </td>
			</tr>
			<tr> 
				<td>servico</td>
				<td>
                    <select name="servico" id="servico">
                        <option selected>Open this select menu</option>
                        <option value="barba">Barba</option>
                        <option value="corte">Corte</option>
                    </select>
                </td>
			</tr>
			<tr> 
				<td></td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>