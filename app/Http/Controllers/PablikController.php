<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use App\Models\Prestasi;
use App\Models\Komentar;

class PablikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyek = Postingan::where('penting', '>', 10)->get();
        return view('umum.home', compact('proyek') );
    }

    public function blog(){
        $postingan = Postingan::all();
        return view('umum.blog', compact('postingan'));
    }

    public function postingan(string $id){
        $postingan = Postingan::find($id);
        return view('umum.postingan', compact('postingan'));
    }

    public function profile(){
        $prestasi = Prestasi::all();
        return view('umum.profile', compact('prestasi'));
    }

    
}
