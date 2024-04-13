
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="/var/www/html/projet/public/style/referentiels.css">
	
<style>
	@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

* {
	padding: 5px;
	margin: 0;
	box-sizing: border-box;
    font-family: 'Lato', sans-serif;
}
.formule{
	position: relative;
    width: 100%;
    background-color: #008F89;
}
body{
    width: 100%;
    height: 100vh;
    background-color: #F5F5F5;

}
.header {
	display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1% 1%;
    position: absolute;
    background: #FFF;
    color: #fff;
    margin-left: 14%;
    margin-right: 1em;
    border-radius: 1em;
    width: 85%;
}
.u-name {
	font-size: 43%;
    width: 4%;
    height: 41%;
    position: relative;
    top: -1em;
    left: -0.5em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.right input{
	height: 3em;
	color: #008F89;
	width: 10em;
	position: relative;
	left: 4em;
	border: 0.2em  solid #EEEDF0;
	border-radius: 0.5em;
	background-color: #fff;
	font-size: 1em

}

.right select{
	height: 4em;
	color: #CDC7CF;
	width: 10em;
	border: none;
	border-radius: 0.5em;
	background-color: #fff;
	margin-left: 5em;
	font-size: 1em;
	font-weight: bolder;
}
.right .cercle{
	height: 3em;
    width: 3em;
    background-color: #CACACA;
    border-radius: 50%;
    position: relative;
    left: 5em;
    text-align: center;
    top: à.5em;
	
}
.right{
	display: flex;
	justify-content: center;
	align-items: center
}*
.super_admin{
	position: absolute;
	top: 1em;
	right:5em;
	color: #008F89;
	font-size: 1em;
}
.left{
	position: relative;
    top: 2.5%;
    left: -20%;
    font-size: 1em;
    color: #008F89;
    display: flex;
    justify-content: center;
    align-items: center;

}
.left i{
	position: absolute;
    top: 0.3em;
    left: 15em;
    font-size: 0.1em;
    color: #008F89;
    display: flex;
    justify-content: center;
    align-items: center;

}
 .earch{
	height: 3em;
    color: #008F89;
    width: 26em;
    position: relative;
    left: 5em;
    border: 0.1em solid #EEEDF0;
    border-radius: 2em;
    background-color: #F6F7FB;
    font-size: 1em;
}
.earch:focus{
	outline: none;
	padding: 1em;
}
.icon{
	width: 3em;
    height: 3em;
    background-color: #F3F1FA;
    position: absolute;
    border-radius: 50%;
    top: -0.2em;
    left: 0.5em;
}

.header i {
	font-size: 30px;
	cursor: pointer;
	color: #7E7987;
	
}
.header i:hover {
	color: #127b8e;
}
.user-p {
	text-align: center;
    padding-left: 11px;
    padding-top: 65px;
}
.user-p img {
	width: 100px;
	margin-left: -80px;
}
.user-p h4 {
	color: black;
    padding: 5px 42px;
    margin-left: -124px;
    margin-top: 26px;
    text-decoration: underline;

}
.side-bar {
	width: 14%;
    background: #fff;
    height: 100vh;
    transition: 500ms width;
    box-sizing: border-box;
    transform: translate(-50% (-50%));
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
	
}
.body {
	display: flex;
    margin-top: 0%;
}

.side-bar ul {
	margin-top: 48px;
    list-style: none;
    color: black;
}
.side-bar ul li {
	font-size: 24px;
    padding: 15px 0px;
    padding-left: 20px;
    transition: 500ms background;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: black;
	cursor: pointer;
	transition: all 0.4s ease-in-out;
}
.side-bar ul li:hover {
    background-color: #008F89;border-radius: 10px;
	box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.3);
	cursor: pointer;
	transition: 500ms all
}
.side-bar ul li:hover a {
	color: #fff;
}
.side-bar ul li a {
	text-decoration: none;
    color: black;
    cursor: pointer;
    letter-spacing: 1px;
}
.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}
#navbtn {
	display: inline-block;
	font-size: 20px;
	transition: 500ms color;
}
#checkbox {
	display: none;
}
#checkbox:checked ~ .body .side-bar {
	width: 60px;
}
#checkbox:checked ~ .body .side-bar .user-p{
	visibility: hidden;
}
#checkbox:checked ~ .body .side-bar a span{
	display: none;
}


	.promotions{
	margin-top: 7%;
	margin-left: 14.5%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-right: 1em;
}
.containe{
	margin-left: 14%;
	height: 50%;
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-evenly;
	position: relative;
}

