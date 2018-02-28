
<?php

error_reporting(0);
    
    session_start();
	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Property";
    $dbport = 3306;
    
    $_SESSION['SERVER'] = $servername;
    $_SESSION['USER'] = $username;
    $_SESSION['PASS'] = $password;
    $_SESSION['DB'] = $database;
    
    $conn = new mysqli($servername, $username, $password, $database, $dbport);
    
    if ($database->connect_error) {
        die("Connection Failed: " . $db->connect_error);
    }
    
	

	
function run_update ($sql) {
        global $conn;
        
        if ($conn->query($sql) === TRUE) {
            echo "Database updated successfully <br>";
        }
        
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }	
	
function add_Property ($PropertyName, $Address, $City, $State, $Country) {
        global $conn;
        $sql_i = "INSERT INTO Property(PropertyName, Address, City, State, Country) VALUES " . "('$PropertyName', '$Address', '$City', '$State', '$Country')";
        run_update($sql_i); }    
    

	if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
            header ("Location: Login.php");
	}
        
        if (count($_POST)) {
            add_Property ($_POST['PropertyName'], $_POST['Address'], $_POST['City'], $_POST['State'], $_POST['Country']);
			
			echo "<script>
			alert('Your property has been successfully added!');
			window.location.href='http://localhost/housingweb-updated/home2.php';
			</script>";
        }
?>

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


	<script type="text/javascript">
					 function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();

						reader.onload = function (e) {
							$('#blah')
								.attr('src', e.target.result)
								.width(150)
								.height(200);
						};

                reader.readAsDataURL(input.files[0]);
            }
        }
					</script>
						
	
	
	
	
	
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Home.php">Home Automation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Home.php">Home
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
              <a class="nav-link" href="Login.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
<div class="container">
            
            <form id="addStudent" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="validateStudent()">`
                <h2>Property information</h2>
				
				<div class="form-group">
						<label for="Image">Upload image</label>
						<input style="display: inline-block; padding-top:20px;" type='file' onchange="readURL(this);" />
						<img   style="display: inline-block;" id="blah" src="#" alt="File name" />
				</div>
                
                <div class="form-group">
                    <label for="FName">Property name</label>
                    <input class="form-control" type="text" name="PropertyName" id="idFname" placeholder="Enter property name">
                </div>
                
                <div class="form-group">
                    <label for="Lname">Address</label>
                    <input class="form-control" type="text" name="Address" id="idLname" placeholder="Enter street address (.ie 123 Main Street)">
                </div>
                
                <div class="form-group">
                    <label for="DoB">City</label>
                    <input type="text" class="form-control" name="City" id="idDoB" placeholder="Enter City">
                </div>
                
                 <div class="form-group">
                    <label for="PhoneNumber">State</label>
                    <input type="text" class="form-control" name="State" id="idPhoneNumber" placeholder="Enter state">
                </div>
                
                <div class="form-group">
                    <label for="Email">Country</label>
                    <input type="text" class="form-control" name="Country" id="idEmail" placeholder="Enter country">
                </div>
                
              
                
                
                <button type="submit" onclick="MyFunction()" class="btn btn-default">Add</button>
            </form>
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

