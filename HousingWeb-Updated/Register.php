<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
	
	
<!-- Password confirmation --------------------->

	
	<script type="text/javascript">
    
	function validate() {
		if (confirmEmail() && confirmPassword())
		{
		window.location = "index.html";
		}
		else
		{
		window.location = "Register.php";
		}
	
	
	
	function confirmEmail() {
        var email = document.getElementById("email").value
        var cEmail = document.getElementById("cEmail").value
        if(email != cEmail) {
            alert('Email Not Matching!');
			return false;
        }
		if(email == cEmail) {
			return true;
		}
    }
	
	function confirmPassword() {
        var password = document.getElementById("password").value
        var cPassword = document.getElementById("cPassword").value
        if(password != cPassword) {
            alert('Password Not Matching!');
			return false;
        }
		if(password == cPassword) {
			return true;
		}
    }
	
	</script>
	
	
	
	
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Housing automation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="MyAccount.php">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
<div class="container">
    
    
    
    
    
            
            <form id="addUser" action="CreateUser.php" method="post" action="CreateUser.php">`
                <h2>Customer information</h2>
                
                <div class="form-group">
                    <label for="FName">First Name</label>
                    <input class="form-control" type="text" name="FName" id="Fname" placeholder="Enter First Name" required>
                </div>
                
                <div class="form-group">
                    <label for="Lname">Last Name</label>
                    <input class="form-control" type="text" name="LName" id="Lname" placeholder="Enter Last Name" required>
                </div>
                
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter in a valid email">
                </div>
                
                <div class="form-group">
                    <label for="Email">Confirm Email</label>
                    <input type="email" class="form-control" name="cMail" id="cEmail" placeholder="Confirm email">
                </div>
				
				<div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
      
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Confirm Password">
                </div>
              
                <button type="submit" class="btn btn-default" onsubmit="validate()" >Add</button>
            </form>
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
