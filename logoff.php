<?php 

	session_start();

	/*
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	//remover indeces do array de sessão
	//unset()

	unset($_SESSION['x']); // para remover o indece apenas se existir
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//destruir a variavel de sessão
	// session_destroy()

	session_destroy(); // será destruida
	//forçar um direcionamento
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	*/

	session_destroy();
	header('Location: index.php');


 ?>