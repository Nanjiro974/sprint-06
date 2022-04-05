<?php

  require("../config/commandes.php");
  $Produits=afficher();

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
        <svg xmlns="http://127.0.0.1/edsa-sprint06/" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
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

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>

    <input type="number" class="form-control" name="idproduit" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nouvelle Quantitée</label>

    <input type="number" class="form-control" name="Majquantite" required>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Modifier la quantité</button>
</form>

      </div>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
          
          <p class= "form-control-lg"><?= $produit->reference ?></p>

            <img src="<?= $produit->image ?>">

            <h3><?= $produit->id ?></h3>

            <div class="card-body">
            <small class="text-muted"><?= $produit->quantite ?> en stock</small>
            
            </div>
          </div>
        </div>
  <?php endforeach; ?>

</div>

    </div></div>

    
</body>
</html>

<?php

// if (!empty($_GET['quantite'])) {
//   $id = $_GET['quantite'];
//   $recupdonnee = "SELECT FROM `produits` where id=$id";
//   $resultat = mysqli_query($bdd, $recupdonnee);
//   $donnee = mysqli_fetch_assoc($resultat);
//   $quantite = $donnee['quantite'];

//   if (isset($_POST['valider'])) {
//     if (!empty($_POST['quantite'])

//     ) {
//         $quantite = ($_POST['quantite']);

//         $insererArticle = "UPDATE produits SET quantite='$quantite' WHERE id=$id;";
//             $result = mysqli_query($bdd, $insererArticle);
//             if ($result) {
//                 header('location:index.php');
//             } else {
//                 die(mysqli_error($bdd));
//             }
//         }
//     }
//   }


  if(isset($_POST['valider']))
  {
    if(isset($_POST['quantite']))
    {
    if(!empty($_POST['idproduit']) AND is_numeric($_POST['Majquantite']))
	    {
	    	$Majquantite = htmlspecialchars(strip_tags($_POST['quantite']));

          try 
          {
            modifier($quantite);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }


?>