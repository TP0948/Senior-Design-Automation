   <?php include "HTMLDatabaseFunctions.php";
                            
							
                            

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "user_properties";
                            
							
							global $conn;
							
							$user = $_SESSION['login'];
							

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM user_properties WHERE Username = '$user';";
							
							$property_Name = $_SESSION;
							
							
							 
							
                            $result = $conn->query($sql);

                             if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    
									/*$row = mysqli_fetch_row($result);*/
									
									
									
									
									echo '<img class="pIMG" src="', $row['ImageLink'],'" alt="No image was found">';
									echo '<p>', $row['PropertyName'], '</p>';
									echo '<div class="btn-group">';
									echo '<button onclick=', "location.href = '';", 'id="Manage">Manage</button>';
									echo '<button onclick=', "location.href = '';", 'id="Analytics">Analytics</button>';
									echo '<button onclick=', "location.href = '';", 'id="Settings">Settings</button>';
									echo '</div>';
									
									
									
									
									
                                }
                            }
                            else {
                                print   "<td> You have no registered properties! </td><br>";
                            }
                            $conn->close();
?>