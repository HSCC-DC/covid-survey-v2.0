<?php
    //define variables and set to empty values
    $vaccineError= $contactError = $firstNameError= $lastNameError = "";

    //check to see if submit button was clicked
    if(isset($_POST["submit"]))
    {
        //start validation for vaccine text box - question 3
        if(!isset($_POST["covidQuestion3"]))
        {
            $vaccineError="Vaccine name is required. Please try again.";
        }

        //start validation for question 1
        if(!isset($_POST["covidQuestion1"]))
        {
            $contactError = "Question 1 is required. Please try again.";
        }

        //start validation for first name
        $fname=trim($_POST["firstName"]);
        $fname=stripslashes($fname);

        if(empty($fname))
        {
          $firstNameError="Please enter a first name.";
        }

        //starts validation for last name
        $lname=trim($_POST["lastName"]);
        $lname=stripslashes($lname);

        if(empty($lname))
        {
          $lastNameError="Please enter last name.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <form method="POST">
    <div class="">
      <h1>COVID-19 Survey</h1>
    </div>
    <?php
    //Where we display errors on user page
        if(!empty($vaccineError))
        {

          
            echo "<div class='alert alert-danger' role='alert'>" . $vaccineError . "</div>";
        }
        if(!empty($contactError))
        {
            echo "<div class='alert alert-danger' role='alert'>" . $contactError . "</div>"; 
        }
        if(!empty($firstNameError))
        {
            echo "<p style='color:red'>" . $firstNameError . "</p>"; 
        }
        if(!empty($lastNameError))
        {
            echo "<p style='color:red'>" . $lastNameError . "</p>"; 
        }
    ?>
    <div class="mb-3">
      <label for="firstName" class="form-label">First Name:</label>
      <input type="text" class="" id="firstName" name="firstName">
    </div>
    <div class="mb-3">
    <label for="lastName" class="form-label">Last Name:</label>
      <input type="text" class="" id="lastName" name="lastName">
    </div>
    <div class="mb-3">
      <label for="covidQuestion1" class="form-label">Have you been in contact with someone who has COVID in the last 14 days?</label>
      <input type="radio" class="" id="covidQuestion1" name="covidQuestion1" value="yes"> Yes
      <input type="radio" class="" id="covidQuestion1" name="covidQuestion1" value="no"> No
      <input type="radio" class="" id="covidQuestion1" name="covidQuestion1" value="no"> I'm not sure
    </div>
    <div class="mb-3">
      <label for="covidQuestion2" class="form-label">Have you gotten the COVID vaccine?</label><br>
      <input type="radio" class="" id="covidQuestion2" name="covidQuestion2" value="yes"> Yes<br>
      <input type="radio" class="" id="covidQuestion2" name="covidQuestion2" value="no"> No
    </div>
    <div class="mb-3">
      <label for="covidQuestion3" class="form-label">If yes, which COVID-19 vaccine did you recieve?</label><br>
      <!--<input type="text" class="" id="covidQuestion2" name="covidQuestion3">-->
      <input type="radio" class="" id="covidQuestion3" name="covidQuestion3"> Pfizer (2 doses)<br>
      <input type="radio" class="" id="covidQuestion3" name="covidQuestion3"> Moderna (2 doses)<br>
      <input type="radio" class="" id="covidQuestion3" name="covidQuestion3"> Johnson & Johnson (1 dose)
    </div>
    <div class="mb-3">
      <label for="covidQuestion4" class="form-label">Have you felt any of the following after recieving the vaccine?</label><br>
      <p>On the arm...</p>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="pain">
      <label class="form-check-label" for="sideEffects">Pain</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="redness">
      <label class="form-check-label" for="sideEffects">Redness</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="swelling">
      <label class="form-check-label" for="sideEffects">Swelling</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="none">
      <label class="form-check-label" for="sideEffects">None of the above</label><br><br>
      <p>Throughout the rest of your body...</p>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="tiredness">
      <label class="form-check-label" for="sideEffects">Tiredness</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="chills">
      <label class="form-check-label" for="sideEffects">Chills</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="headache">
      <label class="form-check-label" for="sideEffects">Headache</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="fever">
      <label class="form-check-label" for="sideEffects">Fever</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="muscle">
      <label class="form-check-label" for="sideEffects">Muscle pain</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sideEffects" value="nausea">
      <label class="form-check-label" for="sideEffects">Nausea</label><br>
    </div>
    <div class="mb-3">
      <p>Please check off any symptoms you've had in the past 14 days: </p>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="nose">
      <label class="form-check-label" for="symptoms">Congestion or runny nose</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="headache">
      <label class="form-check-label" for="symptoms">Headache</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="throat">
      <label class="form-check-label" for="symptoms">Sore throat</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="smell/taste">
      <label class="form-check-label" for="symptoms">New loss of smell/taste</label><br>

      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="cough">
      <label class="form-check-label" for="symptoms">Cough</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="breathing">
      <label class="form-check-label" for="symptoms">Shortness of breath and/or difficulty breathing</label><br>

      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="fever/chills">
      <label class="form-check-label" for="symptoms">Fever or chills</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="muscle">
      <label class="form-check-label" for="symptoms">Muscle pain</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="fatigue">
      <label class="form-check-label" for="symptoms">Fatigue</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="nausea/vomit">
      <label class="form-check-label" for="symptoms">Nausea or vomiting</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="diarrhea">
      <label class="form-check-label" for="symptoms">Diarrhea</label>
    </div>
    <!--IMPORTANT- FOR PHP PLEASE ADD A NAME TO YOUR SUBMIT BUTTON-->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>