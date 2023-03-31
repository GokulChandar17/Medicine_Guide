<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Home</title>
    <link rel="shortcut icon" href="img/Graphicloads-Medical-Health-Medicine-box-2.ico">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>


<body class="cushome">
    <div class="header-area"> 
		<div class="header-top"> 
			<div class="container"> 
                <a href="cupanel.php"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
				<div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="#">Home</a></li>
						<li><a href="cart/index.php">Cart</a></li>
						<li><a href="index.php">Logout</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		
		
	</div>
	
		
		
		
		<div class="login">
		<div class="askhelp" > 
		<div class="askelp"> 
			<div class="cus-top text-center"> 
				<div class="container"> 
					<h2 style="margin-left: 7%">Need Help?</h2>
				</div>
			</div>
			<div class="cus-bottom" style="margin-top: 5%"> 
				<div class="container" style="padding-bottom:150px;"> 
					<div class="img-row1">
					<?php
  // Array of options for the dropdown list
  $options = array("Fever/cold", "Head ache", "pregnancy", "Leg pain", "Asthma");

  // Check which option is selected
  if (isset($_POST['options'])) {
    $selectedOption = $_POST['options'];
    if ($selectedOption == "Fever/cold") {
      echo "Take paracetomol 1 dose 2 times a day. If paracetomol is not available you can also take Dolo 650";
    } else if ($selectedOption == "Head ache") {
      echo "Take aspirin 2 dose one time a day and ibuprofen 1 dose whenever you feel ache. '<br>Also take Aspirin with caffeine'";
    }
    else if ($selectedOption == "pregnancy") {
        echo "Take Gaviscon and Pepcid AC. '<br>Also take Maalox and Mylanta with prescribed dose'";
      }
      else if ($selectedOption == "Leg pain") {
        echo "Take Acetaminophen and ibuphrofen twice a day'";
      }
      else if ($selectedOption == "Asthma") {
        echo "Take Alvesco, Asmanex HFA, Asmanex Twisthaler'";
      }
      
  }

  // Output the dropdown list
  echo "<form method='POST'>";
  echo "<select name='options'>";
  foreach ($options as $option) {
    echo "<option value='$option'>$option</option>";
  }
  echo "</select>";
  echo "<input type='submit' value='Submit'>";
  echo "</form>";
?>
			
					</div>
					
				</div>
			</div>
		</div>
			
			
            
            
</div>
            
<?php
  // Array of helpline numbers
  $helplines = array(
    "For medical emergency" => "108",
    "For pregnant emergency" => "102"
    
  );

  // Output the help logo
  echo "<img src='img/help.png' alt='Help' onclick='showHelplines()' style='max-height: 10%;max-width: 10%'>";

  // Output the helpline numbers as a hidden div
  echo "<div id='helplines' style='display:none'>";
  echo "<h2>Helpline Numbers:</h2>";
  echo "<ul>";
  foreach ($helplines as $name => $number) {
    echo "<li>$name: $number</li>";
  }
  echo "</ul>";
  echo "</div>";

  // JavaScript function to show the helpline numbers when the logo is clicked
  echo "<script>";
  echo "function showHelplines() {";
  echo "  var helplinesDiv = document.getElementById('helplines');";
  echo "  if (helplinesDiv.style.display === 'none') {";
  echo "    helplinesDiv.style.display = 'block';";
  echo "  } else {";
  echo "    helplinesDiv.style.display = 'none';";
  echo "  }";
  echo "}";
  echo "</script>";
?>
     
            
            
            
            
		
<!--
		<div class="signup col-sm-offset-8 col-md-8"> 
			<p>Not a registered user. Please Sign Up...</p>
			<button type="submit" class="btn btn-success">  </button>
			<button type="submit" class="btn btn-success"></button>
			<a href="cussignup.html">As Customer</a>
			
		</div>
-->
		
		
		
		
	</div>
	
</body>
</html>