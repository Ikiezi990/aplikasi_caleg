<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kota'] = Kota::all();
        $data['title'] = "Data Kota";
        return view('admin.kota.index', $data);
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
            'nama_kota' => $request->nama_kota
        ];
        Kota::insert($data);
        return redirect(url('admin/kota'));
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
            'nama_kota' => $request->nama_kota
        ];
        Kota::where('id', $id)->update($data);
        return redirect(url('admin/kota'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kota::where('id', $id)->delete();
        return redirect(url('admin/kota'));
    }
}
