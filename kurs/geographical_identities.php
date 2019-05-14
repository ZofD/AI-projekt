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
		<link rel="stylesheet" href="./css/style_culture.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobGI.css" />

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
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
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
					<h1>The country</h1>
					<div class = "subject">
						<h2>Geographical identities</h2>
						<p>Most British people identify themselves at one level with the larger political
						and geographical areas in which they live. The country’s title for
						constitutional and political purposes is the United Kingdom of Great
						Britain and Northern Ireland, with the short forms ‘UK’ and ‘Britain’ being
						used for convenience. It is part of those islands, known geographically
						as the British Isles (but more correctly as the British-Irish Islands), which
						lie off the north-west coast of continental Europe. The mainlands of
						England, Scotland and Wales form the largest island with the political title
						of Great Britain. Northern Ireland shares the second-largest island with
						the Republic of Ireland (Ireland or Eire), which has been independent of
						Britain since 1921–22. Smaller islands, such as Anglesey, the Isle of Wight,
						the Orkneys, Shetlands, Hebrides and Scillies, are also part of the British
						political union.
						But the Isle of Man in the Irish Sea and the Channel Islands off the
						French west coast are not part of the United Kingdom. They are selfgoverning
						Crown Dependencies which have a historical relationship with
						the British Crown and possess their own independent legal systems, legislatures
						and administrative structures. However, the British government is
						responsible for their defence and foreign relations and can intervene if good
						administration is not maintained.
						On a smaller level of geographical identification, Britain is often
						divided up into ‘regions’. These are not the same as local government
						10111
						10 The country
						structures (see Chapter 3). They can be politico-economic structures for
						British and EU purposes; assistance and development areas; or service
						locations for supplies of gas, water and electricity. They are often based,
						as in figure 1.3, on former economic planning regions. In 1999, Regional
						Development Agencies (RDAs) were created in England which cover the
						same areas.
						‘Regionalism’ and ‘localism’, as cultural factors, are significant in
						British life, but opinions differ on how strong they actually are. They can
						illustrate a sense of belonging, which becomes more evident with increasing
						distance from London and the UK government. They may reflect a determination
						by regional or local populations to assert their individual identities.
						These have increased in Scotland, Wales and (arguably) Northern
						Ireland with the devolution of political power from London and the establishment
						(1999–2000) of a Parliament in Edinburgh and Assemblies in
						Cardiff and Belfast. But smaller local government areas in these countries
						may well react to centralized power in the capital cities. Devolution has
						also provoked demands for greater autonomy in some English regions such
						as the north-east, and the RDAs may serve as future sites for devolved
						regional government in England.
						Identification with even smaller local areas was arguably more significant
						when the British were a rural people living in villages and were less
						mobile. But today, this identity may still be strongly focused on cities (such
						as Manchester, Liverpool, Glasgow, Belfast, London and Cardiff) or on
						English and Welsh counties rather than the larger regional areas.</p>			
					</div>
				</div>
				<div class="component_left">
					<div class="the_country">
						<h2>The country</h2>
						<a href="geographical_identities.html"><p>Geographical identities</p></a>
						<a href="lorem_ipsum.html"><p>Physical features and climate</p></a>
						<a href="lorem_ipsum.html"><p>Agriculture, fisheries and forestry</p></a>
						<a href="lorem_ipsum.html"><p>Energy resources</p></a>
						<a href="lorem_ipsum.html"><p>Transport and communications</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to the environment</p></a>
					</div>
					<div class="the_people">
						<h2>The people</h2>
						<a href="lorem_ipsum.html"><p>Early settlement to AD 1066</p></a>
						<a href="lorem_ipsum.html"><p>Growth and immigration to the twentieth century</p></a>
						<a href="lorem_ipsum.html"><p>Immigration from 1900</p></a>
						<a href="lorem_ipsum.html"><p>Population movements from 1900</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to national, regional and local identities</p></a>
					</div>
					<div class="politics_and_government">
						<h2>Politics and government</h2>
						<a href="lorem_ipsum.html"><p>Political history</p></a>
						<a href="lorem_ipsum.html"><p>The political framework</p></a>
						<a href="lorem_ipsum.html"><p>Constitution and monarchy</p></a>
						<a href="lorem_ipsum.html"><p>UK Parliament: role, legislation and elections</p></a>
						<a href="lorem_ipsum.html"><p>The party-political system</p></a>
						<a href="lorem_ipsum.html"><p>UK government</p></a>
						<a href="lorem_ipsum.html"><p>UK parliamentary control of government</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to politics</p></a>
					</div>
					<div class="international_relations">
						<h2>International relations</h2>
						<a href="lorem_ipsum.html"><p>Foreign and defence policy</p></a>
						<a href="lorem_ipsum.html"><p>Empire and Commonwealth</p></a>
						<a href="lorem_ipsum.html"><p>The European Union (EU)</p></a>
						<a href="lorem_ipsum.html"><p>Irish Republic and Northern Ireland</p></a>
					</div>
					<div class="the_legal_system">
						<h2>The legal system</h2>
						<a href="lorem_ipsum.html"><p>Legal history</p></a>
						<a href="lorem_ipsum.html"><p>Sources of British law</p></a>
						<a href="lorem_ipsum.html"><p>The court system in England and Wales</p></a>
						<a href="lorem_ipsum.html"><p>Civil and criminal proceedings</p></a>
						<a href="lorem_ipsum.html"><p>Law and order</p></a>
						<a href="lorem_ipsum.html"><p>The legal profession</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to law and order</p></a>
					</div>
					<div class="the_economy">
						<h2>The economy</h2>
						<a href="lorem_ipsum.html"><p>Economic history</p></a>
						<a href="lorem_ipsum.html"><p>The modern economy: policies, structure and performance</p></a>
						<a href="lorem_ipsum.html"><p>Social class, the workforce and employment</p></a>
						<a href="lorem_ipsum.html"><p>Financial institutions</p></a>
						<a href="lorem_ipsum.html"><p>Industrial and commercial institutions</p></a>
						<a href="lorem_ipsum.html"><p>Consumer protection</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to the economy</p></a>
					</div>
					<div class="social_services">
						<h2>Social services</h2>
						<a href="lorem_ipsum.html"><p>Social services history</p></a>
						<a href="lorem_ipsum.html"><p>Changing family and demographic structures</p></a>
						<a href="lorem_ipsum.html"><p>Social Security</p></a>
						<a href="lorem_ipsum.html"><p>The National Health Service (NHS)</p></a>
						<a href="lorem_ipsum.html"><p>The personal social services</p></a>
						<a href="lorem_ipsum.html"><p>Housing</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to the social services</p></a>
					</div>
					<div class="education">
						<h2>Education</h2>
						<a href="lorem_ipsum.html"><p>School history</p></a>
						<a href="lorem_ipsum.html"><p>The state school system</p></a>
						<a href="lorem_ipsum.html"><p>The independent (fee-paying) school sector</p></a>
						<a href="lorem_ipsum.html"><p>School organization and examinations</p></a>
						<a href="lorem_ipsum.html"><p>Higher education</p></a>
						<a href="lorem_ipsum.html"><p>Other higher education collaeges</p></a>
						<a href="lorem_ipsum.html"><p>Further, adult and lifelong education</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to education</p></a>
					</div>
					<div class="the_media">
						<h2>The media</h2>
						<a href="lorem_ipsum.html"><p>The print media</p></a>
						<a href="lorem_ipsum.html"><p>The broadcasting media</p></a>
						<a href="lorem_ipsum.html"><p>Media ownership and freedom of expression</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to the media</p></a>
					</div>
					<div class="religion">
						<h2>Religion</h2>
						<a href="lorem_ipsum.html"><p>Religious history</p></a>
						<a href="lorem_ipsum.html"><p>The Christian tradition</p></a>
						<a href="lorem_ipsum.html"><p>The Roman Catholic Church</p></a>
						<a href="lorem_ipsum.html"><p>The non-Christian tradition</p></a>
						<a href="lorem_ipsum.html"><p>Other non-Christian religions</p></a>
						<a href="lorem_ipsum.html"><p>Co-operation among the churches</p></a>
						<a href="lorem_ipsum.html"><p>Religion in schools</p></a>
						<a href="lorem_ipsum.html"><p>Religious membership and observance</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to religion and morality</p></a>
					</div>
					<div class="leisure_sports_and_the_arts">
						<h2>Leisure, sports and the arts</h2>
						<a href="lorem_ipsum.html"><p>Leisure activities</p></a>
						<a href="lorem_ipsum.html"><p>Sports</p></a>
						<a href="lorem_ipsum.html"><p>The arts</p></a>
						<a href="lorem_ipsum.html"><p>Attitudes to leisure, sports and the arts</p></a>
					</div>
				</div>
			</div>
			<footer>
			</footer>
		</div>
	</body>
</html>