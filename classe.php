<?php

try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=projetgmae;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}




class Database {
  private $instance = null;
 
  public function __construct($pDSN, $pUserName, $pPassword) {
    $this->instance = new PDO($pDSN, $pUserName, $pPassword);
  }
 
  public function getInstance() {
    return $this->instance;
  }
}
 
$db = new Database('mysql:host=localhost;dbname=projetgmae;charset=utf8','root', null);
$db->getInstance();



class Voyage   {
    protected $id;
    protected $id_voyage;
    protected $id_categorie;
    protected $id_formule;
    protected $id_title;
    protected $id_imageurl;
    protected $id_description;
    protected $id_datedebut;
    protected $id_datefin;
    protected $id_price;






public function getId():int
{

    return $this->id;
}


public function create ($id_categorie, $id_formule, $id_title, $id_imageurl, $id_description, $id_datedebut, $id_datefin, $id_price ) {
    // INSERT INTO `voyage` (`id_voyage`, `id_categorie`, `id_formule`, `id_title`, `id_image-url`, `id_description`, `id_date-debut`, `id_date-fin`, `id_price`) VALUES (NULL, '', '', '', '', '', '2024-03-21 12:28:33.000000', '2024-03-21 12:28:33.000000', '');
    $db = new Database('mysql:host=localhost;dbname=projetgmae;charset=utf8','root', null);
    $db->getInstance();

    $db->getInstance()->query("INSERT INTO `voyage` (`id_voyage`, `id_categorie`, `id_formule`, `id_title`, `id_image-url`, `id_description`, `id_date-debut`, `id_date-fin`, `id_price`) VALUES ('$id_categorie', '$id_formule', '$id_title', '$id_imageurl', '$id_description', '$id_datedebut:2024-03-21 12:28:33.000000', '$id_datefin:2024-03-21 12:28:33.000000', '$id_price')");
}

public function update ($id_voyage, $id_categorie, $id_formule, $id_title, $id_imageurl, $id_description, $id_datedebut, $id_datefin, $id_price) {

    // UPDATE `voyage` SET `id_voyage`='[value-1]',`id_categorie`='[value-2]',`id_formule`='[value-3]',`id_title`='[value-4]',`id_image-url`='[value-5]',`id_description`='[value-6]',`id_date-debut`='[value-7]',`id_date-fin`='[value-8]',`id_price`='[value-9]' WHERE 1;

    $db = new Database('mysql:host=localhost;dbname=projetgmae;charset=utf8','root', null);
    $db->getInstance();

    $db->getInstance()->query("UPDATE `voyage` SET `id_categorie`='[$id_categorie]',`id_formule`='[$id_formule]',`id_title`='[$id_title]',`id_image-url`='[$id_imageurl]',`id_description`='[$id_description]',`id_date-debut`='[$id_datedebut]',`id_date-fin`='[$id_datefin]',`id_price`='[$id_price]' WHERE `id_voyage`=$id_voyage;
    ");
}


public function delete($id_voyage) {
    $db = new Database('mysql:host=localhost;dbname=projetgmae;charset=utf8','root', null);
    $pdo = $db->getInstance();

    $query = "DELETE FROM `voyage` WHERE `id_voyage` = $id_voyage";
    
    $pdo->query($query);
}




}
    
$voyage= new Voyage();

// Création d'une instance de la classe Voyage
$voyage = new Voyage();

// Supposons que vous ayez déjà les nouvelles valeurs des attributs du voyage
$id_voyage = 1; // L'ID du voyage que vous souhaitez mettre à jour
$id_categorie = 2;
$id_formule = 3;
$id_title = "Nouveau titre";
$id_imageurl = "nouveau_chemin_image.jpg";
$id_description = "Nouvelle description";
$id_datedebut = "2024-04-01";
$id_datefin = "2024-04-10";
$id_price = 500;

// Appelez la fonction update avec les nouvelles valeurs
$voyage->update($id_voyage, $id_categorie, $id_formule, $id_title, $id_imageurl, $id_description, $id_datedebut, $id_datefin, $id_price);




// Création  d'une instance de la classe Voyage
$voyage = new Voyage();

// Supposons que vous ayez déjà les nouvelles valeurs des attributs du voyage
$id_voyage = 1; // L'ID du voyage que vous souhaitez mettre à jour
$id_categorie = 2;
$id_formule = 3;
$id_title = "Nouveau titre";
$id_imageurl = "nouveau_chemin_image.jpg";
$id_description = "Nouvelle description";
$id_datedebut = "2024-04-01";
$id_datefin = "2024-04-10";
$id_price = 500;

// Appelez la fonction update avec les nouvelles valeurs
$voyage->delete($id_voyage, $id_categorie, $id_formule, $id_title, $id_imageurl, $id_description, $id_datedebut, $id_datefin, $id_price);


?>

