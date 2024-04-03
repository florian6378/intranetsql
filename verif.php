<?php

// Vérification du formulaire 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $voyage = $_POST['Voyage'];
    $categorie = $_POST['catégorie'];
    $formule = $_POST['Formule'];
    $titre = $_POST['Titre'];
    $image_url = $_POST['image-url']; 
    $description = $_POST['description'];
    $date_debut = $_POST['trip-start'];
    $date_fin = $_POST['trip-end'];
    $prix = $_POST['prix'];
    $ajouter_destination = $_POST['ajouterdestination'];
    $maj_destination = $_POST['MaJdestination'];
    $supprimer_destination = $_POST['destination_a_supprimer'];

    //Affichage des information
    echo "Voyage: $voyage <br>";
    echo "Catégorie: $categorie <br>";
    echo "Formule: $formule <br>";
    echo "Titre: $titre <br>";
    echo "Image URL: $image_url <br>";
    echo "Description: $description <br>";
    echo "Date de début: $date_debut <br>";
    echo "Date de fin: $date_fin <br>";
    echo "Prix: $prix <br>";
    echo "Destination à ajouter: $ajouter_destination <br>";
    echo "Destination à mettre à jour: $maj_destination <br>";
    echo "Destination à supprimer: $supprimer_destination <br>";

    // On peut ajouter, mettre à jour ou supprimer une destination
}
?>


