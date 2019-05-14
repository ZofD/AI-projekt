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
		<link rel="stylesheet" href="./css/styleMobBe.css" />

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
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
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
			</div>
			<div class="content">
				<div class="component_right">
					<h1>Monophtongs</h1>
					<div class = "subject">
						<h2>/i:/</h2>
						<h2 >Words for practise</h2>
						<p class="example">ease - / i:z /</p>
						<p class="example">bee - / bi: /</p>
						<p class="example">tree - / tri: /</p>
						<p class="example">clean - / kli:n /</p>
						<p class="example">thief - / θi:f /</p>
						<p class="example">cheese - / tʃi:z /</p>
						<p class="example">previous - / 'pri:viəs /</p>
						<p class="example">succeed - / sək'si:d /</p>
						<h2>Words for practise 2</h2>
						<p class="example">kneel - / ni:l /</p>
						<p class="example">seize - / si:z /</p>
						<p class="example">sequel - / si:kwəl /</p>
						<p class="example">heathen - / hi:ðən /</p>
						<p class="example">mosquito - / mə'ski:təʊ /</p>
						<p class="example">jubilee - / 'd3u:bili: /</p>
						<p class="example">antique - / æn'ti:k /</p>
						<p class="example">magazine - / mægə'zi:n /</p>
						<h2>Tongue twisters</h2>
						<p class="bee">thieves seize skis</p>
						<p class="bee">A pale pink proud peacock pompously preened its pretty plumage</p>
						<p class="bee">An artist went to sea to see hat he could see at sea to draw but all the artist saw at
						sea is what we always see at sea - see?</p>
					</div>
				</div>	
				<div class="component_left">
					<div class="monophtongs">
						<h2>Monophtongs</h2>
						<a href="bee.html"><p>/ i: /</p></a>
						<a href="lorem_ipsum.html"><p>/ ɪ /</p></a>
						<a href="lorem_ipsum.html"><p>/ e /</p></a>
						<a href="lorem_ipsum.html"><p>/ æ /</p></a>
						<a href="lorem_ipsum.html"><p>/ ɑ: /</p></a>
						<a href="lorem_ipsum.html"><p>/ ʌ /</p></a>
						<a href="lorem_ipsum.html"><p>/ o /</p></a>
						<a href="lorem_ipsum.html"><p>/ ɔ: /</p></a>
						<a href="lorem_ipsum.html"><p>/ ʊ /</p></a>
						<a href="lorem_ipsum.html"><p>/ u: /</p></a>
						<a href="lorem_ipsum.html"><p>/ ʒ: /</p></a>
						<a href="lorem_ipsum.html"><p>/ ə /</p></a>
					</div>
					<div class="diphtongs_and_triphtongs">
						<h2>Diphtongs and Triphtongs</h2>
						<a href="lorem_ipsum.html"><p>/ eɪ /</p></a>
						<a href="lorem_ipsum.html"><p>/ aɪ /</p></a>
						<a href="lorem_ipsum.html"><p>/ ɔɪ /</p></a>
						<a href="lorem_ipsum.html"><p>/ aʊ /</p></a>
						<a href="lorem_ipsum.html"><p>/ əʊ /</p></a>
						<a href="lorem_ipsum.html"><p>/ ɪə /</p></a>
						<a href="lorem_ipsum.html"><p>/ eə /</p></a>
						<a href="lorem_ipsum.html"><p>/ ʊə /</p></a>
						<a href="lorem_ipsum.html"><p>/ aɪə /,/ eɪə /,/ aʊə /</p></a>
					</div>
					<div class="plosives">
						<h2>Plosives</h2>
						<a href="lorem_ipsum.html"><p>/ p /</p></a>
						<a href="lorem_ipsum.html"><p>/ t /</p></a>
						<a href="lorem_ipsum.html"><p>/ k /</p></a>
						<a href="lorem_ipsum.html"><p>/ b /</p></a>
						<a href="lorem_ipsum.html"><p>/ d /</p></a>
						<a href="lorem_ipsum.html"><p>/ g /</p></a>
					</div>
					<div class="fricatives">
						<h2>Fricatives</h2>
						<a href="lorem_ipsum.html"><p>/ θ /</p></a>
						<a href="lorem_ipsum.html"><p>/ ð /</p></a>
						<a href="lorem_ipsum.html"><p>/ s /</p></a>
						<a href="lorem_ipsum.html"><p>/ z /</p></a>
					</div>
					<div class="liquids_and_veral_nasal">
						<h2>Liquids and veral nasal</h2>
						<a href="lorem_ipsum.html"><p>/ l /</p></a>
						<a href="lorem_ipsum.html"><p>/ r /</p></a>
						<a href="lorem_ipsum.html"><p>/ ŋ /</p></a>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>