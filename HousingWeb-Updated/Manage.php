<!DOCTYPE html>
<html lang="en">
<head>
	<title>HousingAutomation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
.column {
	
}
.top {
	padding-top:50px;
	text-align:center;
}
.label{
	padding:20px;
}
.label{
	text-align:center;
}
.center {
	display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
	padding-top: 100px;
    
}
</style>
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
            
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.php">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
	
	<div class="row">
	<img class="center" src="http://localhost/HousingWeb-Updated/images/GraceCenter.jpg">
	</div>
	
	
	<div class="top">
	<h1 style="text-decoration:underline;">Temperature information</h1>
	</div>
	
	
	
    
    <div class="row">
        
            <div class="col-sm-6">
                <h2 class="label" >Hallway</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Hallway';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                
				
				
                
	
	
       
            <div class="col-sm-6">
                <h2 class="label">Cafeteria</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
							error_reporting(0);
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Cafeteria';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
				<div class="row">
        
            <div class="col-sm-6">
                <h2 class="label" >Lobby</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Lobby';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                
				
				
                
	
	
       
            <div class="col-sm-6">
                <h2 class="label">Kitchen</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
							error_reporting(0);
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Kitchen';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
   
   
   <div class="top">
	<h1 style="text-decoration:underline;">Security</h1>
	</div>
	
	
	
    
    <div class="row">
        
            <div class="col-sm-6">
                <h2 class="label" >Hallway</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Hallway';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                
				
				
                
	
	
       
            <div class="col-sm-6">
                <h2 class="label">Cafeteria</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
							error_reporting(0);
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Cafeteria';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
				<div class="row">
        
            <div class="col-sm-6">
                <h2 class="label" >Lobby</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Lobby';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                
				
				
                
	
	
       
            <div class="col-sm-6">
                <h2 class="label">Kitchen</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Value</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
							error_reporting(0);
                            session_start();

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM temp WHERE Location = 'Kitchen';";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Location"] . "</td>" . 
                                            "<td>" . $row["Sensor"] . "</td>" . "<td>" . $row["Value"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
