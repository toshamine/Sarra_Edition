@extends('layout.master')
@section('content')
<meta charset="UTF-8">

<table class="table table-bordered table-hover">
<col width="40">
  <col width="20">
      <thead>
            
<th hidden> ID </th>
<th> Prix </th>
<th> Titre </th>
<th> Categorie </th>
<th> Description </th>
<th> Image </th>
<th> Auteur </th>
<th> Code Produit </th>
<th> Nombre De Page </th>
</thead>
<tbody>
       <?php
 foreach($data as $row) {
?>
   <tr>
<td hidden><?php echo $row->id ?></td>
<td><?php echo $row->Prix ?> DT</td>
<td><?php echo $row->Titre ?></td>
<td><?php echo $row->Categorie ?></td>
<td><?php echo $row->Description ?></td>
<td><?php echo $row->Image ?></td>
<td><?php echo $row->Acteur ?></td>
<td><?php echo $row->Code_produit ?></td>
<td><?php echo $row->Nombre_de_page ?></td>
<td>
    <a href ="<?php echo 'EditProduit/'.$row->id ?>">Modif</a>
    <a href ="<?php echo 'SuppProduit/'.$row->id ?>">Supp</a>
    <a href ="<?php echo 'AffProduit2/'.$row->id ?>">Aff</a>

</td>
</tr>
<?php } ?>
<center><?php echo $data->render(); ?></center>
</tbody>
</table>
<a href="Affproduitclient"  class="btn btn-mini btn-primary"> Afficher Les Produits ( Tant Que Client ) </a>
<a href="Vcart"  class="btn btn-mini btn-primary"> Mon Panier </a>
<a href="AffUsers"  class="btn btn-mini btn-primary"> Afficher Les Utilisateurs </a>
<a href="UserInfo"  class="btn btn-mini btn-primary"> Mon Compte </a>
<a href="AjoutProduits"  class="btn btn-mini btn-primary"> Ajouter Un Produit </a>
<a href="{{ url('/auth/logout') }}" class="btn btn-mini btn-primary" >Logout</a> 
@stop()