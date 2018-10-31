<?php
include"pengaturan.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>I Love You <?php echo $cewe; ?></title>

<style type="text/css">
@font-face {
	font-family: digit;
	src: url('digital-7_mono.ttf') format("truetype");
}
</style>

<link href="css/default.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/garden.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</head>

<body>

<div id="mainDiv">
	<div id="content">
		<div id="code">
			<span class="comments">/**</span><br />
			<span class="space"/><span class="comments">Today: <?php echo $skrng; ?>,</span><br />
			<span class="space"/><span class="comments">**/</span><br />
			Boy name = <span class="keyword"><a href="https://instagram.com/<?php echo $usernameIGcowo; ?>/"><?php echo $cowo; ?></a></span><br />
			Girl name = <span class="keyword"><a href="https://www.instagram.com/<?php echo $usernameIGcewe; ?>/"><?php echo $cewe; ?></a></span><br />
			<br/>
			<span class="comments">// Kamu datang disaat aku sedang Shut Down,Hybernate dan Standby </span><br />
			Saat kubuka Windows kamarku di pagi hari, aku melihat Screensaver wajahmu di awan.<br />
			<span class="comments">// Wajahmu cantik,bagaikan di edit dengan Photoshop, Photoscape atau aplikasi grafis lainnya</span><br />
			Tak pernah mataku buffer memandangmu... kulitmu Lembut bagaikan kulit Apple terus menari di Opera dalam pikiranku..<br />
			<span class="comments">// Kamulah My Dreamweaver ku<br/>
			Kamulah Oracle...<br/>
Kamu selalu Online di hatiku saat yang lain offline. <br/>
Saat baru Booting ku selalu mendoakanmu <br/>
Aku adalah Spyware mu<br/>
Aku mencari tahu Favorites dan History mu<br/>
Aku melakukkan checkdisk dan diskclean upuntukmu...</span><br />
			Kadang RAM-ku tak cukup kuat memikirkanmu,<br />
kadang kau membuatku hang dan crashed,<br />
Hardware ku selalu panas...<br />
Kau adalah virus firstlove.exe yang menyerang ke seluruh tubuhku<br />
			<span class="comments">Avira,AVG, Smadav ataupun antivirus terhebat sekalpun pun tak bisa me remove mu... <br />
Kadang ku mau Format, bahkan install ulang diriku<br />
agar aku bisa me remove mu dari hardisk ku<br />
karena ku tak bisa uninstall ataupun delete kamu.<br />
karena kau sudah di Write-Protected di hatiku...<br />
Dan data datamu sudah aku Back-up di otakku..<br />
Maaf selama ini aku tak bisa directX<br />
mengungkapkan perasaanku padamu<br />
aku tak bisa command prompt diriku..<br />
sebagai gantinya, selama ini aku hanya mengirim spam saja padamu<br />
atau hanya sinyal lewat wireless..</span><br />
			karena jadwal maintenance ku.<br />
Aku tak bisa menekan CTRL+alt+Delete...<br />
Karena Task manager has been disabled by administrator<br />
Tapi kenapa jika kita bertemu aku selalu Not Responding... <br />
Dengan melihatmu pikiranku langsung Ubuntu...<br />
Padahal bahasa pemrograman kita sama,<br />
<span class="keyword">Bahasa Java...</span><br />
			<span class="comments">// Tolong jangan Close this Program <br />
Karena if you close this program you might lose information <br />
Aku mohon Wait until this Program Responding. <br />
Allow access this Program <br />
Atau Turn off Firewall mu.<br />
Hatiku ini Open Sources...</span><br />
			<span class="comments">// Aku ingin Upload hatiku untukmu dan Download hatimu untukku<br />
Aku yakin suatu saat nanti kita akan menjadi suatu Embedded System..</span><br />
			<span class="keyword">Dan kita bisa Plug and Play...<br />
Aku tak akan mempartisi Disk ku untuk yang lain. <br />
Aku ingin diriku ini kau Bookmark <br />
Dan kau jadikan My Favorites... Di Server ini....<br />
			<br>
			<br>
			I want to say:<br />
			Baby, I love you forever;<br />
		</div>
		<div id="loveHeart">
			<canvas id="garden"></canvas>
			<div id="words">
				<div id="messages">
					I Love You <?php echo $cewe; ?><br/>
					Jangan Genit Genit Yak Hehe
	
				</div>
				<div id="loveu">
					From<br/>
					<div class="signature">- <?php echo $cowo; ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var offsetX = $("#loveHeart").width() / 2;
var offsetY = $("#loveHeart").height() / 2 - 55;
var together = new Date();
together.setFullYear(2018, 12, 15);
together.setHours(20);
together.setMinutes(0);
together.setSeconds(0);
together.setMilliseconds(0);

if (!document.createElement('canvas').getContext) {
	var msg = document.createElement("div");
	msg.id = "errorMsg";
	msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
	document.body.appendChild(msg);
	$("#code").css("display", "none")
	$("#copyright").css("position", "absolute");
	$("#copyright").css("bottom", "10px");
	document.execCommand("stop");
} else {
	setTimeout(function () {
		startHeartAnimation();
	}, 5000);

	timeElapse(together);
	setInterval(function () {
		timeElapse(together);
	}, 500);

	adjustCodePosition();
	$("#code").typewriter();
}
</script>
</body>
</html>
