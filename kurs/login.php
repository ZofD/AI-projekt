<!Doctype html>
<html>
	<head>
		<title>
			DŁUGI kurs jezyka angielskiego
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/style_logIn.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobBe.css" />

		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>
		<script src="./js/jq_login.js"></script>

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
					<a href="index.php">Main page</a>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Gramar</a>
					<ul>
						<li><a href="gramatyka_present_countinuous.php">Present tenses</a></li>
						<li><a href="lorem_ipsum.php">Past tenses</a></li>
						<li><a href="lorem_ipsum.php">Future tenses</a></li>
						<li><a href="lorem_ipsum.php">Modal verbs</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Vocabulary</a>
					<ul>
						<li><a href="czlowiek.php">Human</a></li>
						<li><a href="lorem_ipsum.php">Home</a></li>
						<li><a href="lorem_ipsum.php">School</a></li>
						<li><a href="lorem_ipsum.php">Job</a></li>
						<li><a href="lorem_ipsum.php">Family and friends</a></li>
						<li><a href="lorem_ipsum.php">Food</a></li>
						<li><a href="idiomy.php">Idioms</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Phonetics</a>
					<ul>
						<li><a href="bee.php">Monophtongs</a></li>
						<li><a href="lorem_ipsum.php">Diphtongs and Triphtongs</a></li>
						<li><a href="lorem_ipsum.php">Plosives</a></li>
						<li><a href="lorem_ipsum.php">Fricatives</a></li>
						<li><a href="lorem_ipsum.php">Liquids and veral nasal</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Culture</a>
					<ul>
						<li><a href="geographical_identities.php">The country</a></li>
						<li><a href="lorem_ipsum.php">The people</a></li>
						<li><a href="lorem_ipsum.php">Politics and government</a></li>
						<li><a href="lorem_ipsum.php">International relations</a></li>
						<li><a href="lorem_ipsum.php">The legal system</a></li>
						<li><a href="lorem_ipsum.php">The economy</a></li>
						<li><a href="lorem_ipsum.php">Social services</a></li>
						<li><a href="lorem_ipsum.php">Education</a></li>
						<li><a href="lorem_ipsum.php">The media</a></li>
						<li><a href="lorem_ipsum.php">Religion</a></li>
						<li><a href="lorem_ipsum.php">Leisure, sports and the arts</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Log in</a>
				</div>
			</div>
			<div class="content contentLogIn">
				<div class="form offset-xl-4 offset-lg-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="">
                        <form action="user.php" method="POST">
							<h2>Logowanie do ENG</h2>
							<p>Login:</p>
							<input type="text" name="login"/>
							<p>Hasło:</p>
							<input type="text" name="password"/>
							<p>Nie posiadasz jeszcze konta? <a href="registration.php">Zarejestruj</a></p>
							<input class="button" type="submit" name="" value="Zaloguj"/>
						</form>
                    </div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>