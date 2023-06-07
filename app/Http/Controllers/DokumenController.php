<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use DirectoryIterator;
use Illuminate\Contracts\Cache\Store;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\facades\Validator;

class DokumenController extends Controller
{
    public function uploadpage()
    {
        return view('merger.main');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'Dokumen' => 'required|file|max:5000|mimes:pdf',
        // ]);
        $data=dokumen::all();
        $validator = Validator::make($request->all(),[
            'Dokumen' => 'required|file|max:5000|mimes:pdf'
        ]);
        // dd("test");
        // dd($validator->fails());
        if($validator->fails()){
            // dd("test");
            Alert::error('fail',$validator->errors()->first());
            return view('merger.showfile',compact('data'));
        }
        $data=new Dokumen();
        $Dokumen=$request->Dokumen;
        $filename=time().'.'.$Dokumen->getClientOriginalExtension();
        $destinationPath = public_path('/Dokumen');
        $request->Dokumen->move($destinationPath,$filename);
        $data->Dokumen=$filename;

        $data->save();
        Alert::success('Successful!', 'The file was uploaded successfully.');
        $data=dokumen::all();
        return view('merger.showfile',compact('data'));
    }

    public function merger(Request $request)
    {
        $filename = time().'.pdf';
        $destinationPath = public_path('Dokumen');
        //  dd($destinationPath);
        // dd(Storage::allFiles("public"));
        Alert::success('test');
        
        //dd($request->hasFile($destinationPath));
        if ($request->hasFile($destinationPath)){
            $pdf = PDFMerger::init();
            
            Alert::success('test2');
            foreach($request->file($destinationPath) as $key=>$value){
                $pdf->addPDF($value->getPathName(),'all');
            }

            Alert::success('test3');
            $pdf->merge();
            $pdf->save($destinationPath,$filename);
        }
        Alert::success('if selesai');
        return response()->download($destinationPath,$filename);
    }


    public function show()
    {
        $data=dokumen::all();
        return view('merger.showfile',compact('data'));
    }

    public function view($id)
    {
        $data=dokumen::find($id);
        return view('merger.viewfile',compact('data'));
    }

}
