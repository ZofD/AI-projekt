<?php
	session_start();
?>
<!Doctype html>
<html>
	<head>
		<title>
			DŁUGI kurs jezyka angielskiego
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
			</header>
			<div class="menu_horizontal">
				<div>
					<a href="index.html">Główna</a>
				</div>
				<div class="menu_horizontal_curent">
					<a>Gramatyka</a>
					<ul>
						<li><a href="gramatyka_present_countinuous.html">Czasy teraźniejsze</a></li>
						<li><a href="">Czasy przeszłe</a></li>
						<li><a href="">Czasy przyszłe</a></li>
						<li><a href="">Czasowniki modalne</a></li>
					</ul>
				</div>
				<div>
					<a>Słownictwo</a>
					<ul>
						<li><a>lorem ipsum</a></li>
						<li><a>lorem ipsum</a></li>
					</ul>
				</div>
				<div>
					<a>Fonetyka</a>
					<ul>
						<li><a>lorem ipsum</a></li>
						<li><a>lorem ipsum</a></li>
					</ul>
				</div>
				<div>
					<a>Kultura</a>
					<ul>
						<li><a>lorem ipsum</a></li>
						<li><a>lorem ipsum</a></li>
					</ul>
				</div>
				<div>
					<?php
						if(isset($_SESSION['zalogowany'])){
							echo '<a href="logout.php">Log out</a>';
						}else{
							echo '<a href="login.php">Log in</a>';
						}
					?>
				</div>
			</div>
			<div class="content">
				<div class="content_right">
					<h1>Lorem ipsum</h1>
					<h2>Lorem ipsum</h2>
					<div>
						<h3>Lorem ipsum lorem ipsum</h3>
						<p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>			
						<h3 class="example">Lorem ipsum</h3>
						<p class="example">Lorem ipsum lorem ipsum lorem ipsum</p>
						<p class="example">Lorem ipsum lorem ipsum lorem ipsum</p>
						<div class="note">
							<h3 class="note">Lorem ipsum</h3>
							<p class="example">Lorem ipsum Lorem ipsum Lorem ipsum</p>
						</div>
					</div>
				</div>	
				<div class="content_left">
					<h2>Czasy teraźniejsze</h2>
					<a href="gramatyka_present_countinuous.html"><p>Present continuous</p></a>
					<a href="lorem_ipsum.html"><p>Present simple</p></a>
					<a href="lorem_ipsum.html"><p>Present perfect</p></a>
					<a href="lorem_ipsum.html"><p>Present perfect continuous</p></a>
					<h2>Czasy przeszłe</h2>
					<a href="lorem_ipsum.html"><p>Past continuous</p></a>
					<a href="lorem_ipsum.html"><p>Past simple</p></a>
					<a href="lorem_ipsum.html"><p>Past perfect</p></a>
					<a href="lorem_ipsum.html"><p>Past perfect continuous</p></a>
					<h2>Czasy przyszłe</h2>
					<a href="lorem_ipsum.html"><p>Future continuous</p></a>
					<a href="lorem_ipsum.html"><p>Future simple</p></a>
					<a href="lorem_ipsum.html"><p>Future perfect</p></a>
					<a href="lorem_ipsum.html"><p>Future perfect continuous</p></a>
					<h2>Czasy przyszłe w przeszłości</h2>
					<a href="lorem_ipsum.html"><p>Future continuous in the past</p></a>
					<a href="lorem_ipsum.html"><p>Future in the past</p></a>
					<a href="lorem_ipsum.html"><p>Future perfect in the past</p></a>
					<a href="lorem_ipsum.html"><p>Future perfect continuous in the past</p></a>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>