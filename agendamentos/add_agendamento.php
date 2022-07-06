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
	$agendamento = array (
				'barbeiro' => $_POST['barbeiro'],
				'data' => $_POST['data'],
				'hora' => $_POST['hora'],
                'servico' => $_POST['servico'],
				'fk_user' => $_POST['id']
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
		$id = $_POST['id'];
		$db->agendamentos->insertOne($agendamento);
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='agendamentos.php?id=$id'>View Result</a>";
	}
}
?>
</body>
</html>
