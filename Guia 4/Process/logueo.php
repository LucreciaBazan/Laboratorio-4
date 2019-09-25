<?php 
namespace Process;

    include_once dirname(__DIR__).'/header.php';
/*
// Versión con js //
if($_POST){
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	if($userName == 'Cosme Fulanito'){
		if($password == 'strongPassword'){
	
			
			header("location:../add-bill.php");
	
		}else{
			echo "<script> if(confirm('Verifique que la contraseña sea correcta'));";
			echo "window.location = '../index.php';
			</script>";
		}
	 
	}else{
		echo "<script> if(confirm('Verifique que el nombre de usuario sea correcto'));";
		echo "window.location = '../index.php';
		</script>";
	}
}else{
	echo "<script> if(confirm('Error en el método de envio de datos'));";
		echo "window.location = '../index.php';
		</script>";
}
*/

// Versión con solo PHP//

if($_POST){
	$userName = $_POST['userName'];
    $password = $_POST['userPassword'];
    
	if($userName == 'Cosme Fulanito'){
		if($password == 'strongPassword!'){
	
			
			header("location:../add-bill.php");
	
		}else{
            echo "<h3> Verifique que la contraseña sea correcta <br> </h3>
            <form action= '../index.php' method='POST' class='login-form bg-dark-alpha p-5 text-white'>
            <button class='btn btn-dark btn-block btn-lg' type='submit'> Volver </button>
            </form>";
		}
	 
	}else{
        echo "<h3> Verifique que el nombre de usuario sea correcto <br>  </h3>
        <form action= '../index.php' method='POST' class='login-form bg-dark-alpha p-5 text-white'>
        <button class='btn btn-dark btn-block btn-lg' type='submit'> Volver </button>
        </form>";
	}
}else{
    echo "<h3> Error en el método de envio de datos <br> </h3>
    <form action= '../index.php' method='POST' class='login-form bg-dark-alpha p-5 text-white'>
    <button class='btn btn-dark btn-block btn-lg' type='submit'> Volver </button>
    </form>";
}

	
?>