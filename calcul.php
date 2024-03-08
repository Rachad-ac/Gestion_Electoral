<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.rachad.resultats</title>
</head>
<body>
    <style>
        body{
            margin : 0px;
        }
        button{
            padding: 10px;
            width : 25%;
            border : none;
            border-radius: 15px;
            font-size : 1rem;
            background-color : blue; 
        }
        a{
            color : white;
            text-decoration : none;
        }
        .containe{
         background-color : beige;
         padding: 25px;
         display: flex;
         justify-content : center;
         align-items : center;
        }
        h2{
            font-size : 2rem;
            color : blue;
            text-shadow : 0 8px 2px lightblue;
        }
    </style>
<div class="containe">
    <div>
<?php
//recuperation des informations des candidats
$nom1 = $_POST['candidat1'];
$nom2 = $_POST['candidat2'];
$nom3 = $_POST['candidat3'];

$score1 = $_POST['score1'];
$score2 = $_POST['score2'];
$score3 = $_POST['score3'];

$departement1 = $_POST['departement1'];
$departement2 = $_POST['departement2'];
$departement3 = $_POST['departement3'];

$bureau1 = $_POST['bureau1'];
$bureau2 = $_POST['bureau2'];
$bureau3 = $_POST['bureau3'];

// stockage des informations dans un tableau
$candidats = [
              "candidat1" => ["departement" => $departement1 , "bureau" => $bureau1 , "nom" => $nom1 , "score" => $score1],
              "candidat2" => ["departement" => $departement2 , "bureau" => $bureau2 , "nom" => $nom2 , "score" => $score2],
              "candidat3" => ["departement" => $departement3 , "bureau" => $bureau3 , "nom" => $nom3 , "score" => $score3],
];

// comparaison des scores et affichage resultats
echo " <h2> Resultats des elections presidentielles : </h2>";
foreach ($candidats as $val){
    if($val['score'] > 50){
        echo  "<h3>************************************************* <br><br>Departement : $val[departement] <br> 
        Bureau : $val[bureau] <br> Nom et prenom : $val[nom] <br>  Score : $val[score]% <br>
        Statut : Elu au premier tour et en balotage favorable <br><br>*************************************************</h3>";
    }else{
        if($val['score'] > 25){
            echo  "<h3>Departement : $val[departement] <br> Bureau : $val[bureau] <br> Nom et prenom : $val[nom] <br>
            Score : $val[score]% <br>Statut : Admis au second tour et en balotage favorable <br><br>
            *************************************************</h3>"; 
        }else{
            if($val['score'] > 12.5){
                echo  "<h3>Departement : $val[departement] <br> Bureau : $val[bureau] <br> Nom et prenom : $val[nom] <br> 
                Score : $val[score]% <br>Statut : Admis au second tour et en balotage defavorable <br><br>
                *************************************************</h3>"; 
            }else{
                echo "<h3>Departement : $val[departement] <br> Bureau : $val[bureau] <br> Nom et prenom : $val[nom] <br>
                Score : $val[score]% <br>Statut : Battus a plat coutur <br><br>
                *************************************************</h3>"; 
            }
        }
    }
}

?>
<!--- lien de retour au formulaire ---->
<button><a href="election.php">Retour</a></button>
</div>
</div>
</body>
</html>