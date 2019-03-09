<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register Form </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="col-lg-8 col-lg-offset-2 ">

    <h1 align="center">Register page is here</h1>
    <?php
    if(isset($_SESSION['success']))
    {
      ?>
 <div class="alert alert-danger"><?php echo $_SESSION['success'];?></div>


      <?php
    }


    ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>')?>
    <form action="" method="post">
    
    
      <dir class="form-group">
          <label for="uername" >User Name:</label>
          <input type="text" name="username" class="form-control" placeholder="Enter username" autofocus="autofocus">
      </dir>
    
      <dir class="form-group">
          <label for="email" >Email:</label>
          <input type="email" name="email" class="form-control" placeholder=" Enter Email">
      </dir>
    
      <dir class="form-group">
          <label for="password" >Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password">
      </dir>
      
      <dir class="form-group">
          <label for="gender" >Select Gender:</label>
          <select class="form-control" name="gender">
            <option value=""> --Select Gender </option>
            <option value="M"> Male </option>
            <option value="F"> Female </option>

          </select>
      </dir>
       <dir class="form-group">
          <label for="phone" >Phone:</label>
          <input type="number" name="phone" class="form-control">
      </dir>
        <div class="text-center">
          <button class="btn btn-primary" name="register">Register</button>
        </div>

    </div>
  </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>