<?php
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
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("../config.php");

if(isset($_POST['Submit'])) {
	$avaliacao = array (
				'nota' => $_POST['nota'],
				'descricao' => $_POST['descricao'],
				'fk_agendamento' => $_POST['id'],
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

        
		$result = $db->agendamentos->findOne(array('_id' => new MongoDB\BSON\ObjectID($_POST['id'])));
        $id = $result['fk_user'];
		$db->avaliacoes->insertOne($avaliacao);
		
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='../agendamentos/agendamentos.php?id=$id'>View Result</a>";
	}
}
?>
</body>
</html>
