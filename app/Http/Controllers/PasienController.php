<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasienController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/pasien');
        $pasien = $response->json();
        return view('pasien.index', compact('pasien'));
    }

    public function create()
    {
        
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $data['jenis_kelamin'] = $data['jenis_kelamin'] == 'Laki-laki' ? 'L' : 'P';
        Http::post('http://localhost:8080/pasien', $request->all());
        return redirect()->route('pasien.index');
    }

    public function edit($id)
    {

        $data = Http::get("http://localhost:8080/pasien/{$id}")->json();
        return view('pasien.edit', ['pasien' => $data]);
    }

    public function update(Request $request, $id)
    {
        // $data = $request->all();
        // $data['jenis_kelamin'] = $data['jenis_kelamin'] == 'Laki-laki' ? 'L' : 'P';
        Http::put("http://localhost:8080/pasien/{$id}", $request->all());
        return redirect()->route('pasien.index');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/pasien/{$id}");
        return redirect()->route('pasien.index');
    }
}
