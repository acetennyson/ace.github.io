<?php
include("head.php");
if (!isset($_SESSION['user'])) {
  # code...
	header("Location: index.php");
}
?>
<div class="inline">

<div class="left">
	<h3><strong>

		<?php if(date("H")< 12) {
			echo "Good Morning Sir, ".$_SESSION['user'];
		}elseif (12<=date("H") && date("H")< 18) {
			echo "Good Day Sir, ".$_SESSION['user']; 
		}else{
			echo "Good Evening Sir, ".$_SESSION['user'];
		}?>
			
		</strong></h3>
	<br>
	<div class="bar">
		<ul>
			<li class="li"><a href="profile.php"><strong>Newsfeed</a></li>
			<li class="li"><a href="games.php">Games</a></li>
			<li class="li"><a href="musics.php">Musics</a></li>
			<li class="li"><a href="videos.php">Videos</a></strong></li>
		</ul>
	</div>
</div>
<div class="right">
	<h2><strong>Login Shit</strong></h2>
	Hey Bitch, Lucky for you, you're logged in...<br>
</div>

<div class="middle">
<div class="form">
	
</div>
	<div id="vid1">
		<div class="butt"><button class="cancel" title="cancel" onclick="cancel()">X</button></div>
		<video width="420px" controls class="video1">
		<source src= "videos\Joeboy - Door (feat. Kwesi Arthur) [Official Video].mp4" type="video/mp4">
	</video>
	<marquee> Entertainment</marquee>
	</div>

</div>

</div>

<script type="text/javascript">
	function cancel() {
		// body...
		document.getElementById('vid1').style="visibility: hidden";
	}
</script>
</body>
</html>
