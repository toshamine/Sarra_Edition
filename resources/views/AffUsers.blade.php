@extends('layout.master')
@section('content')
<meta charset="UTF-8">

<table class="table table-bordered table-hover">
<col width="60">
  <col width="30">
      <thead>
            
<th> ID </th>
<th> Nom </th>
<th> Email </th>
<th> Inscription </th>
<th> Derniere Modification </th>
<th> Image </th>

</thead>
<tbody>
       <?php
 foreach($data as $row) {
?>
   <tr>
<td><?php echo $row->id ?></td>
<td><?php echo $row->name ?></td>
<td><?php echo $row->email ?></td>
<td><?php echo $row->created_at ?></td>
<td><?php echo $row->updated_at ?></td>
<td><?php echo $row->Image ?></td>

<td>
   
    <a href ="<?php echo 'Suppuser/'.$row->id ?>">Supp</a>
    <a href ="<?php echo 'AffUsers2/'.$row->id ?>">Aff</a>
    

</td>
</tr>
<?php } ?>
<?php echo $data->render(); ?>
</tbody>
</table>
<a href="UserInfo"  class="btn btn-mini btn-primary"> Mon Compte </a>
<a href="Affproduit"  class="btn btn-mini btn-primary"> Afficher Les Produits </a>
<a href="AjoutProduits"  class="btn btn-mini btn-primary"> Ajouter Un Produit </a>
<a href="{{ url('/auth/logout') }}" class="btn btn-mini btn-primary" >Logout</a> 
@stop()