
<?php 

error_reporting(0);
    
    /*session_start();*/
	
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
    

	/*if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
            header ("Location: Login.php");
	}*/
        
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	  body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}



/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

    </style>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
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
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>					
<script language="JavaScript" type="text/javascript">
function delproperty(PID, PropertyName)
{
if (confirm("Are you sure you want to delete '" + PropertyName + "'"))
{
window.location.href = 'admin.php?delnews=' + PID;
}
}
</script>	
	
	
	
	
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Home4.php">Home Automation</a>
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

  


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Add New Property</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Manage Properties</button>
</div>

<div id="London" class="tabcontent">
  <h3>Add New Property</h3>
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
  
</div>

<div id="Paris" class="tabcontent">
  <h3>Edit/Delete</h3>
<div class="row">
        
            <div class="col-sm-6">
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Property Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
								<th>Country</th>
								<th>Image</th>
								<th>ID</th>
								<th>Edit</th>
								<th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
            <?php
                            
                           session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "user_properties";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
							
							$user = $_SESSION['login'];

                            $sql = "SELECT PropertyName, Address, City, State, Country,ImageLink,ID FROM user_properties WHERE Username = '$user';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
									
									
									$id = $row["ID"];
									
									
								
									
                                    print   "<tr>";
                                    print   "<td>" . $row["PropertyName"] . "</td>" . "<td>" . $row["Address"] . "</td>" . 
                                            "<td>" . $row["City"] . "</td>" . "<td>" . $row["State"] . "</td>" . "<td>" . $row["Country"] . "</td>";
                                    print  "<td>";
									echo '<img src="'.$row['ImageLink'].'"  height="75" width="75"/>'; 
									print  "</td>";
									print   "<td>" . $row["ID"] . "</td>";
									
									echo '<td><a href="Edit.php">Edit</a></td>';
									echo "<td><a href='Delete.php?del=$row[ID]'>Remove</a></td>";
									print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }
							
							 

                           /* $conn->close();*/
                            ?>
                        </tbody>
                    </table>
                </div>
                
				
  
</div>
</div>


     
	
	
	  
   
  </body>

  
  
  
</html>

