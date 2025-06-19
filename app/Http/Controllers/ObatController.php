<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/obat');
        $obat = $response->json();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        Http::post('http://localhost:8080/obat', $request->all());
        return redirect()->route('obat.index');
    }

    public function edit($id)
    {
        $data = Http::get("http://localhost:8080/obat/{$id}")->json();
        return view('obat.edit', ['obat' => $data]);
    }

    public function update(Request $request, $id)
    {
        Http::put("http://localhost:8080/obat/{$id}", $request->all());
        return redirect()->route('obat.index');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/obat/{$id}");
        return redirect()->route('obat.index');
    }
}
