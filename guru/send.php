<?php 
	include("config.php");
	if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 		die("<script>window.location.reload()</script>");
	}

	if(isset($_SESSION['user']) ){
 		$msg=htmlspecialchars($_POST['msg']);
		$idu=htmlspecialchars($_POST['idu']);
		$idchat=htmlspecialchars($_POST['idchat']);
		$guru=htmlspecialchars($_POST['guru']);
		$fotoguru=htmlspecialchars($_POST['fotoguru']);
		$nama=htmlspecialchars($_POST['name']);
		
 		if($msg!=""){
  			$sql=$dbh->prepare("INSERT INTO messages (idu,guru,fotoguru,name,msg,dari,idchat,posted) VALUES (?,?,?,?,?,?,?,NOW())");
  			$sql->execute(array($idu,$guru,$fotoguru,$nama ,$msg ,$_SESSION['user'], $idchat));
 		}
	}
?>
