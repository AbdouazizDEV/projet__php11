<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="../public/style/style.css">
        
	<link rel="stylesheet" href="../public/style/presence.css">
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




/* ******************************************body****************** */
.promotions{
	margin-top: 6%;
	margin-left: 14.5%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-right: 1em;
}



.presence{
	margin-top: 1%;
	margin-left: 14.5%;
	margin-right: 1em;
	background-color: #fff;
	border-radius: 0.5em;
	padding-bottom:6%;
	box-sizing: border-box;

}
.recherhe{
	margin: 1% 0 1% 1%;
	display: flex;
	justify-content: flex-start;
	gap: 2em;
	padding-top: 1em;
}
#etat{
	height: 3em;
	width: 5em;
	border: 0.1em  solid #EEEDF0;
	border-radius: 0.5em;
	background-color: #F6F7FB;
	font-size: 1em
}
#reference{
	height: 3em;
	width: 10em;
	border: 0.1em  solid #EEEDF0;
	border-radius: 0.5em;
	background-color: #F6F7FB;
	font-size: 1em

}
#date{
	width: 10em;
	border: 0.1em  solid #EEEDF0;
	border-radius: 0.5em;
	background-color: #F6F7FB;
	font-size: 1em

}

button{
	height: 3em;
	width: 6em;
	border: 0.1em  solid #EEEDF0;
	border-radius: 0.5em;
	background-color: #008F89;
	font-size: 1em;
	color: #fff;
	cursor: pointer;

}

table {
	width: 98%;
	border-collapse: collapse;
	margin-left: 1%;
}
th, td {
	border: none;
	padding: 8px;
	text-align: center;
}
th {
	background-color: #F7FAFF;
	border: none;
}
/* tr:nth-child(even) {
	background-color: #f2f2f2;
} */
td:nth-child(1) {
	color: #558B59;
	font-size: 1em;
}
td:nth-child(6) {
	color: #558B59;
	font-size: 1em;
}
td:nth-child(7) {
	color: #64A19D;
	font-size: 1em;
}
.pagination a {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #495057;
    background-color: #fff;
    border: 1px solid cadetblue;
    text-decoration: none;
  }
  
  .pagination {
	display: flex; 
	justify-content: flex-end; /* Centrer les boutons de pagination horizontalement */
}

.pagination a {
    padding: 5px 10px;
    margin: 0 3px; /* Espacement entre les boutons */
    text-decoration: none;
    color: #007bff; /* Couleur du texte */
    border: 1px solid #007bff; /* Bordure */
    border-radius: 3px; /* Coins arrondis */
}

.pagination a.active {
    background-color: cadetblue; /* Couleur de fond du bouton actif */
    color: #fff; /* Couleur du texte du bouton actif */
}


    </style>
</head>
<body>
	
	<div class="promotions">
		<h2>promotions</h2>
		<span>Promos * Création</span>
	</div>
	
    <?php
    include '../model/liste_presant.php';
    $listes = list_presence();

    // Récupérer les valeurs des menus déroulants
    $statut = $_POST['etat'] ?? 'present';
    $referentiel = $_POST['reference'] ?? 'reference digital';

    // Appeler la fonction pour filtrer les étudiants
    $liste_filtree = filtre_de_Presence($statut, $referentiel);

    // Nombre d'éléments par page
    $elementsParPage = 4;
    // Page actuelle (par défaut à la première page)
    $block = isset($_GET['block']) ? $_GET['block'] : 1;
    // Calcul du nombre total de pages
    $totalPages = ceil(count($liste_filtree) / $elementsParPage);
    if ($page < 1) {
        $page = 1;
    }
    // Détermination de l'indice de début et de fin pour la page actuelle
    $debut = ($block - 1) * $elementsParPage;
    $fin = $debut + $elementsParPage;
    // Extraire les données à afficher sur la page courante
    $pagin = array_slice($liste_filtree, $debut, $elementsParPage);

?>

<div class="presence">
    <form class="recherhe" method="post">
        <select name="etat" id="etat">
            <option value="statut">statut</option>
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
        </select>

        <select name="reference" id="reference">
            <option value="reference_digital">Référence Digital</option>
            <option value="developpement_data">Développement Data</option>
            <option value="devweb">DevWeb/Mobile</option>
        </select>

        <input type="date" id="date">

        <button type="submit">Rafraichir</button>
    </form>

    <!-- Afficher la liste filtrée et paginée -->
    <table>
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Référentiel</th>
                <th>Heure d'arrivée</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pagin as $etudiant) : ?>
                <tr>
                    <td><?php echo $etudiant['matricule']?></td>
                    <td><?php echo $etudiant['nom']?></td>
                    <td><?php echo $etudiant['prenom']?></td>
                    <td><?php echo $etudiant['telephone']?></td>
                    <td><?php echo $etudiant['referentiel']?></td>
                    <td><?php echo $etudiant['heure_arrivee']?></td>
                    <td><?php echo $etudiant['statut']?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <!-- pagination -->
    <div class="pagination">
        <?php if ($block > 1) : ?>
            <a href="?val=7&block=<?php echo $block - 1 ?>"><<</a>
        <?php endif?>
        
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <a href="?val=7&block=<?php echo $i ?>" class="<?php echo ($i == $block) ? 'active' : '' ?>"><?php echo $i ?></a>
        <?php endfor?>
        
        <?php if ($block < $totalPages) : ?>
            <a href="?val=7&block=<?php echo $block + 1 ?>">>></a>
        <?php endif?>
    </div>
</div>

    
    