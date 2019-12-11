<html>
<head>
  <title>SIGNIN</title>
  <?php
include 'links.php';
?>
</head>
<body>
  <div class="container-fluid text-center py-4" style="border-style: outset;
    border-width: 2px;">
  <a class="navbar-brand" href="index.php">Wellness SPA</a>
  </div>
  <div class="container py-3">
    <h3 class="text-center">Accedi</h3>
    <form action="index.php" method="POST">
      <div class="form-group col-md-4 py-2 mx-auto">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="form-group col-md-4 py-2 mx-auto">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="mx-auto text-center">
      <button type="submit" class="ml-5 btn btn-dark">Accedi</button>
    </div>
    </form>
</body>
</html>
