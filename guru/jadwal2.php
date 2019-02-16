
<div class="profil1page" >
<?php 
	include("config.php");
    $sql1=$dbh->prepare("select *  from jadwal where username='$guru'");
		$sql1->execute();
		while($row=$sql1->fetch())
		{
		$senin=$row['senin'];
		$selasa=$row['selasa'];
		$rabu=$row['rabu'];
		$kamis=$row['kamis'];
		$jumat=$row['jumat'];
		$sabtu=$row['sabtu'];
		$minggu=$row['minggu'];
		
		}?>
    
    
    <div class="judulprofil" >Senin</div> <table><div class="matapelajaran" > <?php echo $senin ?></div></table>
    <div class="judulprofil" >Selasa</div> <table><div class="matapelajaran" > <?php echo $selasa ?></div></table>
    <div class="judulprofil" >Rabu</div> <table><div class="matapelajaran" > <?php echo $rabu ?></div></table>
    <div class="judulprofil" >Kamis</div> <table><div class="matapelajaran" > <?php echo $kamis ?></div></table>
    <div class="judulprofil" >Jumat</div> <table><div class="matapelajaran" > <?php echo $jumat ?></div></table>
    <div class="judulprofil" >Sabtu</div> <table><div class="matapelajaran" > <?php echo $sabtu ?></div></table>
    <div class="judulprofil" >Minggu</div> <table><div class="matapelajaran" > <?php echo $minggu ?></div></table>
    <a href='mulaichat.php?guru=<?php echo $guru ?>'><div class="mulaikonsul2">Mulai Konsul</div></a>
    
</div>
