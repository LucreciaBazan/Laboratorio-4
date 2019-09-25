<?php 
namespace Process;

if($_GET){
	$time = time();
    $fecha = date("Y-m-d", $time);

    // Version js//
/*
	if($_GET['fecha'] < $fecha){
		header("location: ../bill-content.php");
	}else{
		echo "<script> if(confirm('La fecha ingresada pertecenece al futuro. Vuelva a realizar la carga.'));";
		echo "window.location = '../add-bill.php';
		</script>";
	}
    }else{
	echo "<script> if(confirm('Error en el método de envio de datos'));";
		echo "window.location = '../add-bill.php';
		</script>";
    }
    */

    // versión PHP//
   
        if($_GET['fecha'] < $fecha){
            echo "Hola";
            header("location: ../bill-content.php");

        }else{
            echo "<h3> Fecha incorrecta. Vuelva a ingresar <br> </h3>
            <form action= '../add-bill.php' method='POST' class='login-form bg-dark-alpha p-5 text-white'>
            <button class='btn btn-dark btn-block btn-lg' type='submit'> Volver </button>
            </form>";
        }
        }else{
            echo "<h3> Error en el metodo de envio de datos <br> </h3>
            <form action= '../add-bill.php' method='POST' class='login-form bg-dark-alpha p-5 text-white'>
            <button class='btn btn-dark btn-block btn-lg' type='submit'> Volver </button>
            </form>";
        }

 ?>