<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
	
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

.well{
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

  
  
<script>
document.body.onload = addElement;

function addElement () { 
  // create a new div element 
  var newDiv = document.createElement("div"); 
  // and give it some content 
  var newContent = document.createTextNode("Hi there and greetings!"); 
  // add the text node to the newly created div
  newDiv.appendChild(newContent);  

  // add the newly created element and its content into the DOM 
  var currentDiv = document.getElementById("div1"); 
  document.body.insertBefore(newDiv, currentDiv); 
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
      <div class="well">
        <h1 style="text-align:center;   margin:0 auto;">My Properties</h1>
        
      </div>
     
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
		  
            <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/GraceCenter.jpg"> 
            <p>Grace Center Low Income Housing</p> 
			 <div class="btn-group">
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Manage.php';" id="Manage"  >Manage</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Analytics.php';" id="Manage"  >Analytics</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Settings.php';" id="Manage"  >Settings</button>
			</div> 
          </div>
        </div>
        <div class="col-sm-4">
           <div class="well">
            <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/Oakland.jpg"> 
            <p>Oakland University</p> 
			 <div class="btn-group">
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Manage.php';" id="Manage"  >Manage</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Analytics.php';" id="Manage"  >Analytics</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Settings.php';" id="Manage"  >Settings</button>
			</div> 
          </div>
        </div>
        <div class="col-sm-4">
           <div class="well">
           <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/Mcdonalds.jpg"> 
            <p>Mcdonalds</p> 
			 <div class="btn-group">
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Manage.php';" id="Manage"  >Manage</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Analytics.php';" id="Manage"  >Analytics</button>
				<button onclick="location.href = 'http://localhost/HousingWeb-Updated/Settings.php';" id="Manage"  >Settings</button>
			</div>  
          </div>
        </div>
		</div>
	  <div class="row">
        <div class="col-sm-4">
          <div class="well">
		  <a href="http://localhost/HousingWeb-Updated/Main Tabs/NewProperty.php">
            <img class="pIMG" src="http://localhost/HousingWeb-Updated/images/Plus.png" height="391px" Width="335.183px"> 
            </a>
          </div>
        </div>
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
</body>
</html>
