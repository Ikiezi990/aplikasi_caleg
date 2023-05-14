<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonPemilih;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;


class CalonPemilihController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['title'] = "Data Pemilih";
        $data['data'] = CalonPemilih::where('user_id', auth()->user()->id)->get();
        $data['provinsi'] = Provinsi::all();
        $data['kota'] = Kota::all();
        $data['kelurahan'] = Kelurahan::all();
        $data['kecamatan'] = Kecamatan::all();

        return view('calonpemilih.index', $data);
    }
    public function store(Request $request)
    {
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_wa' => $request->no_wa,
            'alamat' => $request->alamat,
            'provinsi_id' => $request->provinsi,
            'kabupaten_id' => $request->kota,
            'kecamatan_id' => $request->kecamatan,
            'kelurahan_id' => $request->kelurahan,
            'no_wa' => $request->no_whatsapp,
            'user_id' => auth()->user()->id
        ];
        if ($request->file('scan_ktp')) {
            $file = $request->file('scan_ktp');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('ktppemilih'), $filename);
            $data['scan_ktp'] = $filename;
        }
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('fotorelawan'), $filename);
            $data['foto'] = $filename;
        }
        CalonPemilih::insert($data);
        return redirect(route('calonpemilih.index'));
    }
    public function update(Request $request, $id)
    {
        if ($request->has('foto') && $request->has('scan_ktp')) {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_wa' => $request->no_wa,
                'alamat' => $request->alamat,
                'provinsi_id' => $request->provinsi,
                'kabupaten_id' => $request->kota,
                'kecamatan_id' => $request->kecamatan,
                'kelurahan_id' => $request->kelurahan,
                'no_wa' => $request->no_whatsapp,
                'user_id' => auth()->user()->id
            ];
            if ($request->file('scan_ktp')) {
                $file = $request->file('scan_ktp');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('ktppemilih'), $filename);
                $data['scan_ktp'] = $filename;
            }
            if ($request->file('foto')) {
                $file = $request->file('foto');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('fotorelawan'), $filename);
                $data['foto'] = $filename;
            }
            CalonPemilih::where('id', $id)->update($data);
            return redirect(route('calonpemilih.index'));
        } else {
            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_wa' => $request->no_wa,
                'alamat' => $request->alamat,
                'provinsi_id' => $request->provinsi,
                'kabupaten_id' => $request->kota,
                'kecamatan_id' => $request->kecamatan,
                'kelurahan_id' => $request->kelurahan,
                'no_wa' => $request->no_whatsapp,
                'user_id' => auth()->user()->id
            ];
            CalonPemilih::where('id', $id)->update($data);
            return redirect(route('calonpemilih.index'));
        }
    }
    public function destroy($id)
    {
        CalonPemilih::where('id', $id)->delete();
        return redirect(route('calonpemilih.index'));
    }
}
