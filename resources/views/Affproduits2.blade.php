@extends('layout.master')
@section('content')


    <form action="{{action('ProduitController@update')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">   
<input type="hidden" name="id" value="<?= $row->id ?>"> 



<center><?= $row->Image2 ?></br></center>

<center><b> Prix De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Prix ?> Dt</font></label></br></center>

<center><b> Titre De Produit </b></br></center>

<center><label  color="red"><font color="red"><?= $row->Titre ?></font></label></br></center>

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

</form>
<center><a href="{{ URL::to('Affproduit') }}" class="btn btn-mini btn-primary">Retour</a></center>


@stop()


