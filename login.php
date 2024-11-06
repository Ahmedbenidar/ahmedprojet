<?php 
include("confs.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login2</title>
</head>
<body>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label> 
    
    <input value="<?php if (isset($emailValue)) echo $emailValue // pour concerver les information saisie f email  ?>" name='emailName' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <span style='color:red'> <?php echo $emailErrorMesg // bashe ytlea leena message dyale error b rouge tehte l'input pour mail  ?> </span>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name='passName' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span style='color:red'> <?php echo $passwordErrorMesg // bashe ytlea leena message dyale error b rouge tehte l'input pour l password ?> </span>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button  name='submit' type="submit" class="btn btn-primary">Submit </button>
</form>




</body>
</html>