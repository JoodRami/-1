<?php 
session_start();

include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}

 ?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html dir="rtl">
	<head>
		<title>ولاء للأسر المنتجة</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						
					<a href="login.php" class="logo" ><h1> أهلاً <?php echo $_SESSION['user_name']; ?></h1> <span></span></a>
					                         
						<nav>
							<a href="#menu">قائمة</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
						<li><a href="foods.php">مأكولات</a></li>
							<li><a href="beauty.php">مستلزمات تجميل</a></li>
							<li><a href="care.php">عناية</a></li>
                             <li><a href="abayas.php">عبايات</a></li>
                             <li><a href="crafts.php">اعمال يدوية</a></li>
                            <li><a href="aacories.php">اكسسوارات</a></li>
				
						</ul>
						<ul class="actions stacked">
							<li><a href="loginPage.php" class="button primary fit">تسجيل دخول</a></li>
							<li><a href="signup.php" class="button fit">مستخدم جديد</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>متجر ولاء</h1>
							</header>
							<div class="content">
								<h3>متجر ولاء لدعم الاسر المنتجة</h3>
                                 <spane class="image main"> <img src="images/g.png"/> </spane>
								
								<ul class="actions">
									
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main" class="alt">
   
						<!-- One -->
							<section id="one" class="tiles">

								<article>
									<span class="image">
										<img src="images/food.png" alt="" />
									</span>
									<header class="major">
                                                           
										<h2><a href="foods.php" class="link">مأكولات</a></h2>
										<h4>مختصين في الطبخ</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/abaya.jpeg" alt="" />
									</span>
									<header class="major">
										<h2><a href="abayas.php" class="link">عبايات</a></h2>
										<h4>مختصين في العبايات</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pp.png" alt="" />
									</span>
									<header class="major">
										<h2><a href="beauty.php" class="link">مستلزمات تجميل</a></h2>
										<h4>أفضل منتجات التجميل</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/jj.png" alt="" />
									</span>
									<header class="major">
										<h2><a href="care.php" class="link">عناية</a></h2>
										<h4>أفضل المنجات للعناية بالبشرة</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/kk.png" alt="" />
									</span>
									<header class="major">
										<h2><a href="aacories.php" class="link">اكسسوارات</a></h2>
										<h4>مختصين في صناعة الاكسسوارات (لأناقتك)</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/cc2.png" alt="" />
									</span>
									<header class="major">
										<h2><a href="crafts.php" class="link">أعمال يدوية</a></h2>
										<h4>مختصين في الأعمال اليدوية </h4>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>ولاء</h2>
									</header>
									<p>متجر او موقع ولاء مخصص لدعم الأسر المنتجة وتقديم ربحهم وتفوقهم كأولوية قصوى</p>
									<ul class="actions">
									
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
						
							<form action="comments.php" method="post">
	 <button type="submit"  name="add" onclick="add()">إضافة تعليق</button>
								</form>
							</section>
							


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

