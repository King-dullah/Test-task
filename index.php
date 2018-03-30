<?php
require('send.php');
?>
<!DOCTYPE html>
<html>
<head>
          <meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Page Title</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" media="screen" href="style.css" />


</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Tovar</a>

  <!-- Tovar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Delivery</a>
      </li>
    </ul>

</nav>
<div class="row " >
<div class="col-md-4">
<div class= "image">
<img src="uniform.jpg" alt="uniform" class="img-fluid max-width: 50%; height:auto; rounded">
<div class="details">
<h5>Uniform</h5>
<?php
if(isset($_SESSION['date1']) && isset($_SESSION['date2'])):
          echo '<div> From:' .  $_SESSION['date1'] . ' To:'. $_SESSION['date1'];

endif; ?>

<div>Price: <?php
if(isset($_SESSION['price'])):
           echo $_SESSION['price'];
else:
           echo '10,000';

endif; ?> </div>
<form calss="form" action='send.php' method='post'>
          <div class="form-group">
                    <label for="date1"  >From:</label><input type="date" class="form-control" name="date1" >
          </div>
          <div class="form-group">
                    <label for="date2">To:</label><input type="date" class="form-control" name="date2" >
          </div>
          <div class="form-group">
               <input type="submit" class="btn btn-outline-dark " name="submit" value="Set Price" >
          </div>
</form>
</div>
</div>

</div>
</div>
</div>
</body>
</html>