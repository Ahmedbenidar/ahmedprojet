<?php 

$emailErrorMesg = "";
$passwordErrorMesg = "";

if(isset($_POST["submit"])){

$emailValue = $_POST["emailName"];
$passwordValue = $_POST["passName"];
 


if($emailValue ==""){

    $emailErrorMesg = "email must be filled out !";
}
else if (preg_match("/\w+(@emsi.ma){1}$/", $emailValue)==0){

    $emailErrorMesg = "please enter a valid emsi email";

} 
else if ($passwordValue==""){

    $passwordErrorMesg = "password must be filled out !";
}

else {
    session_start();
    $_SESSION["emailSession"] = $emailValue;
    $_SESSION["passSession"] =$passwordValue;

header("Location:login.php");

}


}




?>