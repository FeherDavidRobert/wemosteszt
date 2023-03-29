<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RiasztasokController extends Controller
{
    public function rogzites(Request $req){
        DB::insert("INSERT INTO riasztasok(rogzitesi_ido, tavolsag, nev)
         VALUES (?,?,?)",[date("Y-m-d H:i:s"),$req->tavolsag,$req->nev]);
        $data['error']=false;
        $data['msg']="rözítés sikeres!";
        return response()->json($data);
        
    }
}
