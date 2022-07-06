<?php

require_once '../login/library.php';
if(chkLogin()){

}else{
    header("Location: ../login/login.php");
}

include_once("../config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$avaliacao = array (
				'nota' => $_POST['nota'],
				'descricao' => $_POST['descricao'],
                'fk_agendamento' => $_POST['agendamento'],
                'fk_user' => $_POST['user']
			);
	
	
	$errorMessage = '';
	foreach ($avaliacao as $key => $value) {
		if (empty($value)) {
			$errorMessage .= $key . ' field is empty<br />';
		}
	}
			
	if ($errorMessage) {
		
		echo '<span style="color:red">'.$errorMessage.'</span>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {
		
        $user = $avaliacao['fk_user'];

		$db->avaliacoes->updateOne(
						array('_id' => new MongoDB\BSON\ObjectID($id)),
						array('$set' => $avaliacao)
					);
		
		

		header("Location: avaliacoes.php?id=$user");
	}
} 
?>
<?php

$id = $_GET['id'];


$result = $db->avaliacoes->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

$nota = $result['nota'];
$descricao = $result['descricao'];
$agendamento = $result['fk_agendamento'];
$user = $result['fk_user'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="avaliacoes.php?id=<?php echo $user; ?>">Home</a>
	<br/><br/>
	
    <form action="edit_avaliacao.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Barbeiro</td>
				<td><td><input type="range" class="form-range" min="0" max="5" id="nota" name="nota" value="<?php echo $nota;?>"></td></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input name="descricao" id="descricao" class="form-control" type="text" value="<?php echo $descricao;?>"/></td>
			</tr>
			<tr> 
				<td></td>
                <td><input type="hidden" name="agendamento" value=<?php echo $agendamento;?>></td>
                <td><input type="hidden" name="user" value=<?php echo $user;?>></td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>