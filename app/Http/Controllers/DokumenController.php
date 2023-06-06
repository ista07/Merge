<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

class DokumenController extends Controller
{
    public function uploadpage()
    {
        return view('template.default');
    }


    public function store(Request $request)
    {
        $request->validate([
            'Dokumen.*' => 'required|file|max:5000|mimes:pdf',
        ]);

        $data=new Dokumen();
        $Dokumen=$request->Dokumen;
        $filename=time().'.'.$Dokumen->getClientOriginalExtension();
        $destinationPath = public_path('/Dokumen');
        $request->Dokumen->move($destinationPath,$filename);
        $data->Dokumen=$filename;

        $data->save();
        return redirect()->back();
    }

    public function merger(Request $request)
    {
        $filename = time().'.pdf';
        $destinationPath = public_path('Dokumen');

        if ($request->hasFile('Dokumen')){
            $pdf = PDFMerger::init();

            foreach($request->file('Dokumen') as $key=>$value){
                $pdf->addPDF($value->getPathName(),'all');
            }

            $pdf->merge();
            $pdf->save($destinationPath,$filename);
        }
        return response()->download($destinationPath,$filename);
    }


    public function show()
    {
        $data=dokumen::all();
        return view('showfile',compact('data'));
    }

    public function view($id)
    {
        $data=dokumen::find($id);
        return view('viewfile',compact('data'));
    }

}
