<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/todo.css" type="text/css" /> 
<link rel="stylesheet" href="css/game.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.min.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="chat1">
	<div class="tabs2">
  <span class='judulnama'>
    NFChat</span>
    <div class="dropdown">
    <button class="dropbtn">
       <i class="fa fa-user-circle-o"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
	</div>
    <?php 
	 	include("config.php");include("login.php");
     	if(isset($_SESSION['user'])){
      		include("home.php");
     	}else{
      		$display_case=true;
      		include("login.php");
     	}
    ?>
   </div>
</body>

</html>
