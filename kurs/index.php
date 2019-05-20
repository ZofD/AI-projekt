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

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="stylesheet" href="./css/style_main_page.css">
		<link rel="stylesheet" href="./css/style1280.css" />
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
				<?php
					if(isset($_SESSION['zalogowany'])){
						echo '
						<div class="avatar">
							<a href="user.php"><div></div></a>
							<p>Witaj '.$_SESSION['login'].'</p>
						</div>
						';
					}
				?>
			</header>
			<div class="menu_horizontal col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<nav class="ham_button ham_button_def col-xl-0 col-lg-0 col-md-12  col-sm-12 col-12">
				</nav>
				<div class="menu_horizontal_curent menu_horizontal_mob col-12 col-sm-12 col-md-12 col-xl-2 col-lg-2   ">
					<a>Main  page</a>
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
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<?php
						if(isset($_SESSION['zalogowany'])){
							echo '<a href="logout.php">Log out</a>';
						}else{
							echo '<a href="login.php">Log in</a>';
						}
					?>
				</div>
			</div>
			<div class="content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="component">
					<div class="img main_img_mob_first_img offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
					<img src="img/ksiazka.png" />
					</div>
					<div class="text main_text_mob_first_img  offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Kto najlepiej skorzysta z naszego kursu?</h1>
						<h2>Nasz kurs jes dedykowany osobom z podstawowymi 
						zdolnośćiami z języka angielskiego, które pragną 
						rozwijać swoje umiejętności.</h2>
					</div>
				</div>
				<div class = "component">
					<div class="text main_text_mob_first_text offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Czego dokładnie się nauczycie?</h1>
						<h2>Nasz kurs obejmuje słownictwo, gramatykę i fonetyke 
						na poziomie B1. Do działu słownictwo dodaliśmy dodatkową 
						trudniejszą zawartość, do tego, dział kultura jest cala po
						angielsku.</h2>
					</div>
					<div class="img main_img_mob_first_text offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazki.png" />
					</div>
				</div>
				<div class = "component">
					<div class="img main_img_mob_first_img offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazka.png" />
					</div>
					<div class="text main_text_mob_first_img  offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Jak wygląda system kształcenia?</h1>
						<h2>To ty decydujesz jak się bedziesz uczył. My tylko
						dostarczamy ci niezbęłdnych narzędzi. Materiał podzieliliśmy
						na trzy części: gramatyka, słownictwo i fonetyka.</h2>
					</div>
				</div>
				<div class = "component">
					<div class="text main_text_mob_first_text offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Gramatyka</h1>
						<h2>W tej części znajdują się wszystkie struktury
						gramatyczne podzielone na osobne działy. Pod koniec każdego
						działu znajduje się test sprawdzający. Jego zaliczenie jest 
						konieczne do uzyskania nagrody.</h2>
						<div class="button_main">
						<a href="gramatyka_present_countinuous.php"><h2>do nauki</h2></a>
						</div>
					</div>
					<div class="img main_img_mob_first_text offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazki.png" />
					</div>
				</div>
				<div class = "component">
					<div class="img main_img_mob_first_img offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazka.png" />
					</div>
					<div class="text main_text_mob_first_img  offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Słownictwo</h1>
						<h2>Dział słownictwo został podzielony tematycznie, 
						tak jak w szkole ;) Każdy dział kończy się testem 
						sprawdzającym.</h2>
						<div class="button_main">
						<a href="czlowiek.php"><h2>do nauki</h2></a>
						</div>
					</div>
				</div>
				<div class = "component">
					<div class="text main_text_mob_first_text offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Fonetyka</h1>
						<h2>Ta część wyjątkowo nie kończy się testem. Znajdują sie 
						tu zagadnienia dotyczące poprawnej wymowy ( brytyjskiej ).</h2>
						<div class="button_main">
						<a href="bee.php"><h2>do nauki</h2></a>
						</div>
					</div>
					<div class="img main_img_mob_first_text offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazki.png" />
					</div>
				</div>
				<div class = "component">
					<div class="img main_img_mob_first_img offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazka.png" />
					</div>
					<div class="text main_text_mob_first_img  offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Kultura</h1>
						<h2>Kultura to dział dla ludzi, którzy np. planują 
						pozostać w krajach anglojęzycznych na dlużej.</h2>
						<div class="button_main">
						<a href="geographical_identities.php"><h2>do nauki</h2></a>
						</div>
					</div>
				</div>
				<div class = "component">
					<div class="text main_text_mob_first_text offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Nagroda</h1>
						<h2>Ukończenie naszego kursu daje ci nie tylko bezcenną
						wiedzę. Po zdaniu wszystkich testów dostajecie certyfikat.</h2>
					</div>
					<div class="img main_img_mob_first_text offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazki.png" />
					</div>
				</div>
				<div class = "component">
					<div class="img main_img_mob_first_img offset-xl-1 offset-lg-1 offset-md-3 offset-sm-1 col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12">
						<img src="img/ksiazka.png" />
					</div>
					<div class="text main_text_mob_first_img  offset-xl-1 offset-lg-0 offset-md-2 offset-sm-1 col-xl-7 col-lg-6 col-md-8 col-sm-10 col-12">
						<h1>Avatar</h1>
						<h2>W celu otrzymania certyfikatu należy założyć konto,
						abyśmy mogli zapisywać wyniki twojej nauki.</h2>
						<div class="button_main">
						<a href="registration.php"><h2>załóż konto</h2></a>
						</div>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>