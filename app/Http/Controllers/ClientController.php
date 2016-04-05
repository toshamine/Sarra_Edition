<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

class ClientController extends Controller
{
function store(Request $Request)

    {

$post = $Request->all();

if(Input::hasFile('Image'))
{
$file = Input::file('Image');
$file->move('Clients',$file->getClientOriginalName());
}

$img='<img style="border: 0;" class="resize" src="Clients/'. $file->getClientOriginalName() . '" />';

$data = array(
'Nom' => $post['Nom'],
'Prenom' => $post['Prenom'],
'email' => $post['email'],
'Motdepasse' => $post['Motdepasse'],
'Sexe' => $post['Sexe'],
'Image' => $img,
);
$i = DB::table('Client')->insert($data);



if($i > 0 )
{

return redirect('Inscription');

}

}



function update(Request $Request)

    {

$post = $Request->all();

if(Input::hasFile('Image'))
{
$file = Input::file('Image');
$file->move('uploads',$file->getClientOriginalName());
}

$img='<img style="border: 0;" class="resize" src="uploads/'. $file->getClientOriginalName() . '" />';

$data = array(
'Prix' => $post['Prix'],
'Titre' => $post['Titre'],
'Categorie' => $post['Categorie'],
'Description' => $post['Description'],
'Image' => $img,
'Acteur' => $post['Acteur'],
'Code_produit' => $post['Code_produit'],
'Nombre_de_page' => $post['Nombre_de_page'],
);
$i = DB::table('Produits')->where('id',$post['id'])->update($data);
if($i > 0 )
{

return redirect('ProduitModif');

}

}

 function create ()
    {
    return view('Inscription');
    }

function modif ()
    {
    return view('ProduitModif');
    }

 function aj ()
    {
    return view('ProduitAjoute');
    }



 function show ()
{
	
$result = DB::table('produits')->paginate(10);
return view('Affproduit')->with('data',$result);

}

 function show2 ($id)
{
	
$row = DB::table('produits')->where ('id',$id)->first();
return view('Affproduits2')->with('row',$row);

}

 function delete($id) 
{

$i = DB::table('produits')->where('id',$id)->delete();
if($i > 0)
{
return redirect('Affproduit');
}
}

function edit($id)
{
$row = DB::table('Produits')->where ('id',$id)->first();
return view('Modiffproduit')->with('row',$row);
}



}





