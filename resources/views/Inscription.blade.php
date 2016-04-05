@extends('layout.master')
@section('content')

<html>
<head>

<title>Inscription</title>
</head>




<body>
<meta charset="UTF-8">
    <form action="{{action('ClientController@store')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">    
<b> Votre Nom <b>
<input type="text" name="Nom" class="form-control" required title="Nom" x-moz-errormessage="Vous Devez Saisir Votre Nom !" >
<b> Votre Prenom <b>
<input type="text" name="Prenom" class="form-control" required title="Prenom" x-moz-errormessage="Vous Devez Saisir Votre Prenom !"  >
<b> Votre email <b>
<input type="email" name="email" class="form-control" required title="email" x-moz-errormessage="Vous Devez Saisir Votre Email !" >
<b> Votre Mot De Passe <b>
<input type="password" name="Motdepasse" class="form-control" required title="Motdepasse" x-moz-errormessage="Vous Devez Saisir Votre Mot De Passe !" >

<b> Votre Sexe<b>
<SELECT name="Sexe" size="1"  class="form-control" required title="Sexe">
<OPTION>Homme</OPTION>
<OPTION>Femme</OPTION>
</SELECT>

<b> Image De Profile <b>
<input type="file" name="Image" class="form-control" >
<br/>
<input type="submit" value="Inscription" class="btn btn-primary">
</form>

</body>
</html>
@stop()


