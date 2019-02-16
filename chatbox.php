<?php 
	include("config.php");
	if(isset($_SESSION['user'])&& isset($_GET['idchat'])){
	$idchat=$_GET['idchat'];
	$sql1=$dbh->prepare("select *  from messages where idchat='$idchat'");
		$sql1->execute();
		while($row=$sql1->fetch()){
		$guru=$row["guru"];
		$fotoguru=$row["fotoguru"];
		$idu=$row["idu"];
		}
?>
<div class="tabs3"><a href='index.php'><button class='leftback'><i class="fa fa-chevron-left"></i></button></a><?php echo $guru ?>
	</div>
<div class='msgs'>
	<?php include("msgs.php");?>
</div>


<form id="msg_form" method="POST">
  <input name="msg" id="msg" type="text" placeholder="Ketikan pesan..." />
  <input type="button" id="loadFileXml" value="+" onclick="document.getElementById('file').click();" />
  <input type="file" style="display:none;" id="file" name="file"/>
  <input name="idchat" id="idchat" type="hidden" value="<?php echo $idchat ?>" />
  <input name="idu" id="idu" type="hidden" value="<?php echo $idu ?>" />
  <input name="guru" id="guru" type="hidden" value="<?php echo $guru ?>" />
  <input name="fotoguru" id="fotoguru" type="hidden" value="<?php echo $fotoguru ?>" />
</form>
<div class='footer'></div>
<?php 
	}
?>