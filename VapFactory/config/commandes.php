<?php

 function ajouter($image, $nom, $prix_achat, $prix_vente, $quantite, $reference, $desc)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO produits (image, nom, prix_vente, prix_achat, quantite, reference, description) VALUES ('$image', '$nom', '$prix_achat', '$prix_vente', '$quantite', '$reference', '$desc')");

     $req->execute(array($image, $nom, $prix_achat, $prix_vente, $quantite, $reference, $desc));

     $req->closeCursor();
   }
}

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}
function modifier($quantite)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("UPDATE produits SET Majquantite='$quantite' WHERE id=?");

		$req->execute(array($quantite));

		$req->closeCursor();
	}
}

?>