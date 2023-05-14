<?php

namespace App\Http\Controllers;

use App\Models\CalonPemilih;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['calonpemilihwanita'] = CalonPemilih::where(['jenis_kelamin' => 'P', 'user_id' => auth()->user()->id])->count();
        $data['calonpemilihpria'] = CalonPemilih::where(['jenis_kelamin' => 'L', 'user_id' => auth()->user()->id])->count();
        $data['total'] = CalonPemilih::where(['user_id' => auth()->user()->id])->count();
        return view('home', $data);
    }
}
