<?php
namespace Process;


    require_once("Model/English.php");
    require_once("Model/Spanish.php");
    require_once("Model/Portugues.php");
    
    use Model\English as English;
    use Model\Spanish as Spanish;
    use Model\Portugues as Portugues;

    if($_POST){

        if(isset($_POST["language"]) && isset($_POST["optionGreet"])){
            $greet = null;
            $language = $_POST["language"];
            $optionGreet = $_POST["optionGreet"];

            if($language == "english"){
                $greet = new English();
            }elseif($language == "spanish"){
                $greet = new Spanish();
            }else{
                $greet = new Portugues();
            }

            if($optionGreet == "other"){
                $message = isset($_POST["message"]) ? $_POST["message"] : "Ops, olvidaste escribir el mensaje!";

                call_user_func(array($greet, $optionGreet), $message);
            }
            else{
                call_user_func(array($greet, $optionGreet));
            }
        }
        else{
            echo "<script> if(confirm('No se ha seleccionado el lenguage y/o el mensaje, volve a intentarlo!'));";  
            echo "window.location = 'index.php'; </script>";
        }
    }    
?>