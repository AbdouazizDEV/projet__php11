<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="../public/style/style.css">
	<link rel="stylesheet" href="../public/style/apprenant.css">
	<style>
		tr{
			height: 73px;
		}
		/* Style de la table */
.container-table {
    width: 100%;
}

.line5 {
    width: 100%;
    border-collapse: collapse;
}

.line5 th, .line5 td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.line5 th {
    background-color: #f2f2f2;
}

/* Style pour les colonnes de la table */
.titre {
    font-weight: bold;
}

.prenom {
    width: 150px; /* Largeur spécifique pour la colonne Prénom */
}

.email1 {
    width: 200px; /* Largeur spécifique pour la colonne Email */
}

/* Style pour les lignes de la table */
.line {
    background-color: #ffffff;
}

.line:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style pour les images */
.bloc {
    position: relative;
    width: 40px; /* Largeur des images */
}

.col-haut {
    display: none; /* Masquer la partie haute de chaque bloc */
}

.col-bas {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
}

/* Style pour les cases à cocher */
input[type="checkbox"] {
    display: none; /* Masquer les cases à cocher */
}

input[type="checkbox"] + label {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #dddddd;
    cursor: pointer;
}

input[type="checkbox"]:checked + label {
    background-color: #007bff; /* Couleur de fond lorsque la case est cochée */
}
/* pagination pagination pagination pagination pagination*/

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

    <div class="container-top">
		<h3>Promotion: <span>Promotion 6</span></h3>
		<h3>Référentiel: <span>Dév Web / Mobile</span></h3>
	</div>


		<!-- =================================body================================ -->
		<div class="containe">
			<span class="t1">1</span>
			<h3 class="">Apprenant</h3>
			<div class="title">
				<h2>Liste des apprenants <span>(50)</span> </h2>
			</div>
			<div class="buttons">
				<a href="#popup" class="b1"><i class="fa-regular fa-add"></i> Nouveau</a> &nbsp; &nbsp;
				<a href="#insert" class="b2">Insertion en masse</a>&nbsp; &nbsp;
				<a href="#" class="b3"><i class="fa-regular fa-circle-down"></i> Liste model</a> &nbsp; &nbsp;
				<a href="#" class="b4">Liste des exclus</a> &nbsp; &nbsp;
			</div>
			<form class="recherhe" method="post">
				<div class="filtre">
					<i class="fa-regular fa-add"></i><input type="text" class="search">
				</div>
			    <button type="submit" name="recherche"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
			<div class="folder-icon">
				<i class="fa-regular fa-folder"></i>
			</div>
			<?php
				include "../model/liste_des_apprenant.php";

				// Récupérer la liste complète des apprenants
				/* $students = liste_des_apprenant();

				// Nombre d'apprenants par page
				$nombreParPage = 5;

				// Récupérer le numéro de page actuelle
				$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
				if ($page < 1) {
					$page = 1;
				}

				// Calculer le point de départ et la fin pour la pagination
				$debut = ($page - 1) * $nombreParPage;
				$fin = $debut + $nombreParPage;

				// Extraire les apprenants à afficher pour cette page
				$apprenants_a_afficher = array_slice($students, $debut, $nombreParPage); */

					$listes = liste_des_apprenant();
					$nombreParPage=5;
					// Récupérer les valeurs des menus déroulants
					$recherche = $_POST['genre'] ?? 'recherche';
					

					 // Appeler la fonction pour filtrer les étudiants
				    $liste_filtree = filtre_des_Apprenants($recherche);

					// Nombre d'éléments par page
					$elementsParPage = 5;
					// Page actuelle (par défaut à la première page)
					$block = isset($_GET['block']) ? $_GET['block'] : 1;
					// Calcul du nombre total de pages
					$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
						if ($page < 1) {
							$page = 1;
						}
					// Détermination de l'indice de début et de fin pour la page actuelle
					$debut = ($block - 1) * $elementsParPage;
					$fin = $debut + $elementsParPage;
					// Extraire les données à afficher sur la page courante
					$apprenants_a_afficher = array_slice($listes, $debut, $nombreParPage);
				?>

				<!-- Afficher les apprenants -->
				<div class="container-table">
					<table class="line5">
						<!-- En-têtes de tableau -->
						<thead>
							<!-- Ligne d'en-têtes -->
							<tr>
								<th class="titre" data-label="Image">Image</th>
								<th class="titre" data-label="Nom">Nom</th>
								<th class="titre prenom" data-label="Prenom">Prenom</th>
								<th class="titre email1" data-label="Email">Email</th>
								<th class="titre" data-label="Genre">Genre</th>
                <th class="titre" data-label="referantiel">Referantiel</th>zjk
								<th class="titre" data-label="Telephones">Telephones</th>
								<th class="titre" data-label="Actions">Actions</th>
							</tr>
						</thead>
						<!-- Corps de tableau -->
						<tbody>
							<!-- Afficher chaque apprenant -->
							<?php foreach ($apprenants_a_afficher as $student) : ?>
								<tr>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas"><img src="../Public/images/icon.png" width="30px"></div>
									</td>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas" style="color:rgb(29, 109, 29);"><?= $student['nom'] ?></div>
									</td>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas" style="color:rgb(29, 109, 29);"><?= $student['prenom'] ?></div>
									</td>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas email"><?= $student['email'] ?></div>
									</td>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas"><?= $student['genre'] ?></div>
									</td>
                  <td class="bloc">
                    <div class="col-haut"></div>
                    <div class="col-bas"  style="color:rgb(29, 109, 29);"><?= $student['referantiel'] ?></div>
                  </td>
									<td class="bloc">
										<div class="col-haut"></div>
										<div class="col-bas"><?= $student['telephone'] ?></div>
									</td>
									<td class="bloc">
										<div class="col-haut"></div>
										<input type="checkbox" id="my-checkbox-0" <?= $student['action'] ? 'checked' : '' ?>>
										<label for="my-checkbox-0"></label>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<!-- Pagination -->
				<div class="pagination">
				
					<?php if ($block > 1) : ?>
						<a href="?val=6&block=<?php echo $block - 1 ?>">&laquo;</a>
					<?php endif?>
					
					<?php for ($i = 1; $i <= 4; $i++) : ?>
						<a href="?val=6&block=<?php echo $i ?>" class="<?php echo ($i == $block) ? 'active' : '' ?>"><?php echo $i ?></a>
					<?php endfor?>
					
					<?php if ($block < 4) : ?>
						<a href="?val=6&block=<?php echo $block + 1 ?>">&raquo;</a>
					<?php endif?>
				

				</div>


