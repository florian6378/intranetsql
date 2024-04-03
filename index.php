<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start(); // Démarrer une session

// Vérification de la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des champs requis
    if (!empty($_POST['nom']) && !empty($_POST['mot_de_passe'])) {
        try {
            $mysqlClient = new PDO('mysql:host=localhost;dbname=projetgmae;charset=utf8', 'root', '');
            $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur PDO
            // Requête pour récupérer l'utilisateur de la base de données
            $query = "SELECT * FROM users WHERE id_userlogin = :identifiant AND id_userpass = :mot_de_passe";
            $stmt = $mysqlClient->prepare($query);
            $stmt->execute(array(':identifiant' => $_POST['nom'], ':mot_de_passe' => $_POST['mot_de_passe']));

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérification des identifiants
            if ($user) {
                // Identifiants corrects, rediriger vers une page sécurisée
                $_SESSION['loggedin'] = true;
                header("Location: page.html");
                exit();
            } else {
                // Identifiants incorrects, afficher un message d'erreur
                $erreur = "Identifiant ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    } else {
        // Gestion des erreurs si des champs sont manquants
        $erreur = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexion</title>
</head>
<body>
                                <h3>Intranet</h3>
                                    <div class="containerfluid8">
            <img src="image/bird.svg" width="158" height="130"></img>
                                    </div>
            <br><br>
                                    <div class="containerfluid9">

            <img src="image/paysage.jpg" width=975 height="500"></img>
                                    </div>                        
                                
<div class="form2">
    <?php if (isset($erreur)) { echo "<p style='color:red;'>$erreur</p>"; } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom">Identifiant:</label><br>
        <input type="text" id="nom" name="nom" placeholder="Entrer votre identifiant"><br><br>
        <label for="mot_de_passe">Mot de passe:</label><br>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrer votre mot de passe"><br><br>
        <button type="submit">Connexion</button>
    </form>
</div>


</body>
</html>
