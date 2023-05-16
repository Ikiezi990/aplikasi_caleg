<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CalonPemilih;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = "Dashboard Admin";
        $data['pemilihpria'] = CalonPemilih::where('jenis_kelamin', 'L')->count();
        $data['pemilihwanita'] = CalonPemilih::where('jenis_kelamin', 'P')->count();
        $data['total'] = CalonPemilih::count();
        return view('admin.index', $data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
