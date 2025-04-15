<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <?php include 'include/nav_user.php' ?>
  <div class="text-center text-danger" id="box" style="display: none;">form submitted successfully. Now You can <a href="sign-in.php">login </a></div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">User Registration</h4>
          </div>
          <div class="card-body">
            <form action="register.php" method="POST" onsubmit="return validate()">
              <!-- username -->
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="username">
                <p id="userempty" class="text-danger"></p>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="email">
                <p id="emptyemail" class="text-danger"></p>

              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <p id="emptypassword" class="text-danger"></p>
              </div>

              <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                <p id="confpassword" class="text-danger"></p>
              </div>

              <div class="d-grid">
                <button type="submit" name="register" class="btn btn-success">Register</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <small>Already have an account? <a href="sign-in.php">Login here</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'include/foot.php' ?>
  <script>
    function validate() {
      // pattern for username and mail validation
      const usernameRegex = /^[a-zA-Z0-9_]+$/;
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      // input values
      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confpassword = document.getElementById('confirm_password').value;

      // Trimmed values for comparison
      const trimusername = username.trim();
      const trimpassword = password.trim();

      //Username validation 
      if (username === '') {
        document.getElementById('userempty').innerHTML = 'Please enter your username';
        return false;
      }
      else{
        document.getElementById('userempty').innerHTML = '';

      }
      // Check for leading or trailing whitespace
      if (username !== trimusername) {
        alert('Username cannot have leading or trailing whitespace');
        return false; // Prevent form submission
      }
       //Validate username format
       if (!usernameRegex.test(username)) {
        alert("Username can only contain letters, numbers, and underscores.");
        return false;
      }

         // email validation
      if (email === '') {
        document.getElementById('emptyemail').innerHTML = 'Please enter your email';
        return false;
      }
      else{
        document.getElementById('emptyemail').innerHTML = '';
      }

      if (!emailRegex.test(email)) {
        alert("Enter a valid email address.");
        return false;
      }

      // Password validation
      if (password === '') {
        document.getElementById('emptypassword').innerHTML = 'Please enter your Password';
        return false;
      }
      else{
        document.getElementById('emptypassword').innerHTML = '';

      }

       // Check for leading or trailing whitespace
       if (password !== trimpassword) {
        alert ('Password cannot have leading or trailing whitespace');
        return false;
      }

       // atleast contain 6 character in password
       if (password.length < 6) {
        alert("Password should contain atleast 6 character");
      }
      if(confpassword ===''){
        alert("Confirm password can not be blank")
      }
      // both password should match
      if (password !== confpassword) {
        document.getElementById('confpassword').innerHTML = "confirm password does not matched, enter correct password";
        return false;
      }
      else{
        document.getElementById('confpassword').innerHTML = "";

      }
 
      alert("form submitted successfully")
      return true;
    }
  </script>

</body>
</html>
