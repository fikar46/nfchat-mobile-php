function scTop(){
 $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
}

function load_new_stuff(){
 localStorage['lpid']=$(".msgs .msg:last").attr("title");
 $(".msgs").load("msgs.php",function(){
  if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
   
  }
 });
 $(".users").load("users.php");
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

 $("#msg_form").on("submit",function(){
  t=$(this);
  var val = $('input#msg').val();
  var val1 = $('input#idu').val();
  var val2 = $('input#idchat').val();
  var val3 = $('input#guru').val();
  var val4 = $('input#fotoguru').val();
  if(val!=""){
   $.post("send.php",{msg:val,idu:val1,idchat:val2,guru:val3,fotoguru:val4},function(){
    load_new_stuff();
    t[0].reset();
   });
  }
  return false;
 });
});
setInterval(function(){
 load_new_stuff();
},1000);
