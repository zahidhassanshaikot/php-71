<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index(){
        return view('admin.band.add-band');
    }
    public function saveBandInfo(Request $request){
        $band=new Band();
        $band->band_name=$request->band_name;
        $band->band_description = $request->band_description;
        $band->publication_status = $request->publication_status;
        $band->save();
        return redirect('/band/add')->with('message','New Band Successfully Created');

    }
    public function manageBandInfo(){
        $bands=Band::all();
        return view('admin.band.manage-band',['bands'=> $bands]);
    }
    public function unpublishedBandInfo($id){
        $band=Band::find($id);
        $band->publication_status=0;
        $band->save();
        return redirect('/band/manage')->with('message','Band info is Unpublished');
    }
    public function publishedBandInfo($id){
        $band=Band::find($id);
        $band->publication_status=1;
        $band->save();
        return redirect('/band/manage')->with('message','Band info is published');
    }
    public function editBandInfo($id){
        $band=Band::find($id);
        return view('admin.band.edit-band',['band'=>$band]);
    }

    public function updateBandInfo(Request $request){
        $band=Band::find($request->band_id);

        $band->band_name=$request->band_name;
        $band->band_description=$request->band_description;
        $band->publication_status=$request->publication_status;
        $band->save();

        return redirect('/band/manage')->with('message','band Info Update');

    }
    public function deleteBandInfo($id){
        $band=Band::find($id);
        $band->delete();
        return redirect('band/manage')->with('message','band Info Delete');
    }
    
    
}