</section>
								








			
<!-- Le Modal (popup) -->
<div id="popup" class="modal">
  <!-- Contenu du Modal -->
  <form action="" method="post" class="modal-content">
    <div class="head">
    <a href="#" class="close">× </a>
    <h2>Nouvel Apprenant</h2>
</div>
    <div class="section informations-perso">
      <div class="line flex">
        <span><i class="fa-solid fa-1"></i></span>
        <span>Informations Perso.</span>
        <span></span>
        <span><i class="fa-solid fa-2" style="color: #038e89;background: #f2f1ff"></i></span>
        <span>Informations Supplémentaires</span>
      </div>
      <div class="input-group">
        <div>
          <label for="nom_tuteur">Nom et Prénom tuteur</label>
          <input type="text" id="nom_tuteur" placeholder="Nom & Prénom tuteur" required>
        </div>
        <div>
          <label for="contact_tuteur">Contact Tuteur</label>
          <input type="text" id="contact_tuteur" placeholder="Contact Tuteur" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Entrer l'email" required class="input-group input[type='email']">
        </div>
         <div>
          <label for="telephone">Telephone</label>
          <input type="text" id="telephone" placeholder="Entrer le telephone" required>
        </div>
        <div>
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe" class="input-group select">
                <option value="masculin">Masculin</option>
                <option value="feminin">Feminin</option>
            </select>
        </div>
        <div class="date-input-container">
          <label for="casier_judiciaire">Date de Naissance</label>
          <input type="date" id="date_naissance" placeholder="MM/DD/YYYY" required>
          <i class="fa-solid fa-calendar-day"></i>
        </div>
        <div>
          <label for="visite_medicale">Lieu de Naissance</label>
          <input type="text" id="lieu_naissance" placeholder="Entrer le lieu de naissance" required>
        </div>
        <div>
            <label for="visite_medicale">Ṇ̣° CNI</label>
            <input type="text" id="lieu_naissance" placeholder="Entrer le numero de votre carte d'identité" required>
          </div>
      </div>
    </div>
    <br>
    <div class="section">
      <div class="btn-container">
        <a href="#popup2" class="btn" class="btn underline">Suivant</a>
      </div>
    </div>
  </form>
</div>



<div id="popup2" class="modal">

    <!-- Contenu du Modal -->
    <form action="" method="post" class="modal-content">
      <div class="head">
      <a href="#" class="close">×</a>
      <h2>Nouvel Apprenant</h2>
  </div>
      <div class="section informations-perso">
        <div class="line flex">
          <span><i class="fa-solid fa-pen"></i></span>
          <span>Informations Perso.</span>
          <span></span>
          <span><i class="fa-solid fa-2"></i></span>
          <span>Informations Supplémentaires</span>
        </div>
        <div class="input-group">
          <div>
            <label for="nom_tuteur">Nom et Prénom tuteur</label>
            <input type="text" id="nom_tuteur" placeholder="Nom & Prénom tuteur" required>
          </div>
          <div>
            <label for="contact_tuteur">Contact Tuteur</label>
            <input type="text" id="contact_tuteur" placeholder="Contact Tuteur" required>
          </div>
          <div>
            <label for="photocopie_cni">Photocopie CNI</label>
            <input type="file" id="photocopie_cni" placeholder="Photocopie CNI" required>
          </div>
          <div>
            <label for="extrait_naissance">Extrait de naissance</label>
            <input  type="file" id="extrait_naissance" placeholder="Extrait de naissance" required>
          </div>
          <div>
            <label for="diplome">Diplôme</label>
            <input  type="file" id="diplome" placeholder="Diplôme">
          </div>
          <div>
            <label for="casier_judiciaire">Casier Judiciaire</label>
            <input type="file" id="casier_judiciaire" placeholder="Casier Judiciaire" required>
          </div>
          <div>
            <label for="visite_medicale">Visite Médicale</label>
            <input type="file" id="visite_medicale" placeholder="Visite Médicale" required>
          </div>
        </div>
      </div>
      <br>
      <div class="section">
        <div class="btn-container">
          <a href="#" class="btn underline-none cancel-btn " > X  Annuler</a>
          <a href="#" type="submit" class="btn underline">+  Créer nouvel apprenant</a>
        </div>
      </div>
    </form>
  
  </div>




<div class="excel" id="insert">
  <div class="popup">
    <div class="popup-header">Choisir un Fichier Excel</div>
    <div class="upload">
    <div class="chose-file"><input type="file" class="hidden-input" id="fileInput" accept=".xlsx, .xls, .ods" hidden>
      <label for="fileInput" class="drop-zone">
        <span class="drop-zone-text">Drop file here or click to upload</span>
      </label></div>
    </div>
    <div class="footer-btns">
      <a href="#" class="btn btn-red">Fermer</a>
      <button type="submit" form="formExcel" class="btn btn-green">Enregistrer</button>
    </div>
  </div>
</div>
  
	

</body>
</html>