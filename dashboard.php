<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>Dashboard | Wajepa week 3 task</title>
  </head>

  <?php 
	
	if(isset($_POST['save'])){
    
    ?>	
  
  <body class="" style="background:<?php echo $_POST["fcolor"] ?> ;">
    <div class="container">
      <h2 class="table-dark text-center text-uppercase py-4">Welcome to dashboard</h2>
    </div>
     
    <div class="container table-responsive">
      <!--
      <table class="table table-hover table-dark">
          <thead>
          <caption>List of users</caption>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Firstname</th>
              <th scope="col">Lastname</th>
              <th scope="col">Email</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Gender</th>
              <th scope="col">Department</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $_POST["fname"] ?></td>
              <td><?php echo $_POST["lname"] ?></td>
              <td><?php echo $_POST["email"] ?></td>
              <td><?php echo $_POST["dob"] ?></td>
              <td><?php echo $_POST["gender"] ?></td>
              <td><?php echo $_POST["department"] ?></td>
            </tr>
          </tbody>
      </table>

    -->
      <table class="table table-hover table-dark">
          <caption class="text-uppercase">Your profile details</caption>
          <thead>
            
          </thead>
          <tbody>
            <tr>
              <th scope="col">Firstname</th>
              <td class="text-capitalize"><?php echo $_POST["fname"] ?></td>
            </tr>

            <tr>
              <th scope="col">Lastname</th>
              <td class="text-capitalize"><?php echo $_POST["lname"] ?></td>
            </tr>

            <tr>
              <th scope="col">Email</th>
              <td class="text-lowercase"><?php echo $_POST["email"] ?></td>
            </tr>

            <tr>
              <th scope="col">Date of Birth</th>
              <td><?php echo $_POST["dob"] ?></td>
            </tr>

            <tr>
              <th scope="col">Gender</th>
              <td class="text-capitalize"><?php echo $_POST["gender"] ?></td>
            </tr>

            <tr>
              <th scope="col">Department</th>
              <td class="text-capitalize"><?php echo $_POST["department"] ?></td>
            </tr>
          </tbody>
      </table>

    </div>

		<?php	
	}

	else 
		echo '
		<div class="container">
    <h4 class="text-center text-mute alert alert-info mt-4"> Looks like there is nothing fun here, maybe you should <a href="index.php" class="alert-link">go back</a> and filled out the form. </h4>
		</div> ';
?>

</body>
</html>