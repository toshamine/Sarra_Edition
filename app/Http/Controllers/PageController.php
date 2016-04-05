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

class PageController extends Controller
{
	
    function about ()
    {

    return view('about');
    }
    function scart ()
    {

    return view('Vcart');
    }
function vtest ()
{

    return view('test');
}
     function login ()
    {

    return view('auth.login');
    }





}
