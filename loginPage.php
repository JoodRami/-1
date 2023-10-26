<?php 
session_start();

include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {}

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<style>
		div.a{ text-align:center;
		}
		</style>
		 
		 <div class ="a">
	
		 <form action="login.php" method="post">

<div id="main" class="alt">
			<!--banner-->
	 <section>
						<div class="inner">
							<header class="major">
								<h1>  تسجيل الدخول لمتجر ولاء</h1>
							</header>
					
                                 <spane class="image main"> <img src="images/g.png"/> </spane>
								
						
						</div>
					</section>
									

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
		
     	<label>User name </label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label> Password </label>
     	<input type="password" name="password" placeholder="Password"><br>

		 <a href="home.php" class="button">تسجيل الدخول </a>
		 <a href="signup.php" class="button">مستخدم جديد</a>

		 </form>
		 
		

	 </div>
</body>
</html>