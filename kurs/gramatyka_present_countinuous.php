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
		<link rel="stylesheet" href="./css/styleMobGPT.css" />

		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/style_grammar.css">
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
				<?php
					if(isset($_SESSION['zalogowany'])){
						?>
						<div class="avatar">
							<a href="<?php if($_SESSION['admin'] == 1){echo "admin.php";}else{echo "user.php";} ?>"><div></div></a>
							<p><?php echo "Witaj ".$_SESSION['login']; ?></p>
						</div>
						<?php
					}
				?>
			</header>
			<div class="menu_horizontal col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<nav class="ham_button ham_button_def col-xl-0 col-lg-0 col-md-12  col-sm-12 col-12">
				</nav>
				<div class="menu_horizontal_mob col-12 col-sm-12 col-md-12 col-xl-2 col-lg-2   ">
					<a href="index.php">Main page</a>
				</div>
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Gramar</a>
					<ul>
						<li><a href="">Present tenses</a></li>
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
			<div class="content">
				<div class="component_right">
					<h1>PRESENT CONTINUOUS</h1>
					<div class = "subject">
						<h2>Zdania twierdzące</h2>
						<h3>To be + czasownik + ing</h3>
						<p>Czasownik w czasie Present Continuous składa się z dwóch
						elementów: czasownika posiłkowego to be odmienionego przez osoby 
						( I am, you are  itp. ) oraz czasownika głównego z dodaną 
						końcówką –ing.</p>			
						<h3 class="example">Przykład</h3>
						<p class="example">My boyfriend is watching a football match at 
						the moment.</p>
						<p class="example">Stop making such a noise! I’m trying to rest!</p>
					</div>
					<div class = "subject">
						<h2>Zmiany w pisowni</h2>
						<ul>
							<p>Dodając końcówkę –ing do niektórych czasowników, należy 
							wprowadzić pewne zmiany w pisowni:</p>	
							<li>W czasownikach jednosylabowych, zawierających krótką w 
							wymowie ( zwykle pojedynczą w pisowni ) samogłoskę i jednocześnie 
							zakończonych na pojedynczą spółgłoskę, spółgłoska ta ulega 
							podwojeniu:</li>
							<h3 class="example">Przykład</h3>
							<p class="example">get – getting</p>
							<p class="example">let – letting</p>
							<p class="example">put – putting</p>
							<div class="note">
								<h3 class="note">Uwaga!</h3>
								<p class="example">work – working ( na końcu czasownika mamy dwie 
								spółgłoski )</p>
								<p class="example">feel – feeling ( samogłoska jest długa [i:] – w 
								pisowni odpowiada jej ee )</p>
							</div>
							<li>W czasownikach dłuższych, jeśli ostatnia sylaba jest akcentowana 
							i kończy się pojedynczą spółgłoską również podwajamy ostatnią 
							spółgłoskę:</li>
							<h3 class="example">Przykład</h3>
							<p class="example">admit – admitting</p>
							<p class="example">begin – beginning</p>
							<p class="example">prefer – preferring</p>
							<p class="example">forget - forgetting</p>
							<div class="note">
								<h3 class="note">Uwaga!</h3>
								<p class="example">enter – entering ( akcent pada na pierwszą sylabę )</p>
							</div>
							<li>W czasownikach dwu i więcej sylabowych zakończonych na –l 
							( jeśli poprzedza je krótka samogłoska ) – podwajamy końcowe –l:</li>
							<p class="example">travel – travelling</p>
							<p class="example">signal – signalling</p>
							<div class="note">
								<h3 class="note">Uwaga!</h3>
								<p class="example">W amerykańskim angielskim powyższej reguły nie stosuje się 
								( Amerykanie napiszą: travelling, signaling ).</p>
							</div>
							<li>Jeśli czasownik kończy się na –e, samogłoska ta jest pomijana:</li>
							<h3 class="example">Przykład</h3>
							<p class="example">have – having</p>
							<p class="example">make – making</p>
							<p class="example">prepare – preparing</p>
							<li>Wyjątkiem są czasowniki zakończone na –ee, np.:</li>
							<h3 class="example">Przykład</h3>
							<p class="example">agree – agreeing</p>
							<p class="example">see – seeing</p>
							<p class="example">age – ageing</p>
							<p class="example">dye – dyeing</p>
						</ul>
					</div>
					<div class = "subject">
						<h2>Pytania i przeczenia</h2>
						<p>Pytania w czasie Present Continuous tworzymy, stosując szyk 
						przestawny, tzn. odwracając kolejność wyrazów w zdaniu. Porównajmy:</p>
						<h3 class="example">Przykład</h3>
						<p class="example">I am working at the moment.</p>
						<p class="example">Am I working at the moment?</p>
						<p class="example">She’s helping her mother.</p>
						<p class="example">Is she helping her mother?</p>
						<p>Przeczenia powstają przez zaprzeczenie czasownika posiłkowego 
						to be – czyli dodanie partykuły not do odmienionej przez osoby 
						formy tego czasownika:</p>
						<h3 class="example">Przykład</h3>
						<p class="example">It’s raining.</p>
						<p class="example">It’s not raining. / It isn’t raining.</p>
						<p class="example">My mum is cooking now.</p>
						<p class="example">My mum’s not cooking now.</p>
						<p class="example">I’m sleeping.</p>
						<p class="example">I’m not sleeping.</p>
					</div>
					<div class = "subject">
						<h2>Użycie</h2>
						<p>Czas Present Continuous służy do wyrażania czynności, które mają 
						miejsce w danej chwili, tzn. wtedy, gdy o nich mówimy:</p>
						<h3 class="example">Przykład</h3>
						<p class="example">Tom is hiding under the table.</p>
						<p class="example">Lucy is speaking to her sister in the phone.</p>
						<p class="example">Where are you going?</p>
						<p class="example">Look! It’s snowing again!</p>
					</div>	
					<div class = "subject">
						<h2>Okoliczniki czasu</h2>
						<p>Oto określenia czasu najbardziej charakterystyczne dla Present Continuous:</p>
						<h3 class="example">Przykład</h3>
						<p class="example">at the moment – w tej chwili</p>
						<p class="example">at present - obecnie</p>
						<p class="example">this week / month – w tym tygodniu / miesiącu</p>
						<p class="example">now - teraz</p>
						<p class="example">today - dzisiaj</p>
					</div>
					<div class="separator"></div>
					<?php
						if(isset($_SESSION['zalogowany'])){
							echo '<a href="test.php?id=Present%20continuous">';
						}else{
							echo '<a href="login.php">';
						}
					?>
						<h2 class="button">I'm ready for exam</h2>
					</a>
				</div>
				<div class="component_left">
					<div class="present_tenses">
						<h2>Present tenses</h2>
						<a href="gramatyka_present_countinuous.php"><p>Present continuous</p></a>
						<a href="lorem_ipsum.php"><p>Present simple</p></a>
						<a href="lorem_ipsum.php"><p>Present perfect</p></a>
						<a href="lorem_ipsum.php"><p>Present perfect continuous</p></a>
					</div>
					<div class="past_tenses">
						<h2>Past tenses</h2>
						<a href="lorem_ipsum.php"><p>Past continuous</p></a>
						<a href="lorem_ipsum.php"><p>Past simple</p></a>
						<a href="lorem_ipsum.php"><p>Past perfect</p></a>
						<a href="lorem_ipsum.php"><p>Past perfect continuous</p></a>
					</div>
					<div class="future_tenses">
						<h2>Future tenses</h2>
						<a href="lorem_ipsum.php"><p>Future continuous</p></a>
						<a href="lorem_ipsum.php"><p>Future simple</p></a>
						<a href="lorem_ipsum.php"><p>Future perfect</p></a>
						<a href="lorem_ipsum.php"><p>Future perfect continuous</p></a>
					</div>
					<div class="future_in_the_past_tenses">
						<h2>Future in the past tenses</h2>
						<a href="lorem_ipsum.php"><p>Future continuous in the past</p></a>
						<a href="lorem_ipsum.php"><p>Future in the past</p></a>
						<a href="lorem_ipsum.php"><p>Future perfect in the past</p></a>
						<a href="lorem_ipsum.php"><p>Future perfect continuous in the past</p></a>
					</div>
				</div>
			</div>
			<footer>
				<h5>Design & Code by Łukasz Kwaśny & Kamil Dziok</h5>
			</footer>
		</div>
	</body>
</html>