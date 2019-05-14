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
		<link rel="stylesheet" href="./css/style_grammar.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobId.css" />

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
			<nav class="menu_horizontal col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
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
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<?php
						if(isset($_SESSION['zalogowany'])){
							echo '<a href="logout.php">Log out</a>';
						}else{
							echo '<a href="login.php">Log in</a>';
						}
					?>
				</div>
			</nav>
			<div class="content">
				<div class="component_right">
					<h1>Idioms</h1>
					<div class = "subject">
						<h2>Co to są idiomy?</h2>
						<p>Każdy język zawiera pewne frazy wyrazowe, które nie mogą być rozumiane
						dosłownie. Nawet jeśli zna się pojedyncze słowa użyte w takiej frazie i rozumie jej
						układ gramatyczny, znaczenie nadal może pozostać tajemnicą. To właśnie jest
						najczęściej nazywane idiomem.</p>	 		
						<h3 class="example">Przykład</h3>
						<p class="example">It’s raining cats and dogs.</p>
						<p class="example">rozumiemy słowa rain , cat, dog, ale nic nam to nie pomoże, dopóki nie nauczymy
						się, że jest to bliski odpowiednik polskiego:</p>
						<p class="example">Leje jak z cebra.</p>
						<p>Idiomy w każdym języku, biorą się najprawdopodobniej z potrzeby nazywania
						nowych zjawisk i pojęć. Ale zamiast wymyślania nowych słów, ludzie wolą użyć
						pojęcie istniejące, nadając mu nowy sens. Tego typu zjawisko można zaobserwować
						niemal w każdym języku świata.
						Największa grupa idiomów to frazy kilku wyrazowe.</p>
						<h3 class="example">Przykład</h3>
						<p class="example">To kick the bucket</p>
						<p class="example">czyli polski sens umierać, który akurat w tym przypadku można wyrazić blisko popularnym
						polskim wyrażeniem</p>
						<p class="example">kopnąć w kalendarz</p>
						<p>Inna duża grupa idiomów, to czasowniki dwu wyrazowe</p>
						<h3 class="example">Przykład</h3>
						<p class="example">get up, turn off, put away</p>
						<p>Pod wzgledem "ilościowym" są one bliskie wyrażeniom rzeczownikowym, 
						takim jak hot dog czy bottom line - mogą one występować także w fufnkcjach przymiotnikowych.
						Jeszcze inna grupa to wyrażenia przysłówkowe</p>
						<h3 class="example">Przykład</h3>
						<p class="example">like mad, czy like crazy</p>
						<p>No i oczywiście powiedzenia oraz przysłowia, których w
						języku angielskim rzeczywiście nie brakuje</p>
						<h3 class="example">Przykład</h3>
						<p class="example">Don’t count your chickens before they’re hatched</p>
						<p class="example">czyli dosłownie Nie licz swoich kurczaków, zanim się one nie wyklują, a “po polsku”:
						Nie dziel skóry na niedźwiedziu.</p>
						<p>No właśnie, ten ostatni przykład pokazuje metodę tłumaczenia przyjętą w tym
						słowniku - przykłady angielskie są tłumaczone literacko lub opisowo. Znaczy to, że
						nie należy się przejmować “dosłownym” znaczeniem angielskim, które przecież
						byłoby dla Polaka albo śmieszne albo wręcz niezrozumiałe, a jedynie tym co jest
						najbardziej potrzebne, to znaczy właściwym przekazem znaczeniowym. Jeśli nie było
						możliwe znalezienie odpowiednika “codziennego”, czy wręcz “żargonowego”, idiom
						został przetłumaczony literacko. (Przy niektórych hasłach w nawiasach jest podane
						inne ujęcie znaczenia).</p>
					</div>
				</div>
				<div class="component_left">
					<div class="human">
						<h2>Human</h2>
						<a href="czlowiek.html"><p>Body parts</p></a>
						<a href="lorem_ipsum.html"><p>Personal information</p></a>
						<a href="lorem_ipsum.html"><p>Clothes and accessories</p></a>
						<a href="lorem_ipsum.html"><p>appearance</p></a>
						<a href="lorem_ipsum.html"><p>Personality</p></a>
						<a href="lorem_ipsum.html"><p>Feelings</p></a>
						<a href="lorem_ipsum.html"><p>Other expressions</p></a>
					</div>
					<div class="home">
						<h2>Home</h2>
						<a href="lorem_ipsum.html"><p>Rooms</p></a>
						<a href="lorem_ipsum.html"><p>Types of houses</p></a>
						<a href="lorem_ipsum.html"><p>Furniture</p></a>
						<a href="lorem_ipsum.html"><p>Conditions</p></a>
						<a href="lorem_ipsum.html"><p>Renting</p></a>
						<a href="lorem_ipsum.html"><p>Localisation</p></a>
						<a href="lorem_ipsum.html"><p>Houseworks</p></a>
					</div>
					<div class="school">
						<h2>School</h2>
						<a href="lorem_ipsum.html"><p>System of education</p></a>
						<a href="lorem_ipsum.html"><p>School subject</p></a>
						<a href="lorem_ipsum.html"><p>People in the school</p></a>
						<a href="lorem_ipsum.html"><p>Objects used at school</p></a>
						<a href="lorem_ipsum.html"><p>Places and rooms</p></a>
						<a href="lorem_ipsum.html"><p>Learning at school</p></a>
						<a href="lorem_ipsum.html"><p>Exams</p></a>
						<a href="lorem_ipsum.html"><p>School graduation</p></a>
					</div>
					<div class="job">
						<h2>Job</h2>
						<a href="lorem_ipsum.html"><p>Competitions</p></a>
						<a href="lorem_ipsum.html"><p>Adjectives describing work</p></a>
						<a href="lorem_ipsum.html"><p>Job search</p></a>
						<a href="lorem_ipsum.html"><p>Job and money</p></a>
						<a href="lorem_ipsum.html"><p>Workers</p></a>
						<a href="lorem_ipsum.html"><p>In a job</p></a>
						<a href="lorem_ipsum.html"><p>Holiday and vacation</p></a>
						<a href="lorem_ipsum.html"><p>Unemployment</p></a>
						<a href="lorem_ipsum.html"><p>Odd job</p></a>
					</div>
					<div class="family_and_friends">
						<h2>Family and friends</h2>
						<a href="lorem_ipsum.html"><p>Family members</p></a>
						<a href="lorem_ipsum.html"><p>Holidays and celebrations</p></a>
						<a href="lorem_ipsum.html"><p>Stages in human life</p></a>
						<a href="lorem_ipsum.html"><p>Marriage and children</p></a>
						<a href="lorem_ipsum.html"><p>Everyday activities</p></a>
						<a href="lorem_ipsum.html"><p>Leisure activities</p></a>
						<a href="lorem_ipsum.html"><p>Relationships</p></a>
						<a href="lorem_ipsum.html"><p>Lifestyle</p></a>
					</div>
					<div class="food">
						<h2>Food</h2>
						<a href="lorem_ipsum.html"><p>Food</p></a>
						<a href="lorem_ipsum.html"><p>Packaging</p></a>
						<a href="lorem_ipsum.html"><p>Adjectives describing nutrition</p></a>
						<a href="lorem_ipsum.html"><p>Preparing meals</p></a>
						<a href="lorem_ipsum.html"><p>Diets</p></a>
						<a href="lorem_ipsum.html"><p>Dining options</p></a>
					</div>
					<div class="idioms">
						<h2>Idioms</h2>
						<a href="idiomy.html"><p>Idioms</p></a>
						<a href="idiomy_przyklady.html"><p>Przykłady idiomów</p></a>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>