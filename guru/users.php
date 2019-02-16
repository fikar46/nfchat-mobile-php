<?php 
	include("config.php");
	$sql=$dbh->prepare("SELECT * FROM users where status='guru'");
	$sql->execute();
	$aktip = "";
	
	while($r=$sql->fetch()){
    	 if(isset($_SESSION['user'])){
			if($_SESSION['user'] == $r['username']){
				$aktip = "<a href='logout.php' class='keluar'>offline</a>";
			}
	 	}
 		echo "<a href='pageguru.php?guru={$r['username']}'><div class='user'><img src='image/{$r['image']}' class='bulatbulat' /><font class='namaguruobrolan'>{$r['username']}</font><div class='pesan'>{$r['tipe']}</div> </div></a>";
	}
?>
