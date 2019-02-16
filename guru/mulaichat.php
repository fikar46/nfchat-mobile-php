<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/todo.css" type="text/css" /> 
<link rel="stylesheet" href="css/game.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.min.js"></script>
  
  <link href="chat.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="chat2">
	<div class="tabs3">NFChat
	</div>
    
<?php
            //To Pull 8 Unique Random Values Out Of AlphaNumeric

            //removed number 0, capital o, number 1 and small L
            //Total: keys = 32, elements = 33
            $characters = array(
            "1","2","3","4","5","6","7","8","9");

            //make an "empty container" or array for our keys
            $keys = array();

            //first count of $keys is empty so "1", remaining count is 1-7 = total 8 times
            while(count($keys) < 8) {
            //"0" because we use this to FIND ARRAY KEYS which has a 0 value
             //"-1" because were only concerned of number of keys which is 32 not 33
            //count($characters) = 33
            $x = mt_rand(0, count($characters)-1);
            if(!in_array($x, $keys)) {
            $keys[] = $x;
             }
            }

            foreach($keys as $key){
             $idchat .= $characters[$key];
            }    
           
?>
<div class='pagecurhat1'>
	<?php
		include("config.php");
		if(isset($_SESSION['user'])&& isset($_GET['guru'])){
		$guru=$_GET['guru'];
		$sql=$dbh->prepare("select *  from users where username='$guru'");
		$sql->execute();
		while($row=$sql->fetch())
		{
		$idu=$row['idu'];
		$nama=$row["username"];
		$foto=$row['image'];
		}}
			?>
	<div class='fotoguru'>
		<img src='image/<?php echo $foto ?>' class='ava'/>
	</div>
	<div class='namagurunya'>
		<?php echo $nama ?>
	</div>
	<form id="msg_form" method="POST" action="send1.php">
		<input name="msg" id="msg" type="text" placeholder="Ketikan pesan..." />
		<input name="idchat" id="idchat" type="hidden" value="<?php echo $idchat ?>" />
		<input name="idu" id="idu" type="hidden" value="<?php echo $idu ?>" />
		<input name="guru" id="guru" type="hidden" value="<?php echo $nama ?>" />
		<input name="fotoguru" id="fotoguru" type="hidden" value="<?php echo $foto ?>" />
	</form>
</div>

   </div>
</body>
			
</html>
