
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
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
  <title>Blog</title>
  <style>
    .post {
      background: #ffffff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .post img {
      width: 100%;
      border-radius: 5px;
    }

    .post h2 {
      margin-top: 10px;
    }

    .write {
      color: #777;
      font-size: 0.9em;
    }

    .read-more {
      display: inline-block;
      margin-top: 10px;
      color: #35424a;
      text-decoration: none;
      font-weight: bold;
    }

    .read-more:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?php include 'include/nav_user.php' ?>

  <main class="p-5 container">
    <section class="blog-posts mb-5">
      <article class="post">
        <img src="Assets/blog1.jpg">
        <h2>First Blog Post</h2>
        <p class="write">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, optio nobis a deserunt corporis reprehenderit, laudantium quo accusantium, voluptatum illum labore officiis voluptate sequi voluptas. Sequi, sint libero..</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <article class="post">
        <img src="Assets/blog2.jpg">
        <h2>Second Blog Post</h2>
        <p class="write">By Jane Smith on October 5, 2023</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi earum ratione quis fuga, repudiandae officiis omnis ea quae voluptates..</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <article class="post">
        <img src="Assets/blog3.jpg">

        <h2>Second Blog Post</h2>
        <p class="write">By Jane Smith on October 5, 2023</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil enim obcaecati consectetur sapiente rem molestiae, quae, neque repellat dolorem illum!</p>
        <a href="#" class="read-more">Read More</a>
      </article>

    </section>

  </main>

  <!-- Footer -->
  <?php include 'include/foot.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
