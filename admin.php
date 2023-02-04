<?php require 'config.php'; 
$b_url = BASEURLGAME;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCOREBOARD | Game Night by Sam Carne | samcarne.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/gameplay.js"></script>
  <link rel="stylesheet/less" type="text/css" href="less/style.less" />
  <script src="https://cdn.jsdelivr.net/npm/less" ></script>
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <a class="navbar-brand" href="#">GAME NIGHT</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link" href="<?php BASEURL; ?>/fifthgrader/index.php">AYSTA5G?</a>
		  <!-- <a class="nav-item nav-link" href="<?php BASEURL; ?>/jeopardy/jeopardy/index.php">JEOPARDY!</a> -->
		  <a class="nav-item nav-link active" href="<?php BASEURL; ?>/jeopardy/lyricsquiz/index.php">LYRICS QUIZ</a>
		</div>
	  </div>
</nav>

<article class="container-fluid text-center">
	<div class="row content">
		<div class="scoreContainerAdmin">
			<div class="teamName">
			</div>
			<div class="teamScore">
			</div>
			<div class="scoreBtns">
				<button>+</button>
				<button>-</button>
			</div>
		</div>
	</div>
</article>

	
<footer class="container-fluid text-center">
  <p>Copyrights © <?php echo date("Y"); ?> Sam Carne. All Rights Reserved.</p>
</footer>

</body>
</html>    