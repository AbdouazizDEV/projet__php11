<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	
	
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<div class="left">
			<span class="icon"></span>
			<input type="text" class="earch"><i class="fa-solid fa-magnifying-glass"></i>

		</div>

		<div class="right">
			<input type="date" class="date">
			<span class="cercle"><p style="font-size: xx-large;">🧑🏾</p></span>
			<select name="admin" id="admin">
				<option value="admin">admin    admin</option>
			</select>
			<span class="super_admin">super_admin</span>
			
		</div>
		<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
	</header>
	
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="../public/img/img1.png" style=" width: 100%;margin-left: -36px;">
				<h4>menu</h4>
			</div>
			<ul>
				<li>
                     <a href="index.php?val=2">

						<i class="fa-solid fa-bars-staggered" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="index.php?val=3">
						<i class="fa-regular fa-calendar-days"></i>
						<span>Promos</span>
					</a>
				</li>
				<li>
					<a href="index.php?val=4">
						<i class="fa-regular fa-calendar-days"></i>
						<span>Référentiel</span>
					</a>
				</li>
				<li>
					<a href="index.php?val=5">
						<i class="fa-regular fa-circle-user"></i>
						<span>Utilisateurs</span>
					</a>
				</li>
				<li>
					<a href="index.php?val=6">
						<i class="fa-regular fa-circle-user"></i>
						<span>Visiteurs</span>
					</a>
				</li>
				<li>
					<a href="index.php?val=7">
						<i class="fa-regular fa-circle-user"></i>
						<span>Présence</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa-regular fa-calendar-days"></i>
						<span>Evénements</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
