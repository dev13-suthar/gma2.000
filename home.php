
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

	<div class="container">
		<nav>
			<span class="logo">GameStore</span>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Contact Us</a></li>

				<li>
					<a href="#">Buy</a>

				</li>
				<li>
					<a href="#">Sell</a>
				</li>

			</ul>

			<!--search bar-->

			<div class="search-bar">
				<form action="">
					<ul>

						<li>
							<input type="text" placeholder="Search.." name="search">
						</li>
						<li>
							<button type="submit"><i class="fa fa-search"></i></button>
						</li>
					</ul>
				</form>
			</div>

			<img src="user.png" class="user" onclick="togglemenu()">





			<div class="sub-menu-wrap" id="submenu">
				<div class="sub-menu">
					<div class="user-info">
						<img src="user.png">
						<h2></h2>
					</div>
					<hr>
					<a href="editprofile.html" class="sub-menu-link">
						<img src="profile.png">
						<p>Edit Profile</p>
						<span>></span>
					</a>

					<a href="#" class="sub-menu-link">
						<img src="setting.png">
						<p>setting</p>
						<span>></span>
					</a>

					<a href="#" class="sub-menu-link">
						<img src="help.png">
						<p>Help us</p>
						<span>></span>
					</a>
					<a href="#" class="sub-menu-link">
						<img src="logout.png">
						<p>Histoy of cards</p>
						<span>></span>
					</a>


					<a href="#" class="sub-menu-link">
						<img src="logout.png">
						<p>Logout</p>
						<span>></span>
					</a>
				</div>
			</div>

		</nav>


		<hr style="color:#fff" size="8px">
		<!--  main section-->
		<!--recommended-->


		<div class="section1">
			<div class="card">
				<div class="image">
					<img src="pubg.jpg" alt="" />
				</div>
				<h2>Pubg account</h2>
				<p><b>Price : 400 &#x20B9;</b></p>
			</div>
			<div class="card">
				<div class="image">
					<img src="coc.jfif" alt="" />
				</div>
				<h2>Clash of Clan Account</h2>
				<p><b>Price : 5000 &#x20B9;</b></p>
			</div>
			<div class="card">
				<div class="image">
					<img src="cod.webp" alt="" />
				</div>
				<h2>Call of Duty Account</h2>
				<p><b>Price :3000 &#x20B9;</b></p>
			</div>
			<div class="card">
				<div class="image">
					<img src="cor.jpg" alt="" />
				</div>
				<h2>Clash of Royal</h2>
				<p><b>Price : 5000 &#x20B9;</b></p>
			</div>
		</div>

		<!-- Create footer part -->

		





	</div>


</body>

</html>

<script>



	let submenu = document.getElementById("submenu");

	function togglemenu() {
		submenu.classList.toggle("open-menu");

	}


</script>