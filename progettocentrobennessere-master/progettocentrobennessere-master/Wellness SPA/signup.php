<html>
<head>
  <title>SIGNUP</title>
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
  <h3>Registrati adesso</h3>
  <form action="signin.php" method="POST">
    <div class="form-group col-md-4 py-2 mx-auto">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-4 py-2 mx-auto">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group py-2">
      <label for="example-date-input" class="col-8 col-form-label text-center mx-4">Date</label>
      <div class="col-4  mx-auto">
        <input class="form-control" type="date" value="" id="example-date-input">
      </div>
    </div>
  <div class="form-group col-md-4 py-2 mx-auto">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group col-md-4 py-2 mx-auto">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
    <div class="form-group col-md-4 py-2 mx-auto">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4 py-2 mx-auto">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4 py-2 mx-auto">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  <div class="form-group py-3 mx-auto text-center">
    <div class="form-check  mx-auto">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="mx-auto text-center">
  <button type="submit" class="ml-5 btn btn-dark">Registrati</button>
</div>
</form>
</div>
</body>
</html>
