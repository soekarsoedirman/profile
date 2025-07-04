<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Postingan;
use App\Models\Prestasi;
use App\Models\Komentar;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;
use Illuminate\Support\Facades\File;

class PribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function postingan(){
        $postingan = Postingan::all();
        return view('admin.postingan', compact('postingan'));
    }

    public function prestasi(){
        $prestasi = Prestasi::all();
        return view('admin.prestasi', compact('prestasi'));
    }

    public function buatpostingan(){
        return view('admin.addpostingan');
    }

    public function postinganstore(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'foto'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'konten' => 'required|string',
            'kategori' => 'required|string',
            'penting' => 'required|integer'
        ]);

        
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/foto'), $filename);

        
        $data = $request->except('image');
        $data['image'] = 'storage/foto/' . $filename;
        Postingan::create($data);

        return view('admin.postingan')->with('Postingan telah ditambahkan');
    }

    public function editpostingan(string $id)
    {
        $postingan = Postingan::find($id);
        return view('admin.editpostingan', compact('postingan'));
    }

    public function updatepostingan(Postingan $postingan, Request $request)
    {
        $rules = [
            'judul'     => 'required|string|max:255',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'konten'    => 'required|string',
            'kategori'  => 'required|string',
            'penting'   => 'required|integer'
        ];

        $validatedData = $request->validate($rules);
     
        if ($request->hasFile('foto')) {
            if ($postingan->foto && File::exists(public_path($postingan->foto))) {
                File::delete(public_path($postingan->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/foto'), $filename);

            $validatedData['foto'] = 'storage/foto/' . $filename;
        }

        $postingan->update($validatedData);
        return view('admin.postingan')->with('Postingan telah diupdate');

    }

    public function deletepostingan(string $id)
    {
        $postingan = Postingan::find($id);
        $postingan->delete();
        return view('admin.postingan')->with('Postingan telah dihapus');

    }

    public function prestasistore(Request $request)
    {
        Prestasi::create($request->all());
        return view('admin.prestasi')->with('Prestasi telah ditambahkan');

    }

    public function updateprestasi(string $id, Request $request)
    {
        $prestasi = Prestasi::find($id);
        $prestasi->update($request->all());
        return view('admin.prestasi')->with('Prestasi telah diupdate');
    }

    public function deleteprestasi(string $id)
    {
        $hapus = Prestasi::find($id);
        $hapus->delete();
        return view('admin.prestasi')->with('Prestasi telah dihapus');
    }



    
    
}
