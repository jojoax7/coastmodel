<?php
	ob_start();
?>
<div class="clear"></div>
<div class="container container-home " style="width: 100%;padding-right: 0px;padding-left: 0px;">
	<!-- Banner - Start -->
	<div class="banner">
		<div class="photo-cover"><img src="images/home/Coast Web Photo Misc.jpg" width="100%" height="500px"></div>
		<div class="rectangle"></div>
		<div class="introducing"><img src="images/home/Coast Introducing....png" width="20%" height="auto"></div>
	</div>
	<!-- Banner - End -->
	<!-- Conteudo - Start -->
	<div class="conteudo" style="padding-top:20%">
		<div class="board">
  		<img src="images/home/MALE BOARD.jpg" height="auto" width="25%" style="padding-top: 10%;">
	    <p style="font-family: CoolveticaRg-Regular;position: absolute;top: 74%;right: 20%;width: 100%;font-size: 60px;color: white;line-height:45px;">
        Male <br/> Board</p>
      <img src="images/home/Coast Web Photo 1.jpg" height="auto" width="30%" style="padding-top: 4%;">
      <p style="font-family: CoolveticaRg-Regular;position: absolute;top: 80%;left: 6%;width: 100%;font-size: 60px;color: white;line-height: 45px;">
        Female <br/> Board</p>
    </div>
    <div class="strip" style="padding-top:5%">
      <img src="images/home/Female Strip.jpg" width="100%" height="auto">
      <p style="font-family: CoolveticaRg-Regular;position: absolute;top:65%;left: 22%;width: 100%;font-size: 120px;color: white;line-height:45px;">Female.</p>
      <div style='position: absolute;top:81%;left: 22%;width: 100%;'>
        <button class="btn-strip">MAINBOARD</button>
        <button class="btn-strip">NEW FACES</button>
      </div>
    </div>
    <div class="community">
      <div style="width:60%;display: inline-table;">
        <img src="images/home/Coast Coumminuty Blue.png" width="100%" height="auto">
      </div>
	    <div style="width: 30%;float: right;text-align: right;padding-top: 8%;">
	      <p style="font-family: CoolveticaRg-Regular;width: 100%;font-size: 20px;color: black;line-height: 0px;">
	      	Follow us on Instagram<br/></p>
	      <p style="font-family: CoolveticaRg-Regular;font-size: 40px;color: black;line-height: 30px;">
	      	@coastmodels</p>
	    </div>
	    <div class="photos" style="width: 100%;height: 400px;	background: #20C6CE;margin: -30px;margin-bottom: 10%;"></div>
    </div>
  </div>
	<!-- Conteudo - End -->
</div>
<?php
	$content .= ob_get_clean();
?>
