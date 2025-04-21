<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location:admin/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #0062cc, #1e88e5);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-header h1 {
            color: #0d47a1;
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 2px solid #e3f2fd;
            padding: 1rem 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #1e88e5;
            box-shadow: 0 0 0 0.2rem rgba(30, 136, 229, 0.15);
        }

        .btn-login {
            width: 100%;
            padding: 1rem;
            font-size: 1.1rem;
            font-weight: 500;
            background: #1e88e5;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #0d47a1;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .error-message {
            color: #f44336;
            text-align: center;
            padding: 1rem;
            margin-top: 1rem;
            background: rgba(244, 67, 54, 0.1);
            border-radius: 10px;
            font-size: 0.95rem;
        }

        .welcome-text {
            color: #546e7a;
            font-size: 1.1rem;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'include/nav_user.php' ?>
    <div class="container my-auto py-5">
        <div class="login-container">
            <div class="login-header">

                <p class="welcome-text">Sign in to your account</p>
            </div>

            <form name="loginform" onsubmit="return validationLogin()" action="login.php" method="post">
                <!-- username -->
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username"><i class="fas fa-user me-2"></i>Username</label>
                </div>

                <!-- password -->
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                </div>

                <button type="submit" class="btn btn-primary btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                </button>


                <?php if (isset($_GET['error'])) { ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle me-2"></i>Invalid username or password
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>

    <?php include 'include/foot.php'; ?>

    <script type="text/javascript">
        function validationLogin() {
            const usernameRegex = /^[a-zA-Z0-9_]+$/;

            // input values
            const usernameInput = document.getElementById('username');
            const passwordInput = document.getElementById('password');


            const username = usernameInput.value;
            const passwords = passwordInput.value;


            // Trimmed values for comparison
            const trimusername = username.trim();
            const trimpassword = passwords.trim();

            // empty field not acceptable
            if (username === '') {
                alert('Please enter your username');
                return false;
            }
            // Check for leading or trailing whitespace
            if (username !== trimusername) {
                alert("Username cannot have leading or trailing whitespace.");
                return false; // Prevent form submission
            }
            // Validate username format
            if (!usernameRegex.test(username)) {
                alert("Username can only contain letters, numbers, and underscores.");
                return false;
            }

                //  empty password not acceptable
                if (passwords === '') {
                    alert('Please enter your password');
                    return false;
                }
                if (passwords !== trimpassword) {
                alert(" password cannot have leading or trailing whitespace.");
                return false;
            }
                // atleast contain 6 character in password
                if (passwords.length < 6) {
                    alert("Enter 6 character password")
                    return false;
                }
            
           
            return true;
        }
    </script>
</body>

</html>
