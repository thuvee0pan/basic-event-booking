<?php
    session_start();

    require ("DB_conn.php");
    require ("auth.php");
    require ("event.php");

    $errors = array();
    function redirect_to ($location){
		header("Location: ". $location);
	}
?>