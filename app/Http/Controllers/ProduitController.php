<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produits;
use App\Messages;
use App\MessagesClient;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\paginator;
use Illuminate\Support\Facades\Input;
use Auth;
use Mail;
use Cart;

class ProduitController extends Controller
{
	
public function __construct()
{
    $this->middleware('auth');
} 
public function store(Request $Request)

    {

$post = $Request->all();

if(Input::hasFile('Image'))
{
$file = Input::file('Image');
$file->move('uploads',$file->getClientOriginalName());
}

$img2='<img style="border: 0;" class="resize" src="../uploads/'. $file->getClientOriginalName() . '" />';
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
'Image2' => $img2,

);
$i = DB::table('Produits')->insert($data);



if($i > 0 )
{

return redirect('ProduitAjoute');

}

}



public function update(Request $Request)

    {

$post = $Request->all();

if(Input::hasFile('Image'))
{
$file = Input::file('Image');
$file->move('uploads',$file->getClientOriginalName());
}

$img2='<img style="border: 0;" class="resize" src="../uploads/'. $file->getClientOriginalName() . '" />';
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
'Image2' => $img2,
);
$i = DB::table('Produits')->where('id',$post['id'])->update($data);
if($i > 0 )
{

return redirect('ProduitModif');

}

}


public function UserMod(Request $Request){

$post = $Request->all();

if(Input::hasFile('Image'))
{
$file = Input::file('Image');
$file->move('users',$file->getClientOriginalName());
}

$img2='<img  class="resize img-circle" src="../users/'. $file->getClientOriginalName() . '" />';
$img='<img style="border: 0;" class="resize" src="users/'. $file->getClientOriginalName() . '" />';

$data = array(
'password' => bcrypt($post['password']),
'Image' => $img2,

);
$i = DB::table('Users')->where('id', $post['id'] )->update($data);

if($i > 0 )
{

return redirect('UserInfo');

}


}

public function create ()
    {
    return view('AjoutProduits');
    }

public function User ()
    {
    return view('UserInfo');
    }

public function modif ()
    {
    return view('ProduitModif');
    }

public function aj ()
    {
    return view('ProduitAjoute');
    }
public function client ()
    {
    return view('Affproduitclient');
    }


public function show ()
{
	
$result = DB::table('produits')->orderBy( 'id','DESC')->paginate(5);
return view('Affproduit')->with('data',$result);

}
public function showclient ()
{
    
$result = DB::table('produits')->orderBy( 'id','DESC')->paginate(2);
return view('Affproduitclient')->with('data',$result);

}







public function show2 ($id)
{
	
$row = DB::table('produits')->where ('id',$id)->first();
return view('Affproduits2')->with('row',$row);

}

public function delete($id) 
{

$i = DB::table('produits')->where('id',$id)->delete();
if($i > 0)
{
return redirect('Affproduit');
}
}

public function deleteuser($id) 
{

$i = DB::table('users')->where('id',$id)->delete();
if($i > 0)
{
return redirect('AffUsers');
}
}

public function edit($id)
{
$row = DB::table('Produits')->where ('id',$id)->first();
return view('Modiffproduit')->with('row',$row);
}

public function edit2($id)
{
$row = DB::table('Produits')->where ('id',$id)->first();
return view('Cartinfo')->with('row',$row);
}


public function showus ()
{
	
$result = DB::table('users')->orderBy( 'id','DESC')->paginate(10);
return view('AffUsers')->with('data',$result);

}


public function showus2 ($id)
{
	
$row = DB::table('users')->where ('id',$id)->first();
return view('AffUsers2')->with('row',$row);

}
public function addcart (Request $Request)
    {
   $post = $Request->all();


    Cart::add($post['id'], $post['Titre'], 1,$post['prix'], array($post['Categorie'] => $post['Auteur']));

    return redirect('Vcart');
    }

public function affcart(){
    
    $content = Cart::content();
    return view('Vcart')->with('content',$content);
}
public function cartremove($rowid) {
    

    Cart::remove($rowid);
    $content = Cart::content();
    return redirect('Vcart')->with('content',$content);
}

public function cartvide(){

    Cart::destroy();
    $content = Cart::content();
    return redirect('Vcart')->with('content',$content);
}



public function smagic ()
{

$result = DB::table('Produits')->where('Categorie','=','magic')->orderBy( 'id','DESC')->paginate(2);
return view('Magic')->with('data',$result);

}
public function saction ()
{

$result = DB::table('Produits')->where('Categorie','=','action')->orderBy( 'id','DESC')->paginate(2);
return view('Action')->with('data',$result);

}
public function sadven ()
{

$result = DB::table('Produits')->where('Categorie','=','adventure')->orderBy( 'id','DESC')->paginate(2);
return view('Adventure')->with('data',$result);

}
public function scrime ()
{

$result = DB::table('Produits')->where('Categorie','=','crime')->orderBy( 'id','DESC')->paginate(2);
return view('Crime')->with('data',$result);

}




}



