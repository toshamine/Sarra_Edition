@extends('layout.master')
@section('content')


    <form action="{{action('ProduitController@update')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?= csrf_token(); ?>">   
<input type="hidden" name="id" value="<?= $row->id ?>"> 



<center><?= $row->Image ?></br></center>

<center><b> Nom : </b></br></center>

<center><label  color="red"><font color="green"><?= $row->name ?></font></label></br></center>

<center><b> Email : </b></br></center>

<center><label  color="red"><font color="green"><?= $row->email ?></font></label></br></center>

<center><b> Inscription : </b></br></center>

<center><label  color="red"><font color="green"><?= $row->created_at ?></font></label></br></center>

<center><b> Derniere Modification : </b></br></center>

<center><label  color="red"><font color="green"><?= $row->updated_at ?></font></label></br></center>









<br/>

</form>
<center><a href="{{ URL::to('AffUsers') }}" class="btn btn-mini btn-primary">Retour</a></center></br>
<center><a href ="<?php echo 'Suppuser/'.$row->id ?>" class="btn btn-mini btn-primary">Supp</a></center>


@stop()


