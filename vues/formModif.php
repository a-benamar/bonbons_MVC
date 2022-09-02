<?php
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
<div class="container">
<div class="row center mt-5">
<div class="col">
	<form method="POST" action="index.php?uc=bonbons&action=valideModif" enctype="multipart/form-data">
	 <div class="form-group">
    <label for="formGroupExampleInput">Nom du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="nom" value="<?php echo $produit->getNom() ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2"  name="prix" value="<?= $produit->getPrix() ?>">
	<br>
	<label for="formGroupExampleInput2">Image du produit</label>
    <input type="file" name="photo" accept="image/png, image/jpg" value="<?= $produit->getPhoto() ?>">
	<br> <br>
	<input type="hidden" name="id" value="<?= $produit->getId() ?>">
	<input type="submit" class="btn btn-primary" value="Enregistrer les modifications">
  </div>
</form>
</div>
</div>
</div>
<?php
}
?>
