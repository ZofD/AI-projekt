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
		<link rel="stylesheet" href="./css/style_words.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobId.css" />

		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>
		<script src="./js/js_idiomy.js"></script>

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
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
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
			<div class="content">
				<div class="component_right">
					<h1>Idioms</h1>
					<div class="words">
						<div>
							<div class = "previous" onclick="previous()">
							</div>
							<div class = "translation">
								<p id="polish">A-1<br>This hunters' stew is really A-1!</p>
								<p id="english">Ten bigos jest naprawdę pierwsza klasa!</p>
							</div>
							<div class = "next" onclick="next()">
							</div>
						</div>
						<div>
							<h2 class="button">Show</h2>
							<div></div>
							<?php
								if(isset($_SESSION['zalogowany'])){
									echo '<a href="user.php">';
								}else{
									echo '<a href="login.php">';
								}
							?>
								<h2 class="button">I'm ready for exam</h2>
							</a>
						</div>
					</div>
				</div>	
				<div class="component_left">
					<div class="human">
						<h2>Human</h2>
						<a href="czlowiek.php"><p>Body parts</p></a>
						<a href="lorem_ipsum.php"><p>Personal information</p></a>
						<a href="lorem_ipsum.php"><p>Clothes and accessories</p></a>
						<a href="lorem_ipsum.php"><p>appearance</p></a>
						<a href="lorem_ipsum.php"><p>Personality</p></a>
						<a href="lorem_ipsum.php"><p>Feelings</p></a>
						<a href="lorem_ipsum.php"><p>Other expressions</p></a>
					</div>
					<div class="home">
						<h2>Home</h2>
						<a href="lorem_ipsum.php"><p>Rooms</p></a>
						<a href="lorem_ipsum.php"><p>Types of houses</p></a>
						<a href="lorem_ipsum.php"><p>Furniture</p></a>
						<a href="lorem_ipsum.php"><p>Conditions</p></a>
						<a href="lorem_ipsum.php"><p>Renting</p></a>
						<a href="lorem_ipsum.php"><p>Localisation</p></a>
						<a href="lorem_ipsum.php"><p>Houseworks</p></a>
					</div>
					<div class="school">
						<h2>School</h2>
						<a href="lorem_ipsum.php"><p>System of education</p></a>
						<a href="lorem_ipsum.php"><p>School subject</p></a>
						<a href="lorem_ipsum.php"><p>People in the school</p></a>
						<a href="lorem_ipsum.php"><p>Objects used at school</p></a>
						<a href="lorem_ipsum.php"><p>Places and rooms</p></a>
						<a href="lorem_ipsum.php"><p>Learning at school</p></a>
						<a href="lorem_ipsum.php"><p>Exams</p></a>
						<a href="lorem_ipsum.php"><p>School graduation</p></a>
					</div>
					<div class="job">
						<h2>Job</h2>
						<a href="lorem_ipsum.php"><p>Competitions</p></a>
						<a href="lorem_ipsum.php"><p>Adjectives describing work</p></a>
						<a href="lorem_ipsum.php"><p>Job search</p></a>
						<a href="lorem_ipsum.php"><p>Job and money</p></a>
						<a href="lorem_ipsum.php"><p>Workers</p></a>
						<a href="lorem_ipsum.php"><p>In a job</p></a>
						<a href="lorem_ipsum.php"><p>Holiday and vacation</p></a>
						<a href="lorem_ipsum.php"><p>Unemployment</p></a>
						<a href="lorem_ipsum.php"><p>Odd job</p></a>
					</div>
					<div class="family_and_friends">
						<h2>Family and friends</h2>
						<a href="lorem_ipsum.php"><p>Family members</p></a>
						<a href="lorem_ipsum.php"><p>Holidays and celebrations</p></a>
						<a href="lorem_ipsum.php"><p>Stages in human life</p></a>
						<a href="lorem_ipsum.php"><p>Marriage and children</p></a>
						<a href="lorem_ipsum.php"><p>Everyday activities</p></a>
						<a href="lorem_ipsum.php"><p>Leisure activities</p></a>
						<a href="lorem_ipsum.php"><p>Relationships</p></a>
						<a href="lorem_ipsum.php"><p>Lifestyle</p></a>
					</div>
					<div class="food">
						<h2>Food</h2>
						<a href="lorem_ipsum.php"><p>Food</p></a>
						<a href="lorem_ipsum.php"><p>Packaging</p></a>
						<a href="lorem_ipsum.php"><p>Adjectives describing nutrition</p></a>
						<a href="lorem_ipsum.php"><p>Preparing meals</p></a>
						<a href="lorem_ipsum.php"><p>Diets</p></a>
						<a href="lorem_ipsum.php"><p>Dining options</p></a>
					</div>
					<div class="idioms">
						<h2>Idioms</h2>
						<a href="idiomy.php"><p>Idioms</p></a>
						<a href="idiomy_przyklady.php"><p>Przykłady idiomów</p></a>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>