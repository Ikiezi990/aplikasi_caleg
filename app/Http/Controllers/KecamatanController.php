<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kecamatan'] = Kecamatan::all();
        $data['title'] = "Data Kecamatan";
        return view('admin.kecamatan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_kecamatan' => $request->nama_kecamatan
        ];
        Kecamatan::insert($data);
        return redirect(url('admin/kecamatan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_kecamatan' => $request->nama_kecamatan
        ];
        Kecamatan::where('id', $id)->update($data);
        return redirect(url('admin/kecamatan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kecamatan::where('id', $id)->delete();
        return redirect(url('admin/kecamatan'));
    }
}
