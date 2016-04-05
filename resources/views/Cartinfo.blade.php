@extends('layout.master')
@section('content')

<html>
<head>
<title>Ajouter Aux Panier</title>
</head>



<body>
    <form action="{{action('ProduitController@addcart')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">   
<input type="hidden" name="id" value="<?= $row->id ?>"> 
<input type="hidden" name="Titre" value="<?= $row->Titre ?>"> 
<input type="hidden" name="prix" value="<?= $row->Prix ?>"> 
<input type="hidden" name="Categorie" value="<?= $row->Categorie ?>"> 
<input type="hidden" name="Auteur" value="<?= $row->Acteur ?>"> 


<center><?= $row->Image2 ?></br></center>

<center><b> Prix De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Prix ?> Dt</font></label></br></center>

<center><b> Titre De Produit </b></br></center>

<center><label  color="red" name="Titre"><font color="red"><?= $row->Titre ?></font></label></br></center>

<center><b> Categorie De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Categorie ?></font></label></br></center>

<center><b> Description De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Description ?></font></label></br></center>



<center><b> Auteur De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Acteur?></font></label></br></center>

<center><b> Code De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Code_produit ?></font></label></br></center>

<center><b> Nombre De Page De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Nombre_de_page ?></font></label></br></center>



<br/>
<br/>
<center><input type="submit" value="Ajouter Aux Panier" class="btn btn-primary"></center>
</form>
</body>
</html>
@stop()