<?php

namespace App\Http\Controllers;

use App\Disttype;
use App\Nrctype;
use App\Nrc;
use App\Pdf;
use Illuminate\Http\Request;
use App\Http\Requests\NrcInsertFormRequest;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dists=Disttype::all();
        $types=Nrctype::all();
        return view('search',compact('dists','types'));
    }

    /**
     * Search nrc in database
     */
    public function search(NrcInsertFormRequest $request)
    {
        $distName=$request->get('distName');
        $type_id=$request->get('typeName');
        $num=$request->get('number');
        // $type_name=$request->get('type');

        $type_names=Nrctype::where('id','=',$type_id)->get();
        foreach ($type_names as $dist) {
            $type_name = $dist->type;
        }

        $dists=Disttype::where('name','=',$distName)
            ->get();

        foreach ($dists as $dist) {
            $dist_id = $dist->id;
        }

        $nrcs=Nrc::where('nrc_no','=',$num)
                ->where('dist_id','=',$dist_id)
                ->where('nrc_type_id','=',$type_id)->get();
                
                    foreach ($nrcs as $nrc) {
                        $nrc_id = $nrc->id;
                        $name = $nrc->name;
                    }
                if(isset($nrc_id)){
                    $pdfs=Pdf::where('nrc_id','=',$nrc_id)->get();
                  
                    return redirect('detail')->with(array('status'=>'Not Found NRC No : ','distName'=>$distName,'typeName'=>$type_name,'num'=>$num,'pdfs'=>$pdfs));
                }else
                    return redirect('search')->with(array('status'=>'Not Found NRC No : ','distName'=>$distName,'typeName'=>$type_name,'num'=>$num));
        
    }
    /**
     * For Direct Insert
     */
    public function direct(NrcInsertFormRequest $request)
    {
        $distName=$request->get('distName');
        $type_id=$request->get('typeName');
        $num=$request->get('number');
        // $type_name=$request->get('type');

        $type_names=Nrctype::where('id','=',$type_id)->get();
        foreach ($type_names as $dist) {
            $type_name = $dist->type;
        }

        $dists=Disttype::where('name','=',$distName)
            ->get();

        foreach ($dists as $dist) {
            $dist_id = $dist->id;
        }

        $nrcs=Nrc::where('nrc_no','=',$num)
                ->where('dist_id','=',$dist_id)
                ->where('nrc_type_id','=',$type_id)->get();
                
                    foreach ($nrcs as $nrc) {
                        $nrc_id = $nrc->id;
                        $name = $nrc->name;
                    }
                // if(isset($nrc_id)){
                //     $pdfs=Pdf::where('nrc_id','=',$nrc_id)->get();
                  
                    // return redirect('detail')->with(array('name'=>$name,'pdfs'=>$pdfs));
                // }else
                    return redirect('newInsert')->with(array('status'=>'Not Found NRC No : ','distName'=>$distName,'typeName'=>$type_name,'num'=>$num));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
