<?php 
	include("config.php");
	$sql=$dbh->prepare("SELECT DISTINCT idchat,guru,name  FROM messages where name='$_SESSION[user]' order by posted desc");
	$sql->execute();
	$aktip = "";
	
	while($r=$sql->fetch()){
		
		$sql1=$dbh->prepare("select *  from messages where idchat='$r[idchat]'");
		$sql1->execute();
		while($row=$sql1->fetch())
		{
		$msg=$row["msg"];
		$foto=$row['fotoguru'];
		}
 		echo "<a href='chat.php?username=$_SESSION[user]&idchat=$r[idchat]'><div class='user'><img src='image/$foto' class='bulatbulat' /><font class='namaguruobrolan'>{$r['guru']}</font> <div class='pesan'>$msg</div> </div></a>";
	}
?>
