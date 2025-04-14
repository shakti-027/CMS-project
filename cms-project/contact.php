<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <script
    src="https://kit.fontawesome.com/23697861ec.js"
    crossorigin="anonymous"></script>

  <title>Document</title>
  <style>
    body {
      background-color: aliceblue;
    }

    .container {
      box-shadow: 0 0 10px black;
      border-radius: 6px;
    }

    label {
      font-weight: 600;
      font-size: 1.1rem;

    }

    input::placeholder {
      font-size: 1.1rem;
      font-weight: 500;
    }

    textarea::placeholder {
      font-size: 1.1rem;
      font-weight: 500;
    }
  </style>
</head>

<body>
  <?php include 'include/nav_user.php'; ?>

  <form action="contact.php" onsubmit="return contact_validate()">
    <div class="container border px-5 py-2 my-5 col-md-6">
      <h1 class="text-center">Write us</h1>
      <!-- name -->
      <div>
        <label for="username" class="form-label">Enter your name:</label>
        <input type="text" name="username" class="form-control mb-4 " placeholder="Your name" id="conname" />
        <p id="conuserempty" class="text-danger"></p>
      </div>

      <!-- email -->
      <div>
        <label for="email" class="form-label">Enter your mail i'd:</label>
        <input type="text" class="form-control mb-4" id="conemail" placeholder="Your e-mail" />
        <p id="conemptyemail" class="text-danger"></p>
      </div>
      <!-- contact no -->
      <div>
        <label for="contact" class="form-label">Enter your contact number:</label>
        <input type="text" class="form-control mb-4" id="contact" placeholder="Mobile no" />
        <p id="emptycontact" class="text-danger"></p>
      </div>

      <!-- text field -->
      <div>
        <label for="disc" class="form-label">Write your concern here:</label>
        <textarea class="form-control mb-4" id="textbox" rows="4" maxlength="250" cols="20"
          placeholder="write discription about your concern"></textarea>
        <p id="condisc" class="text-danger"></p>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
        <label class="form-check-label" for="form4Example4">
          Send me a copy of this message
        </label>
      </div>

      <!--button  -->
      <div class="mt-3 d-grid d-md-flex justify-content-md-end">
        <button class="btn btn-primary btn-block mb-4" type="submit">Submit</button>
      </div>
    </div>
  </form>

  <!-- footer -->
  <?php include 'include/foot.php'; ?>
  
  <script>
    function contact_validate() {
      // pattern for username and mail validation
      const userconRegex = /^[a-zA-Z0-9_]+$/;
      const emailconRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const cRegex = /^[6-9][0-9]{9}$/;

      // input values
      const conname = document.getElementById('conname').value;
      const conemail = document.getElementById('conemail').value;
      const contact = document.getElementById('contact').value;
      const textbox = document.getElementById('textbox').value


      // Trimmed values for comparison
      const trimconusername = conname.trim();
      const trimtextbox = textbox.trim();

      //Username validation 
      if (conname === '') {
        document.getElementById('conuserempty').innerHTML = 'Please enter your username';
        return false;
      }
      // Check for leading or trailing whitespace
      if (conname !== trimconusername) {
        alert('Username cannot have leading or trailing whitespace');
        return false; // Prevent form submission
      }
      //Validate username format
      if (!userconRegex.test(conname)) {
        alert("Username can only contain letters, numbers, and underscores.");
        return false;
      }

      // email validation
      if (conemail === '') {
        document.getElementById('conemptyemail').innerHTML = 'Please enter your email';
        return false;
      }


      if (!emailconRegex.test(conemail)) {
        alert("Enter a valid email address.");
        return false;
      }

      // contact validation
      if (contact === "") {
        document.getElementById('emptycontact').innerHTML = "Contact can not be blank";
        return false;
      }
      if (cRegex.test(contact)) {
        // alert("contact number is valid");  
      } else {
        alert(' contact number is invalid');
        return false;
      }

      // textarea validation
      if (textbox === '') {
        document.getElementById('condisc').innerHTML = "Discription can not be blank";
        return false;
      }

      alert("form submitted successfully")
      return true;
    }
  </script>
</body>

</html>
