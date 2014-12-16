<!Doctype html>
<html lang='fr'>
    
    <head>
     <meta charset="UTF-8">
     <title>Inscription Noël</title>
    </head>

    <body>
        <section>
            <p>venez fêter noël- Vendredi 17 décembre 2014 - à 17h</p>
                <form method="POST" action="/">
                    <input type="email" name="courriel" id="courriel" placeholder="<?= if(isset($_POST['courriel'])){ echo $_POST['courriel'];}else{echo 'Votre adresse email';}?>" />
                        <input type="nom" name="nom" id="courriel" placeholder="Votre nom" />
                        <input type="prenom" name="prenom" id="courriel" placeholder="Votre prenom" />
                        <input type="submit" value="inscription" />
                </form>
                <?php
                    if (isset($_POST['courriel'])&&isset($_POST['nom'])&&isset($_POST['prenom'])) {
                        $email = $_POST['courriel']; 
                        $nom   = $_POST['nom']; 
                        $prenom= $_POST['prenom']; 

                        addFormulaire($email,$nom,$prenom);
                        echo "Votre demande d’invitation a bien été prise en compte.";
                    } else {
                        echo "formulaire non valide";
                    }
                ?>
            <p>
                les inscrits devront acheter un Cadeau compris entre 5 euros et 10 euros
                à la personnes dont le nom sera affiché.
                dinné de noel ou gouter de noël + beuverie de noël
            </p>
            
        </section>
    </body>
</html>

