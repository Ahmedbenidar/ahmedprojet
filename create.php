<?php
 $errorMsg="";
 $fnameValue = "";
    
 $lnameValue = "";
 
 $emailValue = "";

 $successMsg ="";

 include ("connection.php");
 $connection=new Connection();
 include ("client.php");
 $connection->selectDatabase("phph");

if(isset($_POST['submit'])){

    $fnameValue = $_POST['firstName'];
    
    $lnameValue = $_POST['lastName'];
    
    $emailValue = $_POST['email'];
    
    $passValue = $_POST['password'];

    $idCityValue = $_POST['cities'];
    $idfiliereValue = $_POST['filiere'];

    if(empty($fnameValue) ||empty($lnameValue) ||empty($emailValue) ||empty($passValue)){

    $errorMsg = "all fields must be filled in";

    }else if(strlen($passValue)<8){
        $errorMsg = "password must contains at least 8 char";

    }else if(preg_match('/[A-Z]+/',$passValue)==0){
        $errorMsg = "password must contains at least one capital letter";

    }else{


        $client= new Client($fnameValue,$lnameValue,$emailValue,$passValue,$idCityValue,$idfiliereValue);
        $client->insertClient("clients",$connection->conn);
        $errorMsg=Client::$errorMsg;
        $successMsg=Client::$successMsg;
    }


}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Global Styles */
        body {
            background-color: #f4f7fa; /* Fond clair */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Container Styling */
        .container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #343a40;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 12px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #6c757d;
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        }

        .btn-primary {
            background-color: #007bff; /* Bleu professionnel */
            border-color: #007bff;
            font-size: 16px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Bleu foncé au survol */
            border-color: #0056b3;
        }

        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
            font-size: 16px;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .alert {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-link a {
            color: #007bff;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }

        /* Custom Styles for form labels */
        .form-label {
            font-weight: 600;
            color: #495057;
        }

        .form-row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Sign Up</h2>

        <!-- Display Error Message if exists -->
        <?php
        if (!empty($errorMsg)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMsg</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>

        <!-- Sign Up Form -->
        <form method="post">
            <div class="form-row mb-3">
                <label class="form-label" for="fname">First Name:</label>
                <div class="col-sm-12">
                    <input value="<?php echo $fnameValue; ?>" class="form-control" type="text" id="fname" name="firstName" required>
                </div>
            </div>

            <div class="form-row mb-3">
                <label class="form-label" for="lname">Last Name:</label>
                <div class="col-sm-12">
                    <input value="<?php echo $lnameValue; ?>" class="form-control" type="text" id="lname" name="lastName" required>
                </div>
            </div>

            <div class="form-row mb-3">
                <label class="form-label" for="email">Email:</label>
                <div class="col-sm-12">
                    <input value="<?php echo $emailValue; ?>" class="form-control" type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="form-row mb-3">
                <label class="form-label" for="cities">City:</label>
                <div class="col-sm-12">
                    <select name="cities" class="form-select" required>
                        <option selected>Select your city</option>
                        <?php
                        include("city.php");
                        $cities = City::selectAllCities('Cities', $connection->conn);
                        foreach ($cities as $city) {
                            echo "<option value='$city[id]'>$city[cityName]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-row mb-3">
                <label class="form-label" for="filiere">filiere:</label>
                <div class="col-sm-12">
                    <select name="filiere" class="form-select" required>
                        <option selected>Select your filiere</option>
                        <?php
                        include("filiere.php");
                        $cities = filiere::selectAllCities('filiere', $connection->conn);
                        foreach ($filiere as $filiere) {
                            echo "<option value='$filiere[id]'>$filiere[filiere]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-row mb-3">
                <label class="form-label" for="password">Password:</label>
                <div class="col-sm-12">
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
            </div>

            <!-- Display Success Message if exists -->
            <?php
            if (!empty($successMsg)) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMsg</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
            ?>

            <!-- Submit Button and Login Link -->
            <div class="form-row mb-3">
                <div class="col-sm-12 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>

            <div class="footer-link">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>

</body>
</html>
