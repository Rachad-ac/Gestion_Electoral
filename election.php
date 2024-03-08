<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.rachad.elections</title>
</head>
<body>
    <style>
        body{
    margin: 0px;
}
.form{
    display: flex;
    flex-direction: column;
    padding: 40px;
    background-color: beige;
    width: 20%;
    height: 48vh;
    border-radius: 10px;
}
.form input{
    border: none;
    margin-bottom: 5px;
    margin-top: 10px;
    width: 100%;
    padding: 10px;
    border-radius: 15px;
}
form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    margin-top: 30px;
}
select{
    border: none;
    border-radius: 5px;
    padding: 5px;
    width: 105%;
}
input[type=submit]{
    border: none;
    background-color: lightgreen;
    padding: 10px;
    border-radius: 15px;
    padding-bottom: 10px;
    padding-top: 10px;
}
fieldset{
    display: flex;
    flex-direction: row;
    align-items: center;
    border-radius: 10px;
    padding: 20px;
    justify-content: space-around;
    width: 90%;
    box-shadow: 8px 12px lightblue ;
}
fieldset:hover{
    box-shadow: 0px 0px 1px 7px rgb(128, 240, 171) inset;   
}
label , p{
    font-size: 1.3rem;
}
h2{
    text-shadow : 1px 6px lightgray;
}
</style>
 <form action="calcul.php" method="POST">
    <fieldset>
    <h2>*************<br> Formulaire de <br> saisie des scores <br> des elections <br> presidentielle <br>*************</h2>

      <div class="form">
        <label for="candidat1">Nom et prenom du candidat :</label>
        <input type="text" name="candidat1" placeholder=" Saisisez le nom et prenom du candidat" required>
     <label for="score1">score candidat :</label>
     <input type="text" name="score1" placeholder=" Saisisez le score" required>
     <p>Departements :</p>
     <select name="departement1">
        <option value="Dakar">Dakar</option>
        <option value="Saint-louis">Saint-louis</option>
        <option value="Zinguinchor">Ziguinchor</option>
     </select>
     <p>Bureaux :</p>
     <select name="bureau1">
        <option value="Bureau de Dakar">Bureau de Dakar</option>
        <option value="Bureau de Saint-louis">Bureau de Saint-louis</option>
        <option value="Bureau de Zinguinchor">Bureau de Ziguinchor</option>
     </select>
        </div>

        <div class="form">
        <label for="candidat2">Nom et prenom du candidat :</label>
        <input type="text" name="candidat2" placeholder=" Saisisez le nom et prenom du candidat" required>
     <label for="score2">score candidat :</label>
     <input type="text" name="score2" placeholder=" Saisisez le score" required>
     <p>Departements :</p>
     <select name="departement2" >
        <option value="Dakar">Dakar</option>
        <option value="Saint-louis">Saint-louis</option>
        <option value="Zinguinchor">Ziguinchor</option>
     </select>
     <p>Bureaux :</p>
     <select name="bureau2">
        <option value="Bureau de Dakar">Bureau de Dakar</option>
        <option value="Bureau de Saint-louis">Bureau de Saint-louis</option>
        <option value="Bureau de Zinguinchor">Bureau de Ziguinchor</option>
     </select>
        </div>

        <div class="form">
        <label for="candidat3">Nom et prenom du candidat :</label>
        <input type="text" name="candidat3" placeholder=" Saisisez le nom et prenom du candidat" required>
     <label for="score3">score candidat :</label>
     <input type="text" name="score3" placeholder=" Saisisez le score" required>
     <p>Departements :</p>
     <select name="departement3">
        <option value="Dakar">Dakar</option>
        <option value="Saint-louis">Saint-louis</option>
        <option value="Zinguinchor">Ziguinchor</option>
     </select>
     <p>Bureaux :</p>
     <select name="bureau3">
        <option value="Bureau de Dakar">Bureau de Dakar</option>
        <option value="Bureau de Saint-louis">Bureau de Saint-louis</option>
        <option value="Bureau de Ziguinchor">Bureau de Ziguinchor</option>
     </select>
    </div>
     <div>
        <input type="submit" value="Envoyer">
      </div>
      </fieldset>
        </form>
    
</body>
</html>