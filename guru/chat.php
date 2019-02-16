<!DOCTYPE html>
<?php 
	include("config.php");
	if(isset($_SESSION['user'])&& isset($_GET['idchat'])){
	$idchat=$_GET['idchat'];
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.min.js"></script>
  <script>
  function scTop(){
 $('html,body').animate({scrollTop: document.body.scrollHeight},"slow");
}
function goBack() {
    window.history.back();
}
function load_new_stuff(){
 localStorage['lpid']=$(".msgs .msg:last").attr("title");
 $(".msgs").load("msgs.php?idchat=<?php echo $idchat ?>",function loadbaru(){
  if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
    scTop();
  }
 });
 $(".users").load("users.php");
 
}
function refresh(){
    $('.msgs').load('msgs.php?idchat=<?php echo $idchat ?>');
}

$(document).ready(function(){ 
    $('.tab').click(function(){
		var dip = $(this).data('dip');
		if(dip == "chat"){
        $('.chat').css('display','block');
        $('.users').css('display','none');
		$('.obrolan').css('display','none');
		$('.timeline').css('display','none');
		}else if(dip == "users"){
        $('.chat').css('display','none');
        $('.users').css('display','block');
		$('.obrolan').css('display','none');
		$('.timeline').css('display','none');
		}else if(dip == "obrolan"){
        $('.chat').css('display','none');
        $('.users').css('display','none');
		$('.obrolan').css('display','block');
		$('.timeline').css('display','none');
		}else{
		$('.chat').css('display','none');
        $('.users').css('display','none');
		$('.obrolan').css('display','none');
		$('.timeline').css('display','block');
		}
		return false;										 
    });
 scTop();
 $("#msg_form").on("submit",function(){
  t=$(this);
  var val = $('input#msg').val();
  var val1 = $('input#idu').val();
  var val2 = $('input#idchat').val();
  var val3 = $('input#guru').val();
  var val4 = $('input#fotoguru').val();
  var val5 = $('input#name').val();
  if(val!=""){
   $.post("send.php",{msg:val,idu:val1,idchat:val2,guru:val3,fotoguru:val4,name:val5},function(){
    load_new_stuff();
    t[0].reset();
   });
  }
  return false;
 });
});
setInterval(function(){
 load_new_stuff();
},60000);
setInterval(function(){
 refresh();
},500);
  
  </script>
  <link href="chat.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <div class="chat">
	
    <?php 
	 	include("config.php");include("login.php");
     	if(isset($_SESSION['user'])){
      		include("chatbox.php");
     	}else{
      		$display_case=true;
      		include("login.php");
     	}
    ?>
   </div>
</body>
<?php 
	}
?>
</html>
