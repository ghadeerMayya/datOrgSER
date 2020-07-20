<?php

namespace App\Http\Controllers;

use App\Penifit;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class PenifitController extends Controller
{
    //

    public function viewpenifit()
    {

        $penifit = Penifit::all();
        $arr = Array('penifit'=> $penifit);
        return view('penifits.viewPenifits',$arr);
    }


    public function addPenifits(Request $request){
        if ($request->isMethod('post')){
            echo $request;
           $newPenifit=new Penifit();
           $newPenifit->name=$request->input('penifitName');
            $newPenifit->age=$request->input('penifitAge');
            $newPenifit->save();
        }

        return view('penifits.addPenifits');
    }
    public function deletePenifit(Request $request)
    {
        if ($request->isMethod('post')) {
            echo $request;
            $newPenifit=new Penifit();
            $penifit=Penifit::find($request->input('id'));
            $penifit->delete();
            return redirect("viewPenifits");
        }

//        return view('penifits.addPenifits');
    }

}
