<?php
require("config/config.php");

		try{
			if(isset($_POST['Correo']) && !empty($_POST['Correo'])){
                $Constraseña = substr( md5(microtime()), 1, 10);
                $Correo = $_POST['Correo'];
                
               
                
                $sql = "UPDATE persona SET Correo='$Correo' WHERE Contraseña='$Contraseña'";

                if ($con->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $con->error;
                }
                
                $to = $_POST['Correo'];//"destinatario@email.com";
                $from = "From: " . "healthup98@gmail.com" ;
                $subject = "Recordar contraseña";
                $message = "El sistema le asigno la siguiente clave " . $Contraseña;

                mail($to,$subject,$message,$from);
                echo 'Correo enviado satisfactoriamente a ' . $_POST['Correo'];
            }
            else 
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}        
?>