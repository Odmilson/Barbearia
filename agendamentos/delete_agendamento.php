<?php
include("../config.php");

require_once '../login/library.php';
if(chkLogin()){

}else{
    header("Location: ../login/login.php");
}

$id = $_GET['id'];
$user = $db->agendamentos->findOne(array('_id' => new MongoDB\BSON\ObjectID($_GET['id'])));

$db->agendamentos->deleteOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

header("Location:agendamentos.php?id=$user[fk_user]");
?>