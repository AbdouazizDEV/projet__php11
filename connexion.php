<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
    <link rel="stylesheet" href="../public/style/connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">

        <span class="logo"></span>*

        
            <form action="" method="post">

                <span class="erreur">Email et mot de passe requis </span>
                <label for="" class="email">Email Adresse <span style="color: red;">*</span></label>
                <input type="text" class="email" placeholder=" &nbsp; Enter  email adresse" required> <br>
                <label for="" class="mdp" >Mot de passe<span style="color: red;">*</span></label>
                <input type="password" class="mdp" placeholder=" &nbsp; Enter your password *" required><i class="fa-regular fa-eye-slash" style="    width: 4%;height: 4%;position: relative;left: 90%;font-size: x-large;"></i> 
                
                <div class="remember">
                    <input type="checkbox" style="width: 25px;height: 25px;margin-top: 1%;"><span class="me">Remember me</span>
                    <p>Mot de passe oublier</p>
                </div>
                <input type="hidden" name="val" value="FICHIER"/>
                <button type="submit" class="btn">Se connecter</button>
            </form>
        </div>

    

    
</body>
</html>