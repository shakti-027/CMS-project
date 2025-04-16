<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_cms"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
  die("connectiion failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO employee(name, password) VALUES ('$name', '$password')";
  mysqli_query($conn, $sql);
}

// for data fetch
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="text-center"> User login page</h1>
      </div>
      <div class="col-sm-6">
        <form action="login.php" method="post" class="p-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html><?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_cms"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
  die("connectiion failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO employee(name, password) VALUES ('$name', '$password')";
  mysqli_query($conn, $sql);
}

// for data fetch
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="text-center"> User login page</h1>
      </div>
      <div class="col-sm-6">
        <form action="login.php" method="post" class="p-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html><?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_cms"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
  die("connectiion failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO employee(name, password) VALUES ('$name', '$password')";
  mysqli_query($conn, $sql);
}

// for data fetch
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="text-center"> User login page</h1>
      </div>
      <div class="col-sm-6">
        <form action="login.php" method="post" class="p-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