.img{
	width: 18%;
	height: 70%;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 0.5em;
	background-color: #fff;
	position: relative;
	top: 1%;
	left: -1%;
	

}
.img  img{
	width: 82%;
    height: 50%;
    block-size: contain;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    cursor: pointer;
    margin-bottom: 20%;
    position: relative;
    left: -13%;
}
.last{
	position: relative;
	top: 5%;
	left: -41%;
}

.img .points {
    display: block;
    position: relative;
    left: 26px;
    height: 0%;
}
.form{
	width: 18%;
	height: 70%;
	display: block;
	flex-direction: column;
	gap: 2em;
	align-items: center;
	border-radius: 0.5em;
	background-color: #fff;
	background-size: cover;
	background-repeat: no-repeat;
	position: relative;
	top: 1%;
	left: -1%;
}
h4{
	margin: 0.6em;
	font-size: 1.2em;
}
.form span{
	margin: 1em 0.6em;

}
input{
	width: 90%;
	height: 15%;
	margin-left: 1em;
	margin: 1em;
	border-radius: 1em ;
	border:  0.1em  solid #D5D5D7;
	background-color: #fff;
	margin-top: -1em;
	padding-left: 4em;

}
input::placeholder{
	color: #7E7987;
	font-size: 1em;
	padding-left: 2em;

}

input:focus{
	outline: none;
}
input::placeholder{
	color: #7E7987;
	font-size: 1em;
	padding-left: 2em;
}
input:focus{
	outline: none;
}

button{
	width: 50%;
    margin-left: 5em;
    position: relative;
    top: -6%;
    cursor: pointer;
    left: 18%;
    margin: 1em;
    padding: 1.5em;
    border-radius: 1em;
    border: #D5D5D7;
    background-color: #008F89;
    color: #fff;
    font-weight: bold;
    font-size: 91%;
}
.form i{
	position: relative;
	top: 8%;
	left: 10%;
	font-size: 1.8em;
	color: #7E7987;
	cursor: pointer;

}
.form textarea{
	width: 90%;
	height: 15%;
	margin-left: 1em;
	margin: 1em;
	border-radius: 1em;
	border:  0.1em  solid #D5D5D7;
	background-color: #fff;
	margin-top: -1em;
	padding: 1em 1em 1em 4em;

}
.form textarea:focus{
	outline: none;
}

.ref{
	position: absolute;
	top: 70%;
	left: 18%;
	font-weight: normal;
}
.active{
	color: #008F89;
	margin-left: 3em;
	cursor: pointer;
}
.ref span{
	line-height: 2em;
	text-align: center;


}

.img .points{
	display: block;
    position: relative;
    left: 26px;
    height: 0%;
}
.points ul {
	display: flex;
	position: relative;
	top: -9.5em;
	left: 0;
	gap: 0.5em;
	cursor: pointer;
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
	.containe{
		display: block;
		flex-direction: column;
	}
	.img{
		width: 100%;
	

	}
	.form{
		width: 100%;
	}
	.last{
		margin-left: 40%;
	}

	
}

</style>
</head>
<body>
			<div class="promotions">
				<h2>Référentiels</h2>
				<span>Référentiels * Création</span>
			</div>
			
		
			<div class="containe">
		
				<div class="img">
					<span class="points">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</span>
					<img src="../public/img/class-size.webp" alt="">
					<div class="ref">
						<span>Dev Web/mobile</span> <br>
						<span class="active">Active</span>
					</div>
				</div>
		
				<div class="img">
					<span class="points">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</span>
					<img src="../public/img/class-size.webp" alt="">
					<div class="ref">
						<span>Référence Digital</span> <br>
						<span class="active">Active</span>
					</div>
				</div>
		
				<div class="img">
					<span class="points">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</span>
					<img src="../public/img/class-size.webp" alt="">
					<div class="ref">
						<span style="margin-left: 2.5em;">AWS</span> <br>
						<span class="active">Active</span>
					</div>
		
				</div>
				
				<div class="img">
					<span class="points">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</span>
					<img src="../public/img/class-size.webp" alt="">
		
					<div class="ref">
						<span style="margin-left: 2.5em;">Hackeuse</span> <br>
						<span class="active">Active</span>
					</div>
				</div>
		
				<div class="form">
					<h4>Noueau Référentiel</h4>
					<span>Libelle</span> <br>
		
					<i class="fa-regular fa-user"></i>
					<input type="text" placeholder=" entrer le Libelle"> <br>
					<i class="fa-regular fa-user"></i>
					<textarea name="text" id="desc" cols="30" rows="10" placeholder="entrer la  descrition"></textarea>
					<button>Enregistrer</button>
				</div>
		
				<div class="img last">
					<span class="points">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</span>
					<img src="../public/img/class-size.webp" alt="">
					<div class="ref">
						<span>Développement Data</span> <br>
						<span class="active">Active</span>
					</div>
					
				</div>
					
			</div>

</body>
</html>