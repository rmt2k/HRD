<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Module4Controller extends Controller
{
    public function index(){
        $person = Auth::user();
        $module = (object) [
            'mid' => '4',
            'title' => 'Karyawan',
            'link'  => '/karyawan',
            'icon' => 'feather icon-users'
        ];
        $tableKaryawan = User::all();
        return view('module4/index', compact('module','person','tableKaryawan'));
    }
    public function editKaryawan(Request $request){
        // dd($request->all());
        $editKaryawan = User::findOrFail($request->id);
        // dd($getKaryawan);

        // Update data karyawan dengan data yang diterima dari form
        $editKaryawan->email = $request->email;
        $editKaryawan->phone = $request->phone;
        $editKaryawan->name = $request->name;
        $editKaryawan->dob = $request->dob;
        $editKaryawan->gender = $request->gender;
        $editKaryawan->image = $request->image;
        $editKaryawan->address = $request->address;

        // Simpan perubahan data karyawan
        $editKaryawan->save();
        return redirect()->back()->with('success', 'Data karyawan berhasil diperbarui.');
    }
}
