<?php 
include("confs.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

.login {
  max-width: 280px;
  background-color: #ffffff;
  border-radius: 5px;
}
.hader {
  text-align: center;
  font-size: 22px;
  font-weight: 700;
}
.hader p {
  text-align: center;
  font-size: 18px;
  font-weight: 400;
  color: #706b6b;
}
form {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-top: 20px;
}
form input {
  height: 40px;
  outline: none;
  border: 1px solid #cccccc;
  padding: 10px;
  font-size: 15px;
  border-radius: 8px;
}
form input[type="button"] {
  background-color: rgba(17, 17, 226, 0.562);
  color: #ffffff;
  font-size: 17px;
}
form span {
  text-align: center;
  font-size: 16px;
  padding-top: 10px;
  color: #706b6b;
}
form span a {
  text-decoration: none;
  color: rgba(36, 36, 207, 0.671);
  font-weight: 500;
}
.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
  cursor: pointer;
}

    </style>

 
<div class="login">
  <div class="hader">
    <span>Join us today!</span>
    <p>Sing up now to become a member.</p>
  </div>
  <form action="#" method="post">
    <input type="text" placeholder="Enter Name" required="" />
    <input  type="email" placeholder="Enter Emaill" required="" />
    <span style='color:red'> <?php echo $emailErrorMesg ?> </span>
    <input type="password" placeholder="Choose A Password" required="" />
    <input type="password" placeholder="Re-Enter Password" required="" />
    <button class="submit">Submit </button>
    <span> Already a member? <a href="login.php">Login Here</a></span>
  </form>
</div>

</body>
</html>