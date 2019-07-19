<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disttype;
use App\Nrctype;
use App\Nrc;
class InsertController extends Controller
{
    public function index(){

        $dists=Disttype::all();
        $types=Nrctype::all();
        return view('insert',compact('dists','types'));

    }
    public function insert(){
//        $number=new Nrc;
//        $distType=new Disttype();
//        $dist=Disttype::find($disttype->tine);
//        $number->dist_id=$dist->id;
//        $distType->name=$disttype->;
//        $distType->save();
//        $nrcType=new Nrctype();
//        $nrcType->type=$nrctype->Type;
//        $nrcType->save();


        return view('personInfo')->with(['status'=>'Successfully Upload']);
    }

}
