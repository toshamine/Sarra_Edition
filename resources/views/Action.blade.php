@extends('layout.master')
@section('content')
<meta charset="UTF-8">
<center>
<a href="Affproduitclient"  color="red" class="btn btn-mini btn-primary"> All </a>
<a href="Magic"  color="red" class="btn btn-mini btn-primary"> Magic </a>
<a href="Action"  color="red" class="btn btn-mini btn-primary"> Action </a>
<a href="Adventure"  color="red" class="btn btn-mini btn-primary"> Adventure </a>
<a href="Crime"  color="red" class="btn btn-mini btn-primary"> Crime </a></center>
       <?php
 foreach($data as $row) {
?>
   
<center><div class="floated2_img2">
    </br><?php echo $row->Image ?>
    <b><p><?php echo $row->Titre ?></p></b>
    <b><font color="red"><p><?php echo $row->Prix ?>&nbspDT</p></font></b>
    <a href="<?php echo 'addcart/'.$row->id  ?>" class="btn btn-mini btn-primary"> Ajouter Aux Panier </a>
    </br>
</div></center>

<?php } ?>
<center><?php echo $data->render(); ?></center>

<center>
</br><a href="Vcart"  class="btn btn-mini btn-primary"> Mon Panier </a>
<a href ="Affproduit" class="btn btn-mini btn-primary" >Afficher Les Produits ( Tant Que Admin )</a>
<a href="AffUsers"  class="btn btn-mini btn-primary"> Afficher Les Utilisateurs </a>
<a href="UserInfo"  class="btn btn-mini btn-primary"> Mon Compte </a>
<a href="AjoutProduits"  class="btn btn-mini btn-primary"> Ajouter Un Produit </a>
<a href="{{ url('/auth/logout') }}" class="btn btn-mini btn-primary" >Logout</a> </center>

@stop()