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
							
							$returnData = array();
							
                             if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $returnData[] = $row;
									
								
									
									
                                }
							print json_encode($returnData);	

                            }
                            else {
                                print   "<td> You have no registered properties! </td><br>";
                            }
                            $conn->close();
							
							
?>