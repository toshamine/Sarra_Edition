@extends('layout.master')
@section('content')
<form action="{{action('ProduitController@UserMod')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
<center><?php echo( Auth::user()->Image );  ?></br></center></br>
<center><font color="green"><label color="green"> Votre Nom : </label></font></center></br>
<center><label><?php echo( Auth::user()->name );  ?> </label></br></center></br>
<center><font color="green"><label color="green"> Votre Email : </label></font></center></br>
<center><label><?php echo( Auth::user()->email );  ?> </label></br></center></br>
<input type="hidden" name="id" value="<?= Auth::user()->id ?>"></br>
<center><label> Changer Votre Image : </label></center></br>
<center><input type="file" name="Image" style="width: 200px;" class="form-control" required title="Image" x-moz-errormessage="Vous Devez Choisir Une Image !"></center></br>
<center><b> Modifier Ou Confirmer Votre Mot De Passe </b></center></br>
<center><input type="password" size="5" style="width: 200px;"  name="password" class="form-control" required title="Image" x-moz-errormessage="Vous Devez Choisir Une Mot De Passe !"></center></br>
<center><input type="submit" value="Modifier" class="btn btn-primary"></center></br>
<center><a href="Affproduit"  class="btn btn-mini btn-primary"> Retour </a></center>
</form>

@stop()