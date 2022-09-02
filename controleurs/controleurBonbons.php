<?php
$action=$_GET["action"] ;
switch($action)
{
    case "liste":
    $lesProduits=Produit::afficherTous();
    include("vues/listeProduits.php") ;
    break;

    case "rechercher":
		$recherche=strtoupper($_POST["recherche"]) ;
		$recherche=Produit::securiser($recherche) ;
		$lesProduits=Produit::rechercher($recherche) ;
		if(empty($lesProduits))
			{
				include "vues/pasderesultat.php" ; 
			}
			else 
			{
				include "vues/listeProduits.php";
			}
        break;
		
	case "ajouter" :
		include "vues/formAjout.php" ;
		break ;
		
		
	case "valideAjout" :
        $produit= new produit() ;
        $produit->setNom($_POST["nom"]) ;
        $produit->setPrix($_POST["prix"]) ;
        $produit->setPhoto(basename($_FILES["photo"]["name"])) ;
        $nom_image = basename($_FILES["photo"]['name']);
        $chemin_destination = 'images/' . $nom_image;
        move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
       
        produit::ajouter($produit);
        
        $lesProduits=produit::afficherTous();
		include ("vues/listeProduitsAdmin.php") ;
          
        break ;
		
	case "modifier":

		$produit=Produit::trouverUnBonbon($_GET["modif"]) ;
		include "vues/formModif.php" ;
		break;
		
	case "valideModif":
		$produit= new produit() ;
		$produit->setId($_POST["id"]) ;
		$produit->setNom($_POST["nom"]) ;
        $produit->setPrix($_POST["prix"]) ;
        $produit->setPhoto(basename($_FILES["photo"]["name"])) ;
        $nom_image = basename($_FILES["photo"]['name']);
        $chemin_destination = 'images/' . $nom_image;
        move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
       
        $nb=Produit::modifier($produit);
     
        $lesProduits=Produit::afficherTous();
		include ("vues/listeProduitsAdmin.php") ;
	    break ;
		
		case "supprimer" :

		$produit=Produit::trouverUnBonbon($_GET["supp"]) ;
		Produit::supprimer($produit) ;
		$lesProduits=Produit::afficherTous();
		include ("vues/listeProduitsAdmin.php") ;
		break;
		
		case "ajoutPanier" :
		Produit::ajoutPanier($_GET["id"]) ;
		header("location:index.php?uc=bonbons&action=liste") ;
		break ;
		
		case "ajoutSuppPanier" :
		Produit::ajoutSuppPanier($_GET["id"]) ;
		header ("location:index.php?uc=panier") ;
		break ;
		
		case "retraitPanier" :
		Produit::retraitPanier($_GET["id"]) ;
		header ("location:index.php?uc=panier") ;
		break ;
		
		case "viderPanier" :
		Produit::viderPanier() ;
		include ("vues/panierVide.php") ;
		break ;

}
