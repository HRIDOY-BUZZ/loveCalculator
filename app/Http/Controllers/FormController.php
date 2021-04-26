<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lovers;

class FormController extends Controller
{
    //
    function getData(Request $r){
        $lovers_list = new Lovers;
        $lovers_list->name1 = $r->name1;
        $lovers_list->name2 = $r->name2;
        
        $lovers_list->save();
        
        return $lovers_list;
    }
}
