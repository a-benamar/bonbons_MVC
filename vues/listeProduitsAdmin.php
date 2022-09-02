   <div class="row">
         <div class="text-center">
<?php		
  if(isset($_SESSION["alert"])){
	?>
 <div class='alert alert-success' role='alert' data-auto-dismiss="2000">
  <?php echo $_SESSION["alert"]  ;
  unset($_SESSION["alert"] );
  ?>
</div>
<?php
  }
			foreach($lesProduits as $produit)
				{
				 ?>
				  <div class='card text-center m-3' style='width: 15rem;'>
                          <img class='card-img-top' src='<?= $produit->getPhoto() ?>' >
                            <div class='card-body'>
								<h5 class='card-title text-danger'><?=$produit->getNom() ?> </h5>
								<p class='card-text'> <?= $produit->getPrix() ?> €</p>
								<a id='mywish' href='index.php?uc=bonbons&action=modifier&modif=<?=$produit->getId() ?>' class='btn btn-danger'>Modifier</a>
                                <a id='mywish' href='index.php?uc=bonbons&action=supprimer&supp=<?=$produit->getId() ?>' class='btn btn-danger' onclick="return confirm('Voulez vous supprimer ce bonbon ?')">Supprimer</a>        
						</div>
					</div>
	
		<?php
				}

?>
  </div>
         </div>
    

