<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MytaskController extends Controller
{
    public function isiDataIndividu()
{

	// memanggil view tambah
	return view('isidataindividu');
}
public function MyTask()
{

	// memanggil view tambah
	return view('mytask');
}

public function storeDataKelompok(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $subtask = $request->input('subtask');
        $deadline = $request->input('deadline');
        $status = $request->input('status');

        // Insert data ke table akun
        DB::table('tugasindividu')->insert([
            'title'=> $title,
            'description' => $description,
            'subtask' => $subtask,
            'deadline' => $deadline,
            'status' => $status,
        ]);

        // Alihkan halaman ke halaman yang diinginkan
        return view('isidataindividu');
    }
}