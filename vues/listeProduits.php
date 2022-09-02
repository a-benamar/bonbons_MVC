<div class="container">

	<div class="row">
		<div class="col"> <h2 class="text-center text-danger"> Nos bonbons </h2></div>
	</div>
    <div class="row">
	 
  <?php 
  if(isset($_SESSION["alert"])){
	  ?>
	 <div class='alert alert-success' role='alert' data-auto-dismiss="2000">
	  <?php echo $_SESSION["alert"] ?>
	</div>
	 
	<?php 
	unset($_SESSION["alert"]) ;
	}
	?>
	</div>

         <div class="text-center">
			<?php

			foreach($lesProduits as $produit)
				{
				 
				  echo "<div class='card text-center m-3' style='width: 15rem;'>
                                            <img class='card-img-top' src='".$produit->getPhoto() ."' >
                                            <div class='card-body'>
								<h5 class='card-title text-danger'>".$produit->getNom() ."</h5>
								<p class='card-text'> " .$produit->getPrix() ." €</p>
								<a id='mywish' href='index.php?uc=bonbons&action=ajoutPanier&id=".$produit->getId() ."' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
                                            </div>
					</div>" ;
	
		
				}

			?>
		</div>
    </div>
    
</div>


