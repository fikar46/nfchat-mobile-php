<!DOCTYPE html>
<html>
<?php
include("config.php");
		if(isset($_SESSION['user'])){
			$user = $_SESSION['user'];
		$sql1=$dbh->prepare("select *  from users where username='$user'");
		$sql1->execute();
		while($row=$sql1->fetch())
		{
		$user=$row["username"];
		$fotouser=$row["image"];
		$tipe=$row["tipe"];
		$status=$row['status'];
		$pendidikan=$row['pendidikan'];
		$lokasi=$row['lokasi'];
		}
		?>
<head>
  <link rel="stylesheet" href="css/todo.css" type="text/css" /> 
	<link rel="stylesheet" href="css/game.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.min.js"></sc<script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script> 
  $(document).ready(function(){ 
    $('.tab').click(function(){
		var dip = $(this).data('dip');
		if(dip == "profile"){
        $('.profile').css('display','block');
        $('.jadwal').css('display','none');
		}else{
		$('.profile').css('display','none');
        $('.jadwal').css('display','block');
		}
		return false;										 
    });
});
  </script>
</head>
<body>
    <div class="chat1">
	<div class="tabs2"><a href='index.php'><button class='leftback'><i class="fa fa-chevron-left"></i></button></a>NFChat
	</div>
	<div class='fotoguruprofil'>
		<img src='image/<?php echo $fotouser ?>' class='fotoprofilguru'/>
		<div class="namaguruprofil">
			<font color="white"><?php echo $user ?></font>
			<div class="deskripsiprofil"><?php echo $status ?></div>
		</div>
	</div>
	<div class="pagenyaguru"><?php include("profiluser.php"); ?></div>
	
    
   </div>
</body>
<?php } ?>
</html>
