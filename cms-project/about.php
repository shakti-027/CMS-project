<?php include 'include/nav_user.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <title>About || Announcements</title>
  <style>
    .announcement-card {
      transition: 0.3s ease-in-out;
    }

    .announcement-card:hover {
      transform: translateY(-5px);
    }

    .header-bg {
      background: linear-gradient(45deg, #0d6efd, #6610f2);
      color: white;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <section class="py-5 header-bg text-center">
    <div class="container">
      <h1 class="display-5">Latest Announcements</h1>
      <p class="lead">Stay updated with the newest updates, features, and changes.</p>
    </div>
  </section>

  <!-- Announcements -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">

        <!-- Announcement 1 -->
        <div class="col-md-6">
          <div class="card announcement-card shadow-sm rounded-4">
            <div class="card-body">
              <h5 class="card-title">🎉 New Feature Released <span class="badge bg-success">New</span></h5>
              <p class="card-text">We’ve added dark mode support for better night-time reading. Try it out in your settings!</p>
              <p class="text-muted small">Posted on April 10, 2025</p>
            </div>
          </div>
        </div>

        <!-- Announcement 2 -->
        <div class="col-md-6">
          <div class="card announcement-card shadow-sm rounded-4">
            <div class="card-body">
              <h5 class="card-title">🚨 Scheduled Maintenance <span class="badge bg-warning text-dark">Important</span></h5>
              <p class="card-text">Our servers will be undergoing maintenance on April 15th, 2025 from 12:00 AM to 4:00 AM IST.</p>
              <p class="text-muted small">Posted on April 9, 2025</p>
            </div>
          </div>
        </div>

        <!-- Announcement 3 -->
        <div class="col-md-6">
          <div class="card announcement-card shadow-sm rounded-4">
            <div class="card-body">
              <h5 class="card-title">✍️ Blog Submission Guidelines Updated</h5>
              <p class="card-text">We’ve made changes to how guest posts are submitted. Please review the updated guidelines.</p>
              <p class="text-muted small">Posted on April 5, 2025</p>
            </div>
          </div>
        </div>

        <!-- You can add more announcements here -->

      </div>
    </div>
  </section>
  <?php include  'include/foot.php'; ?>

</body>

</html>
