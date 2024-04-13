<?php

function liste_des_apprenant()
{
    $student = [
        [
            "image" => 'img1.png',
            "nom" => 'lamtoro',
            "prenom" => 'ngang',
            "email" => 'lamtoro@ngang',
            "genre" => 'M',
            "referantiel"=>'Devweb',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'zeyna',
            "prenom" => 'diop',
            "email" => 'moussa',
            "genre" => 'M',
            "referantiel"=>'DevData',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'pathe',
            "prenom" => 'pathe',
            "email" => 'pathe',
            "genre" => 'M',
            "referantiel"=>'Devweb',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'modou',
            "prenom" => 'modou',
            "email" => 'modou',
            "genre" => 'M',
            "referantiel"=>'Ref-Dig',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'andaw',
            "prenom" => 'andaw',
            "email" => 'andaw',
            "genre" => 'M',
            "referantiel"=>'Devweb',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'issa',
            "prenom" => 'issa',
            "email" => 'issa',
            "genre" => 'F',
            "referantiel"=>'Ref-Dig',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'modou',
            "prenom" => 'ndiaye',
            "email" => 'modou@gmail?com',
            "genre" => 'M',
            "referantiel"=>'Devweb',
            "telephone" => '777777799',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'macoumba',
            "prenom" => 'nging',
            "email" => 'doff@nging',
            "genre" => 'M',
            "referantiel"=>'DevData',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'seydina',
            "prenom" => 'mhd',
            "email" => 'moussa@yahoo',
            "genre" => 'F',
            "referantiel"=>'Ref-Dig',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'ousman',
            "prenom" => 'sonko',
            "email" => 'sonko@hotmail',
            "genre" => 'F',
            "referantiel"=>'Devweb',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'sarr',
            "prenom" => 'Adji',
            "email" => 'modou@email.com',
            "genre" => 'F',
            "referantiel"=>'DevData',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'Diouf',
            "prenom" => 'El hadji',
            "email" => 'andaw',
            "genre" => 'F',
            "referantiel"=>'Ref-Dig',
            "telephone" => '777777777',
            "action" => true

        ],
        [
            "image" => 'img1.png',
            "nom" => 'seck',
            "prenom" => 'Wally',
            "email" => 'wally@gmail.fr',
            "genre" => 'M',
            "referantiel"=>'Devweb',
            "telephone" => '777777777',
            "action" => false

        ],
        [
            "image" => 'img1.png',
            "nom" => 'sarr',
            "prenom" => 'Balla',
            "email" => 'modou@gmail?com',
            "genre" => 'M',
            "referantiel"=>'Ref-Dig',
            "telephone" => '777777799',
            "action" => false

        ]
    ];

    return $student;
}

function filtre_des_Apprenants($recherche = 'recherche')
{
    $liste = liste_des_apprenant();
    $resultat = [];
    if ($recherche =='recherche') {
        return $liste;
    }

    foreach ($liste as $etudiant) {
        // Vérifier le statut et le référentiel de chaque étudiant
        if ($etudiant['genre'] == $recherche) {
            $resultat[] = $etudiant; // Ajouter l'étudiant au résultat
        }
    }
    return $resultat;
}

/* $eleByPage=4 ;
$page = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
$totalDesPages=ceil(count(liste_des_apprenant())/$eleByPage); //ceil() fonction qui arrondit par exee
// echo($page<1 || $page>$totalPage);
if($page<1 || $page>$totalDesPages)
header("Location:?page=$page&pageAff=1");
$eleDeb = ($page-1)*$eleByPage;
$etudiantsPage = array_slice(liste_des_apprenant(), $eleDeb, $eleByPage);
*/
?>