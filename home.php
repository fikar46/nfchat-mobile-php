<div id="konten">
		<div class="tabs">
		<div class="tab" data-dip="chat">Home</div>
		<div class="tab" data-dip="obrolan">Obrolan</div>
		<div class="tab" data-dip="users">Guru</div>
		<div class="tab" data-dip="timeline">Timeline</div>
		</div>
    <div class="chat">
    <?php 
	 	include("config.php");include("login.php");
     	if(isset($_SESSION['user'])){
      		include("homes.php");
     	}else{
      		$display_case=true;
      		include("login.php");
     	}
    ?>
   </div>
   <div class="users" style='display:none'>
     <?php include("users.php");?>
   </div>
   <div class="obrolan" style='display:none'>
     <?php include("obrolan.php");?>
   </div>
   <div class="timeline" style='display:none'>
     <?php include("timeline.php");?>
   </div>
   </div>