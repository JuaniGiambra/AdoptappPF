<?php 
	if(isset($_POST['submit'])) {
		$nombre=$_POST['name'];
		$correo=$_POST['email'];
		$numero=$_POST['phone'];
		$texto=$_POST['msg'];
		$asunto=$_POST['asunto'];

		$to='adoptappcm@gmail.com';
		$subject= $asunto;
		$message="Nombre: ".$nombre."\n"."Numero: ".$numero."\n"."Necesita ayuda con lo siguiente: "."\n\n".$texto;
		$headers="De: ".$correo;
	}

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>Tu mensaje se a enviado correctamente! gracias"." ".$nombre.", te vamos a responer los mas rapido posible!</h1>";
	} else {
		echo "Algo esta mal...";
	}
?>