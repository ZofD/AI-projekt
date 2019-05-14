<?php
	session_start();
	if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}
?>
<!Doctype html>
<html>
	<head>
		<title>
			DŁUGI kurs jezyka angielskiego
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobGPT.css" />

		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/style_user.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>

		<script src="./js/jq_menuMob.js"></script>

		<!--	Bootstrap 4.3.1		-->

		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap-grid.css" />
		<script src="./bootstrap-4.3.1-dist/js/bootstrap.js"></script>
		
	</head>
	<body>
		<div id="container" class="container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<header>
				<img src="img/logo.png">
			</header>
			<div class="menu_horizontal col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<nav class="ham_button ham_button_def col-xl-0 col-lg-0 col-md-12  col-sm-12 col-12">
				</nav>
				<div class="menu_horizontal_mob col-12 col-sm-12 col-md-12 col-xl-2 col-lg-2   ">
					<a href="index.html">Main page</a>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Gramar</a>
					<ul>
						<li><a href="gramatyka_present_countinuous.html">Present tenses</a></li>
						<li><a href="lorem_ipsum.html">Past tenses</a></li>
						<li><a href="lorem_ipsum.html">Future tenses</a></li>
						<li><a href="lorem_ipsum.html">Modal verbs</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Vocabulary</a>
					<ul>
						<li><a href="czlowiek.html">Human</a></li>
						<li><a href="lorem_ipsum.html">Home</a></li>
						<li><a href="lorem_ipsum.html">School</a></li>
						<li><a href="lorem_ipsum.html">Job</a></li>
						<li><a href="lorem_ipsum.html">Family and friends</a></li>
						<li><a href="lorem_ipsum.html">Food</a></li>
						<li><a href="idiomy.html">Idioms</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Phonetics</a>
					<ul>
						<li><a href="bee.html">Monophtongs</a></li>
						<li><a href="lorem_ipsum.html">Diphtongs and Triphtongs</a></li>
						<li><a href="lorem_ipsum.html">Plosives</a></li>
						<li><a href="lorem_ipsum.html">Fricatives</a></li>
						<li><a href="lorem_ipsum.html">Liquids and veral nasal</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Culture</a>
					<ul>
						<li><a href="geographical_identities.html">The country</a></li>
						<li><a href="lorem_ipsum.html">The people</a></li>
						<li><a href="lorem_ipsum.html">Politics and government</a></li>
						<li><a href="lorem_ipsum.html">International relations</a></li>
						<li><a href="lorem_ipsum.html">The legal system</a></li>
						<li><a href="lorem_ipsum.html">The economy</a></li>
						<li><a href="lorem_ipsum.html">Social services</a></li>
						<li><a href="lorem_ipsum.html">Education</a></li>
						<li><a href="lorem_ipsum.html">The media</a></li>
						<li><a href="lorem_ipsum.html">Religion</a></li>
						<li><a href="lorem_ipsum.html">Leisure, sports and the arts</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a href="logout.php">Log out</a>
				</div>
			</div>
			<div class="content">
				<div class="component_right">
                    <h1>Dostępne testy</h1>
                    <div class="box">
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
						</div>
						<div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                        <div>
                            <h2>test 1<a class="button">Do testu</a></h2>
                        </div>
                    </div>
				</div>
				<div class="component_left">
                    <div class="settings">
                        <h2>ustawienia</h2>
                        <p>e-mail: example@interia.pl</p>
                        <p>e-mail: example@interia.pl</p>
                        <p>e-mail: example@interia.pl</p>
                        <h2>bezpieczenstwo</h2>
                        <p>e-mail: example@interia.pl</p>
                        <p>e-mail: example@interia.pl</p>
                        <p>e-mail: example@interia.pl</p>
                    </div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>