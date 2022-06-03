<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abonnesController extends Controller
{


    public function create () {
        $classees=classe::all();
        return \view("create",\compact("classes"));

    }
    public function index () {

        return view("abonne");
        $list_abonnesController=gene_auf_ufr::orderBy("nom","asc")->get();
    }

    public function abo(){
        return view("administrateur");
    }


}
