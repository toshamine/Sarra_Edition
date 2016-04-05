@extends('layout.master')
@section('content')
<meta charset="UTF-8">
<table class="table table-bordered table-hover">
<col width="60">
  <col width="30">
      <thead>

<th> Prix </th>
<th> Titre </th>
<th> Quantité </th>
<th> Catégorie/Auteur </th>
</thead>
<tbody>
<?php
 foreach($content as $row) {
?>
   <tr>
<td hidden><?php echo $row->rowid ?></td>
<td><?php echo $row->price ?></td>
<td><?php echo $row->name ?></td>
<td><?php echo $row->qty ?></td>
<td><?php echo $row->options ?></td>
<td>
    
    <a href ="<?php echo 'SuppProduit2/'.$row->rowid ?>">Supp</a>
    <a href ="<?php echo 'AffProduit2/'.$row->id ?>">Aff</a>
    

</td>
</tr>
<?php } ?>
</tbody>
</table>
<center><font color="red"> Nombre Des Produits :</font>&nbsp {{ Cart::count() }}</center></br>
<center><font color="red"> Prix Totale Des Produits :</font>&nbsp{{Cart::total()}} DT</center></br>
<center><a href ="vider" class="btn btn-mini btn-primary" >Vider Le Panier</a></center></br>
<center><a href="Affproduitclient"  class="btn btn-mini btn-primary"> Afficher Les Produits ( Tant Que Client ) </a> </center></br>
<center><a href ="Affproduit" class="btn btn-mini btn-primary" >Afficher Les Produits ( Tant Que Admin )</a></center></br>
</body>

</html>

@stop()