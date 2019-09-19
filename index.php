<?php
?>

<!doctype html>

<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width", initial-scale=1/>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="style/jquery-3.3.1.min.js"></script>
	<link rel="icon" type="image/jpg" href="style/iconbar.jpg">
	
	<title>Kontrakan_WEB</title>

	
	<script type="text/javascript">
		$(window).on('scroll',function(){
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}	
		})
	</script>

</head>

<body>
	
	<nav>
		<div class="logo">
			<img src="style/logos.png">
		</div>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="hometown.php">Hometown</a></li>
			<li><a href="food.php">Food</a></li>
			<li><a href="tourist.php">Tourist</a></li>
		</ul>

	</nav>
	<div class="logo2">
			<img src="style/samping.png">
		</div>	

	<section class="header">
		
		<div class="pembuka">
		<li  class="l1">HOME_<span class="name">TOWN</li>
		<li  id="l2">WEB ABOUT<span class="name"> MY <span class="name2"> HOME TOWN</li>
		
		<li  class="l3">-&emsp;&emsp;ABOUT KONTRAKAN_BLOG&emsp;&emsp;- </li>
		<li  class="l4">Founded in 19-09-19 , To Tell You About My Home Town , But don't take it too serious </li>

		</div>


		<div id="banner" style="top:0px;">
		</div>
		
	</section>
	
	<section class="Penutup" id="akhir">

			<div id="popupbox1">
				<div class ="popup-wrap">
					<div class="popup-conts">
						<h3>FACEBOOK&emsp;&emsp; INSTAGRAM&emsp;&emsp;WHATSAPP</h3>
						<div class="logos2">
							<div class="itemz1"><a href="https://www.facebook.com/philipasiahaan/"><img src="style/fb.png"></a></div>
							
							<div class="itemz3"><a href="https://www.instagram.com/shn_philip/"><img src="style/ig.png"></a></div>
							
							<div class="itemz2"><a href="https://www.google.com/search?safe=strict&client=firefox-b-ab&ei=Eqe0W9j9Fo_QvQT5nqOQBw&q=my+whatsapp+number+is+089613509160&oq=my+whatsapp+number+is+089613509160&gs_l=psy-ab.3...9712.20577.0.22989.25.25.0.0.0.0.541.2985.6j11j2j5-1.20.0....0...1c.1.64.psy-ab..5.12.1914...0j0i131k1j35i39k1j0i67k1j0i10k1j0i203k1j0i10i203k1j33i22i29i30k1.0.UNZ5Ozt0WLo/"><img src="style/wa.png"></a></div>
	
						</div>
						
						<p><a href="javascript:voud(0)" onclick="toggle_visibility('popupbox1');">-x-</a>
						</p>
					</div>
				</div>
			</div>

			<div id="wrapper">
				<p><strong>CONTACT-<a href="javascript:void(0)" onclick="toggle_visibility('popupbox1');"><strong>ME</p>
			</div>
	</section>


	<script type="text/javascript">
	    function toggle_visibility() {
	       var e = document.getElementById('popupbox1');
	       		if(e.style.display == 'block'){
	       			e.style.display = 'none';
	       		}
	         	else{
	         		e.style.display = 'block';	
	         	}
	          	
	    }
	</script>

</body>

</html>