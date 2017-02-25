<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="scripts/jq/jquery-3.1.1.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
<link rel="stylesheet" href="styles/style.css" />
<link rel="stylesheet" href="styles/extend.css" />
<link rel="shortcut icon" type="image/png"
	href="images/persistent-favicon.png" />
<title>eWaste Management App</title>
</head>
<body>
	<img src="images/BackgoundEcoEnvcrop.jpg" alt="BackgoundEcoEnvcrop">
	<h2 class="title">Find Your Nearest Collection Point</h2>
	<form action="action_page.php" id="registration">
		<div id="label_input">
			<label for="city">Modify Location</label> <select name="city"
				id="city">
				<option value="kualaLumpur">Kuala Lumpur</option>
				<option value="penang">Penang</option>
				<option value="petalingJaya">Petaling Jaya</option>
				<option value="sunway">Sunway</option>
			</select> <br> <label for="sort">Sort By</label> <select name="sort"
				id="sort">
				<option value="alphabetical">A-Z</option>
				<option value="alphabeticalDesc">Z-A</option>
				<option value="distance">distance</option>
			</select> <br>
			<hr>
			<table class="table">
				<tr>
					<th style="width: 15%" />
					<th style="width: 70%" />
					<th style="width: 15%" />
				</tr>
				<tr>
					<td><img src="images/ewaste_user/persistent.jpg" alt="persistent"></td>
					<td><h2 class="title">Persistent System Limited</h2>
						<hr style="height:1pt; visibility:hidden;" />
						<h3 class="desc">Software House</h2>
						<hr style="height:1pt; visibility:hidden;" />
						Distance: 2 km
						
					</td>
					<td><img src="images/specialOffer.png" alt="specialOffer"></td>
				</tr>
				<tr>
					<td><img src="images/ewaste_user/tgif.png" alt="tgif"></td>
					<td><h2 class="title">TGI Friday's (1 Utama)</h2>
						<hr style="height:1pt; visibility:hidden;" />
						<h3 class="desc">Burgers Western</h2>
						<hr style="height:1pt; visibility:hidden;" />
						Distance: 1.2 km
						
					</td>
					<td> </td>
				</tr>
			</table>

		</div>
		<br> <input type="submit" id="submitBtn">


	</form>
	<footer class="footer">
		<p style="color: black;">
			<em>Powered by</em>
		</p>
		<img src="images/logo1.png" alt="logo"
			style="width: 80px; height: 40px;">
	</footer>
</body>
</html>