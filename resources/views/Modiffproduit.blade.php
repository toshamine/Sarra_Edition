@extends('layout.master')
@section('content')

<html>
<head>
<title>Modifer Un Produit</title>
</head>



<body>
    <form action="{{action('ProduitController@update')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">   
<input type="hidden" name="id" value="<?= $row->id ?>"> 
<center><?= $row->Image2 ?></center>
<center><b> Prix De Produit </b></center>
<center><input type="number" name="Prix" value="<?= $row->Prix ?>" style="width: 200px;" class="form-control" required title="Prix" x-moz-errormessage="Vous Devez Saisir Le Prix !" ></center>
<center><b> Titre De Produit </b></center>
<center><input type="text" name="Titre" value="<?= $row->Titre ?>" style="width: 200px;" class="form-control" required title="Titre" x-moz-errormessage="Vous Devez Saisir Le Titre !"  ></center>
<center><b> Categorie De Produit </b></center>
<center><input type="text" name="Categorie" value="<?= $row->Categorie ?>" style="width: 200px;" class="form-control" required title="Categorie" x-moz-errormessage="Vous Devez Saisir La Categorie !" ></center>
<center><b> Description De Produit </b></center>
<center><textarea name="Description" style="width: 200px;" rows="4" cols="50" class="form-control" required title="Categorie" x-moz-errormessage="Vous Devez Saisir La Description !" ></textarea></center>
<center><b> Image De Produit </b></center>
<center><input type="file" name="Image" style="width: 200px;"  class="form-control" required title="Image" x-moz-errormessage="Vous Devez Choisir Une Image!" ></center>

<center><b> Auteur De Produit </b></center>
<center><input type="text" name="Acteur" value="<?= $row->Acteur ?>" style="width: 200px;" class="form-control" required title="Auteur" x-moz-errormessage="Vous Devez Saisir L'Auteur!" ></center>
<center><b> Code De Produit </b></center>
<center><input type="text" name="Code_produit" value="<?= $row->Code_produit ?>" style="width: 200px;" class="form-control" required title="Code produit" x-moz-errormessage="Vous Devez Saisir Le Code Produit !" ></center>
<center><b> Nombre De Page De Produit </b></center>
<center><input type="number" name="Nombre_de_page" value="<?= $row->Nombre_de_page ?>" style="width: 200px;" class="form-control" required title="Nombre de page" x-moz-errormessage="Vous Devez Saisir Le Nombre De Page !" ></center>

<br/>
<center><input type="submit" value="Modifier" class="btn btn-primary"></center></br>
<center><a href ="<?php echo 'SuppProduit/'.$row->id ?>" class="btn btn-mini btn-primary">Supprimer</a></center></br>
<center><a href="{{ URL::to('Affproduit') }}" class="btn btn-mini btn-primary">Retour</a></center>

</form>
</body>
</html>
@stop()


