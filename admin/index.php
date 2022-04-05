<?php

  require("../config/commandes.php");

?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">A propos</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Gerer mon stock</h4>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">Ajouter un article</a></li>
            <li><a href="supprimer.php" class="text-white">supprimer un article</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="https://armougom-thomas.sprint-06.sc1lgvu9627.universe.wf" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Vap Factory</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
    <input type="name" class="form-control" name="image" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom"  required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix d'achat</label>
    <input type="number" step="0.01" class="form-control" name="prix_achat" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix de vente</label>
    <input type="number" step="0.01" class="form-control" name="prix_vente" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quantitée</label>
    <input type="number" class="form-control" name="quantite" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">référence</label>
    <input type="nom" class="form-control" name="reference" required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" required></textarea>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
</form>

      </div></div></div>

    
</body>
</html>

<?php

// print_r($_POST);
// echo var_export(isset($_POST['image']));
// echo var_export(isset($_POST['nom']));
// echo var_export(isset($_POST['image']) AND isset($_POST['nom']));
// echo var_export(isset($_POST['image']) AND isset($_POST['nom']) 
// AND isset($_POST['prix_achat'])
// AND isset($_POST['prix_vente']) AND isset($_POST['quantite']) AND isset($_POST['desc'])
// );
// print_r(isset($_POST['nom']));
// print_r(isset($_POST['image']) AND isset($_POST['nom']));

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix_achat']) AND 
       isset($_POST['prix_vente']) AND isset($_POST['quantite']) AND isset($_POST['reference']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix_achat']) AND !empty($_POST['prix_vente'])
     AND !empty($_POST['quantite']) AND !empty($_POST['reference']) AND !empty($_POST['desc']))
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
        $prix_achat = htmlspecialchars(strip_tags($_POST['prix_achat']));
        $prix_vente = htmlspecialchars(strip_tags($_POST['prix_vente']));
        $quantite = htmlspecialchars(strip_tags($_POST['quantite']));
        $reference = htmlspecialchars(strip_tags($_POST['reference']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
          
          try 
          {
            ajouter($image, $nom, $prix_achat, $prix_vente, $quantite, $reference, $desc);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>