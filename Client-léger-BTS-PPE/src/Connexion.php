<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>RoilleSA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
          <link rel="stylesheet" href="../../css/style.css"/>
    <link rel="stylesheet" href="../css/mobile-style.css">
</head>
<body>
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
               <font size="6.5"> <i class="fab fa-resolving"></i> </i>Roille</a> </font>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Acceuil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <a class="nav-link" href="Materiels.php">Materiels</a>
                            <!--<div class="dropdown-content">
                                <a href="#">Generic</a>
                                <a href="#">Element</a>
                            </div>-->
                        </div>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#">Consommables</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<h1> Formulaire de connexion </h1> <hr>
    <form action="Connexion.php" method="post">
        <input type="text"name="login" placeholder="Entrez votre login : "><br><br>
        <input type="passsword"name="mdp" placeholder="Entrez votre mot de passe"><br><br>
        <input type="submit" value="Connexion"name="bout"><br><br><hr>
        
    </form>

<?php
if(isset($_POST["bout"])){

$loginC = $_POST["login"];
$mdpC = $_POST["mdp"];


$id = mysqli_connect("127.0.0.1:8889","root", "root","Roille");
mysqli_query($id,"SET NAMES 'utf8'");
$requete = "select * from commerciaux where loginC ='$loginC' and mdpC='$mdpC'";
$reponse = mysqli_query($id,$requete);
if(mysqli_num_rows($reponse)>0)
{
    header("location:GestionTicketsRoille/index1.php");
}else 
{
    echo "Connexion Impossible, login ou mot de passe incorrect....";
    header("refresh:1.8;url=Connexion.php");
}
}
?> 

</body>
</html>