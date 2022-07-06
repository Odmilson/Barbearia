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
	$agendamento = array (
				'barbeiro' => $_POST['barbeiro'],
				'data' => $_POST['data'],
                'hora' => $_POST['hora'],
				'servico' => $_POST['servico'],
                'fk_user'  => $_POST['id']
			);
	
	$errorMessage = '';
	foreach ($agendamento as $key => $value) {
		if (empty($value)) {
			$errorMessage .= $key . ' field is empty<br />';
		}
	}
			
	if ($errorMessage) {
		echo '<span style="color:red">'.$errorMessage.'</span>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {

        $user = $agendamento['fk_user'];
		
		$db->agendamentos->updateOne(
						array('_id' => new MongoDB\BSON\ObjectID($id)),
						array('$set' => $agendamento)
					);
		

		header("Location: agendamentos.php?id=$user");
	}
} 
?>
<?php

$id = $_GET['id'];


$result = $db->agendamentos->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

$barbeiro = $result['barbeiro'];
$data = $result['data'];
$hora = $result['hora'];
$servico = $result['servico'];
$user = $result['fk_user'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="agendamentos.php">Home</a>
	<br/><br/>
	
    <form action="edit_agendamento.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Barbeiro</td>
				<td>
                    <select name="barbeiro" id="barbeiro">
                    <?php
                        if($barbeiro == "Eduardo"){
                            echo "<option>Open this select menu</option>";
                            echo "<option selected value=\"Eduardo\">Eduardo</option>";
                            echo "<option value=\"Joao\">João</option>";
                                
                        }elseif($barbeiro == "Joao"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"Eduardo\">Eduardo</option>";
                            echo "<option selected value=\"Joao\">João</option>";
                                    
                        }
                    ?>     
                    </select>
                </td>
			</tr>
			<tr> 
				<td>Data</td>
				<td><input name="data" id="data" class="form-control" type="date" value="<?php echo $data;?>"/></td>
			</tr>
            <tr> 
				<td>Horário</td>
				<td>
                    <select name="hora" id="hora">
                    <?php
                        if($hora == "08:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option selected value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "08:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option selected value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "09:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option selected value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "09:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option selected value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "10:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option selected value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "10:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option selected value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "11:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option selected value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "11:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option selected value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "12:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option selected value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "12:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option selected value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "13:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option selected value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "13:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option selected value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "14:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option selected value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "14:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option selected value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "15:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option selected value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "15:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option selected value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "16:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option selected value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "16:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option selected value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "17:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option selected value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "17:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option selected value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";    
                        }elseif($hora == "18:00:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option selected value=\"18:00:00\">18:00</option>";
                            echo "<option value=\"18:30:00\">18:30</option>";
                        }elseif($hora == "18:30:00"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"08:00:00\">08:00</option>";
                            echo "<option value=\"08:30:00\">08:30</option>";
                            echo "<option value=\"09:00:00\">09:00</option>";
                            echo "<option value=\"09:30:00\">09:30</option>";
                            echo "<option value=\"10:00:00\">10:00</option>";
                            echo "<option value=\"10:30:00\">10:30</option>";
                            echo "<option value=\"11:00:00\">11:00</option>";
                            echo "<option value=\"11:30:00\">11:30</option>";
                            echo "<option value=\"12:00:00\">12:00</option>";
                            echo "<option value=\"12:30:00\">12:30</option>";
                            echo "<option value=\"13:00:00\">13:00</option>";
                            echo "<option value=\"13:30:00\">13:30</option>";
                            echo "<option value=\"14:00:00\">14:00</option>";
                            echo "<option value=\"14:30:00\">14:30</option>";
                            echo "<option value=\"15:00:00\">15:00</option>";
                            echo "<option value=\"15:30:00\">15:30</option>";
                            echo "<option value=\"16:00:00\">16:00</option>";
                            echo "<option value=\"16:30:00\">16:30</option>";
                            echo "<option value=\"17:00:00\">17:00</option>";
                            echo "<option value=\"17:30:00\">17:30</option>";
                            echo "<option value=\"18:00:00\">18:00</option>";
                            echo "<option selected value=\"18:30:00\">18:30</option>";    
                        }
                    ?>
                    </select>
                </td>
			</tr>
			<tr> 
				<td>servico</td>
				<td>
                    <select name="servico" id="servico">
                    <?php
                        if($servico == "barba"){
                            echo "<option>Open this select menu</option>";
                            echo "<option selected value=\"barba\">Barba</option>";
                            echo "<option value=\"corte\">Corte</option>";
                                
                        }elseif($servico == "corte"){
                            echo "<option>Open this select menu</option>";
                            echo "<option value=\"barba\">Barba</option>";
                            echo "<option selected value=\"corte\">Corte</option>";
                                    
                        }
                    ?>      
                    </select>
                </td>
			</tr>
			<tr> 
				<td></td>
                <td><input type="hidden" name="user" value=<?php echo $user;?>></td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>