<?php
    include 'connection.php';
    include 'createBd.php';
?>
<!Doctype html>
<html lang='fr'>
    
    <head>
     <meta charset="UTF-8">
     <title>Inscription Noël</title>
    </head>

    <body>
        <section>
            <p>venez fêter noël- Vendredi 17 décembre 2014 - à 17h</p>
                <form method="POST" action="">
                    <input type="email" name="email" id="email" placeholder=<?php if(!empty($_POST['email'])&&isset($_POST['email'])){ echo '"'.$_POST['email'].'"';}else{echo '"Votre adresse email"';}?> />
                        <input type="nom" name="nom" id="nom" placeholder=<?php if(!empty($_POST['nom'])&&isset($_POST['nom'])){ echo '"'.$_POST['nom'].'"';}else{echo '"Votre nom"';}?> />
                        <input type="prenom" name="prenom" id="prenom" placeholder=<?php if(!empty($_POST['prenom'])&&isset($_POST['prenom'])){ echo '"'.$_POST['prenom'].'"';}else{echo '"Votre prenom"';}?> />
                        <input type="submit" value="inscription" />
                </form>
                <?php
                    
                    if ((!empty($_POST['email'])||!empty($_POST['nom'])||!empty($_POST['prenom']))&&(isset($_POST['email'])&&isset($_POST['nom'])&&isset($_POST['prenom']))) {
                        include 'enregistrement.php';
                        echo "Votre demande d’invitation a bien été prise en compte.";
                    } else {
                        if(empty($_POST['email'])&&empty($_POST['nom'])&&empty($_POST['prenom']))
                        {
                            echo "Merci de remplir tous les changes du formulaire";
                            
                        }else{
                            echo "formulaire non valide";
                        }
                    }
                ?>
            <p>
                les inscrits devront acheter un Cadeau compris entre 5 euros et 10 euros<br>
                à la personnes dont le nom sera affiché.<br>
                dinné de noel ou gouter de noël + beuverie de noël
            </p>
            <?php include 'selection.php';?>
        </section>
    </body>
</html>

