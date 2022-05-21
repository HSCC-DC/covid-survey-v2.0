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
  <form>
    <div class="">
      <h1>COVID-19 Survey</h1>
    </div>
    <div class="mb-3">
      <label for="covidQuestion1" class="form-label">Have you been in contact with someone who has COVID in the last 14 days?</label>
      <input type="radio" class="" id="covidQuestion1" name="covidQuestion1" value="yes"> Yes
      <input type="radio" class="" id="covidQuestion1" name="covidQuestion1" value="no"> No
    </div>
    <div class="mb-3">
      <label for="covidQuestion2" class="form-label">Have you gotten the COVID vaccine?</label>
      <input type="radio" class="" id="covidQuestion2" name="covidQuestion2" value="yes"> Yes
      <input type="radio" class="" id="covidQuestion2" name="covidQuestion2" value="no"> No
    </div>
    <div class="mb-3">
      <label for="covidQuestion3" class="form-label">Which COVID-19 vaccine did you recieve?</label>
      <input type="text" class="" id="covidQuestion2" name="covidQuestion3">
    </div>
    <div class="mb-3">
      <p>Please check off any symptoms you've had in the past 14 days: </p>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="fever">
      <label class="form-check-label" for="symptoms">Fever</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="taste">
      <label class="form-check-label" for="symptoms">Loss of taste</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="breath">
      <label class="form-check-label" for="symptoms">Shortness of breath</label><br>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symptoms" value="cough">
      <label class="form-check-label" for="symptoms">Cough</label><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>