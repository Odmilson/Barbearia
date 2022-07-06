
<?php
    try{
        require_once '../../../vendor/autoload.php';

        $db = (new MongoDB\Client)->barbearia;

        $collection = $db->userdata;
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
?>
