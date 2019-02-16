<div class="homes">
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="image/biaya1.png" style="width:100%"><!-- gambar diisi -->
  <img class="mySlides" src="image/biaya2.png" style="width:100%"><!-- gambar diisi -->
</div>
    <div id="timeline">
        <a href="mulai.php?page=curhat" >	
		<div class="timeline-item1">
		
				<div class="timeline-content10">
				<div class="tempatfoto">
					<img src='image/kesha.jpg' class='fotohome' /></div>
					<h2 class="biru">Curhatin disini yuk</h2>
					<p>
						Curhat langsung mengenai masalah pribadimu<br> disini dengan pakar konsultan kami
					</p>
					<a href="1" class="btnbab1"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
        </a>
		<a href="mulai.php?page=bip" >	
		<div class="timeline-item1">
				<div class="timeline-content10">
					<div class="tempatfoto">
					<img src='image/kesha.jpg' class='fotohome' /></div>
					<h2 class="biru">Chat Guru BIP</h2>
					<p>
						Chat dengan guru BIP pilihan kami
					</p>
					<a href="2" class="btnbab1"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
        </a>
        <a href="mulai.php?page=guru" >	
			<div class="timeline-item1">
				<div class="timeline-content10">
					<div class="tempatfoto">
					<img src='image/kesha.jpg' class='fotohome' /></div>
					<h2 class="biru">Chat Guru</h2>
					<p>
						Chat dengan guru guru setiap mata pelajaran 
					</p>
					<a href="3" class="btnbab1"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
        </a>
		<a href="mulai.php?page=guru" >	
			<div class="timeline-item1">
				<div class="timeline-content10">
					<div class="tempatfoto">
					<img src='image/kesha.jpg' class='fotohome' /></div>
					<h2 class="biru">Lokasi NF</h2>
					<p>
						Temukan lokasi NF terdekat
					</p>
					<a href="3" class="btnbab1"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
        </a>
		<a href="mulai.php?page=guru" >	
			<div class="timeline-item1">
				<div class="timeline-content10">
					<div class="tempatfoto">
					<img src='image/kesha.jpg' class='fotohome' /></div>
					<h2 class="biru">Daftar NF</h2>
					<p>
						Yuk daftar NF sekarang
					</p>
					<a href="3" class="btnbab1"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
        </a>
	</div>
	</div>

 <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {
		myIndex = 1
		}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>