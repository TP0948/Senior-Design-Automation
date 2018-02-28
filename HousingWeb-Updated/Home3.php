<!DOCTYPE html>



<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
	
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
  
  
  <style>
  
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	
	.btn-group button {
    background-color: #337ab7; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 14px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
	font-size: 16px;
	
}

.well.well1.well2.well3.well4.well5.well6.well7.well8.well9.well10.wellHeader{
	flex: 1 1 auto;
}

p {
	text-align:center;
	padding: 20px;
	font-size: 15px;
	flex: 1 1 auto;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}

 .pIMG {
    max-width:100%;
    max-height:100%;
      }
	  
	  .MainContent{
		  padding-top: 75px;
	  }
	  

  </style>
</head>
<body>
<!-- ______________________________________Navigation__________________________________ -->
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

	
	

<div class="MainContent">
    <div class="col-sm-12">
      <div class="wellHeader">
        <h1 style="text-align:center;   margin:0 auto;">My Properties</h1>
		<button onclick="location.href = 'http://localhost/HousingWeb-Updated/NewProperty.php';" id="NewProperty">Add new property</button>
      </div>
	  <div class="row">
		<div class="col-sm-4">
			<div class="well0">
	
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well1">
	
			</div>
			</div>
		
	
		<div class="col-sm-4">
			<div class="well2">
	
			</div>
			</div>
		
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="well4">
	
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well5">
	
			</div>
			</div>
	
		<div class="col-sm-4">
			<div class="well6">
	
			</div>
			</div>
		
		</div>
		
		<div class="row">
		<div class="col-sm-4">
			<div class="well7">
	
			</div>
			</div>
		<div class="col-sm-4">
			<div class="well8">
	
			</div>
			</div>
	
		<div class="col-sm-4">
			<div class="well9">
	
			</div>
			</div>
			</div>
		<div class="row">
		<div class="col-sm-4">
			<div class="well10">
	
			</div>
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
	
	
	<script>
	
	
	
		$( document ).ready(function() {
			console.log( "ready!" );
		});
		
		
		$.ajax({
			
			
			url: `http://localhost/HousingWeb-Updated/find.php`,
			
			
			type: 'GET',
			
			
			
			success: function(result) {
				
				var a = 0;
				
				$( ".well").empty();
				$( ".well" + a).append(result);
			
				a++;
				
			}
			
			
		});
	
	</script>	
	
</body>
</html>
