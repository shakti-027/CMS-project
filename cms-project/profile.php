
<!DOCTYPE html>
<html lang="en">
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
<head>
  <title>Profile section</title>
  <style>
    .profile-img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      margin-top: -65px;
    }
  </style>
</head>
<body class="bg-light">
<?php include 'include/nav_user.php' ?>
<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <div class="text-center">
      <img src="https://source.unsplash.com/130x130/?person" alt="Profile" class="profile-img shadow">
      <h2 class="mt-3"></h2>
      <p class="text-muted"></p>
      <a href="edit_profile.php" class="btn btn-outline-primary btn-sm">Edit Profile</a>
    </div>

    <hr>

    <div class="row mt-4">
      <div class="col-md-6">
        <p><strong>Email:</strong> </p>
        <p><strong>Mobile:</strong> </p>
      </div>
      <div class="col-md-6">
        <p><strong>City:</strong></p>
        <p><strong>State:</strong></p>
      </div>
    </div>

    <hr>

    <h5 class="mb-3">📝 Your Posts</h5>
      <ul class="list-group">
       
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <strong></strong>
              <small class="d-block text-muted">Posted on </small>
            </div>
            <a href="post.php" class="btn btn-sm btn-secondary">View</a>
          </li>
      </ul>
      <p class="text-muted">You haven't posted anything yet.</p>
  </div>
</div>
<?php include 'include/foot.php';?>
</body>
</html>
