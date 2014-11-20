<header id="SiteHeader">
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#koki-navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--<a class="navbar-brand" href="#">-->
			<div style="float:left">
				<img alt="Brand" src="/_/img/inuk_logo.png" style="height:60px">
			</div>
			<!--</a>-->
		</div>
		<div class="collapse navbar-collapse" id="koki-navbar">
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#" class="koLink">NEWS</a></li>-->
				<?php
					if($_SERVER['PHP_SELF'] == '/index.php') {
						echo '<li><a href="/" class="koLink koLinkActive">PRODUKTE</a></li>';
						echo '<li><a href="/kollektiv.php" class="koLink">KOLLEKTIV</a></li>';
					} elseif($_SERVER['PHP_SELF'] == '/kollektiv.php') {
						echo '<li><a href="/" class="koLink">PRODUKTE</a></li>';
						echo '<li><a href="/kollektiv.php" class="koLink koLinkActive">KOLLEKTIV</a></li>';
					} else {
						echo '<li><a href="/" class="koLink koLinkActive">PRODUKTE</a></li>';
						echo '<li><a href="/kollektiv.php" class="koLink">KOLLEKTIV</a></li>';
					}

				?>
			</ul>
		</div>
	</div>
</nav>
</header>


