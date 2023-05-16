<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kelurahan'] = Kelurahan::all();
        $data['title'] = "Data kelurahan";
        return view('admin.kelurahan.index', $data);
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
            'nama_kelurahan' => $request->nama_kelurahan
        ];
        Kelurahan::insert($data);
        return redirect(url('admin/kelurahan'));
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
            'nama_kelurahan' => $request->nama_kelurahan
        ];
        Kelurahan::where('id', $id)->update($data);
        return redirect(url('admin/kelurahan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan::where('id', $id)->delete();
        return redirect(url('admin/kelurahan'));
    }
}
