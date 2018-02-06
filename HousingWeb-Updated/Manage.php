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

    
    <div class="container">
    <h1>Temperature Information</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Details</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>CID</th>
                                <th>FID</th>
                                <th>Insurance ID</th>
                                <th>Discount ID</th>
                                <th>Ticket ID</th>
                                <th>Cost</th>
                                <th>Class</th>
                                <th>Type</th>
                                <th>Seat No.</th>
                                <th>Departure Time</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php include "HTMLDatabaseFunctions.php";
                            
                            session_start(); 

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "Temp";
                            
                            

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Temp WHERE Location = '$TicketID'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["CID"] . "</td>" . "<td>" . $row["FID"] . "</td>" . 
                                            "<td>" . $row["InsuranceID"] . "</td>" . "<td>" . $row["DiscountID"] . "</td>" . 
                                            "<td>" . $row["TicketID"] . "</td>" .  "<td>" . $row["Cost"] . "</td>" .
                                             "<td>" . $row["Class"] . "</td>".  "<td>" . $row["Type"] . "</td>" . 
                                             "<td>" . $row["SeatNo"] . "</td>" . "<td>" . $row["DepartureTime"] . "</td>" . "<td>";
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
