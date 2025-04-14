<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />
    <script
      src="https://kit.fontawesome.com/23697861ec.js"
      crossorigin="anonymous"
    ></script>
    <title>Home page</title>
    <style>
        header{
            background: linear-gradient(45deg, #0d6efd, #6610f2);
        }
    </style>
</head>
<body>
    <?php include 'include/nav_user.php' ?>
    

    <header class=" text-white text-center py-5">
        <h1>Welcome to Your CMS Name</h1>
        <p>Empowering Your Content Journey</p>
    </header>
    
    <main class="container my-5">
        <section class="intro mb-4 ">
            <h2>Simplify Your Content Management</h2>
            <p class="text-center">We believe that managing your content should be as seamless as creating it. Our powerful content management system is designed to help you effortlessly organize, publish, and optimize your digital content.</p>
        </section>

        <section class="features my-4 ">
            <h2 class="text-center mb-4">Why Choose Your CMS Name?</h2>
            <ul class="list-group col-md-9">
                <li class="list-group-item"><strong>User-Friendly Interface:</strong> Navigate and manage your content without any technical expertise.</li>
                <li class="list-group-item"><strong>Customizable Templates:</strong> Create stunning web pages that reflect your brand’s identity.</li>
                <li class="list-group-item"><strong>SEO Optimization:</strong> Built-in tools to help your audience find you easily.</li>
                <li class="list-group-item"><strong>Robust Analytics:</strong> Gain insights into your content performance.</li>
                <li class="list-group-item"><strong>Collaboration Made Easy:</strong> Work together with your team in real-time.</li>
            </ul>
        </section>

        <section class="cta text-center">
            <h2>Get Started Today!</h2>
            <p>Join thousands of satisfied users who have transformed their content management experience. Sign up for a free trial today!</p>
            <a href="register.php" class="btn btn-primary btn-lg">Sign Up Now</a>
        </section>
    </main>
    <?php include 'include/foot.php' ?>
</body>
</html>

