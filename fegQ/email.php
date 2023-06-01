<?php
	$name= $_POST['name'];
	$email= $_POST['email'];
	$comments= $_POST['comments'];
	
	echo $name;
	
	if(mail('e-morado@fegq.com.mx', $email, $comments)){
		echo "enviado";
	}else{
			echo "error";
	}
?>