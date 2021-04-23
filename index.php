<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Video Game Blog</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v1.1">
</head>
<body>
	<!-- header -->

	<header id="header">
		<!-- logo -->
		<div id="logo">
			<a href="index.php">
				<h1>Video Game Blog</h1>
			</a>
		</div>

		<!-- menu -->
		<div id="menu">
			<nav>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="index.php">Category 1</a>
					</li>
					<li>
						<a href="index.php">Category 2</a>
					</li>
					<li>
						<a href="index.php">Category 3</a>
					</li>
					<li>
						<a href="index.php">Category 4</a>
					</li>
					<li>
						<a href="index.php">About me</a>
					</li>
					<li>
						<a href="index.php">Contact</a>
					</li>
				</ul>
			</nav>
			<div class="clearfix"></div>
		</div>
	</header>

	<!-- sidebar -->

	<div id="container">
			<aside id="sidebar">
				<div id="signin" class="block-aside">
					<h3>Sign in</h3>
					<form action="signin.php" method="POST">
						<label for="signin-email">Email:</label>
						<input type="email" name="signin-email" id="signin-email">

						<label for="signin-password">Password:</label>
						<input type="password" name="signin-password" id="signin-password">

						<input type="submit" name="signin-submit" value="Sign in">
					</form>
				</div>
				<br>
				<div id="signup" class="block-aside">
					<h3>Sign up</h3>
					<form action="signup.php" method="POST">
						<label for="signup-name">Name:</label>
						<input type="text" name="signup-name" id="signup-name" placeholder="Name">

						<label for="signup-surname">Surname:</label>
						<input type="text" name="signup-surname" id="signup-surname" placeholder="Surname">

						<label for="signup-email">Email:</label>
						<input type="email" name="signup-email" id="signup-email">
						
						<label for="signup-password">Password:</label>
						<input type="password" name="signup-password" id="signup-password">

						<input type="submit" name="signup-submit" value="Sign up">
					</form>
				</div>
			</aside>
		

		<!-- main container -->

		<div id="main">
			<h1>Last entries</h1>

			<article class="entry">
				<a href="">
				<h2>Entry's title</h2>

				<p>
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Fuga, facilis ut deserunt, debitis, enim et inventore odio aliquam placeat aperiam est laborum beatae voluptas amet sequi alias magni, quas eius!
				</p>
				</a>
			</article>

			<article class="entry">
				<a href="">
				<h2>Entry's title</h2>

				<p>
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Fuga, facilis ut deserunt, debitis, enim et inventore odio aliquam placeat aperiam est laborum beatae voluptas amet sequi alias magni, quas eius!
				</p>
				</a>
			</article>

			<article class="entry">
				<a href="">
				<h2>Entry's title</h2>

				<p>
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Fuga, facilis ut deserunt, debitis, enim et inventore odio aliquam placeat aperiam est laborum beatae voluptas amet sequi alias magni, quas eius!
				</p>
				</a>
			</article>

			<article class="entry">
				<a href="">
				<h2>Entry's title</h2>

				<p>
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Fuga, facilis ut deserunt, debitis, enim et inventore odio aliquam placeat aperiam est laborum beatae voluptas amet sequi alias magni, quas eius!
				</p>
				</a>
			</article>

			<article class="entry">
				<a href="">
				<h2>Entry's title</h2>

				<p>
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Fuga, facilis ut deserunt, debitis, enim et inventore odio aliquam placeat aperiam est laborum beatae voluptas amet sequi alias magni, quas eius!
				</p>
				</a>
			</article>

			<div id="see-all">
				<a href="">See all entries</a>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer id="footer">
		<p>
			Developed by David Lozada - Copyleft <?= date("Y") ?>
		</p>
	</footer>
</body>
</html>