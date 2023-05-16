<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['provinsi'] = Provinsi::all();
        $data['title'] = "Data Provinsi";
        return view('admin.provinsi.index', $data);
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
            'nama_provinsi' => $request->nama_provinsi
        ];
        Provinsi::insert($data);
        return redirect(url('admin/provinsi'));
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
            'nama_provinsi' => $request->nama_provinsi
        ];
        Provinsi::where('id', $id)->update($data);
        return redirect(url('admin/provinsi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Provinsi::where('id', $id)->delete();
        return redirect(url('admin/provinsi'));
    }
}
