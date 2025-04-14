<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Footer part</title>
    <style>
          footer{
        background-color: aliceblue;
      }
    
      footer ul li a{
        font-size: 1.1rem;
      }
      .help li i{
        font-size: 1.1rem;
        margin: 4px;
      }
      .icon li a i{
        font-size: 1.4rem;
        margin: 4px;
        filter: drop-shadow(0 0 3px plum);
        color: red;
      }

    </style>
  </head>
  <body>
    <footer class="py-3 mt-4 text-center">
      <ul class="nav justify-content-center  pb-3 mb-3">
      <li class="nav-item">
          <a href="index.php" class="nav-link px-2 text-dark">Home</a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link px-2 text-dark">About</a>
        </li>
        <li class="nav-item">
          <a href="policies.php" class="nav-link px-2 text-dark">Policies</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link px-2 text-dark">Contact</a>
        </li>
        <li class="nav-item">
          <a href="faq.php" class="nav-link px-2 text-dark">FAQs</a>
        </li>
      </ul>

      <ul class="list-unstyled border-bottom help">
        <li><i class="fa-solid fa-building"></i>Nainpur, Madhya Pradesh(481776)</li>
        <li><i class="fa-solid fa-phone"></i> +91 3465643897</li>
        <li><i class="fa-solid fa-envelope"></i><a href="mailto: cms@tech.com" class="text-dark">support@thinkboa.in</a></li>
      </ul>

      <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div class="col-md-4 d-flex align-items-center">
          <span class="text-dark copyright text-center">All rights all reserved by Thinkboa</span>
        </div>
        <!-- icons -->
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex icon">
          <li class="ms-3">
            <a class="text-muted" href="#">
              <i class="fa-brands fa-instagram"></i
            ></a>
          </li>
          <li class="ms-3">
            <a class="text-muted" href="#">
              <i class="fa-brands fa-facebook"></i
            ></a>
          </li>
          <li class="ms-3">
            <a class="text-muted" href="#">
              <i class="fa-brands fa-whatsapp"></i
            ></a>
          </li>
        </ul>
      </div>
    </footer>
  </body>
</html>
