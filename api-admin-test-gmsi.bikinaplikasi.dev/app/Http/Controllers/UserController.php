<?php

namespace App\Http\Controllers;

use PHPExcel;
use App\Models\User;

use App\Http\Requests;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    // UNTUK HALAMAN INDEX
    public function index(Request $request)
    {
        $data['user'] = User::paginate(1000);

        $data['user_count'] = count(Schema::getColumnListing('user'));

        return view('user.index', $data);
    }

    // UNTUK HALAMAN CREATE DATA
    public function create()
    {
        return view('user.create');
    }

    // UNTUK PROSES PENYIMPANAN / PENAMBAHAN DATA
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|unique:user,no_hp',
            'email' => 'required|unique:user,email',
            'password' => 'required|max:100|confirmed',
            'password_confirmation' => 'required',
        ]);

        $requestData = $request->except(['password_confirmation']);

        User::create($requestData);

        return redirect()->route('user.index')->with('success', 'Berhasil menambah User');
    }

    public function show(User $user)
    {
        $data["item"] = $user;
        $data["user"] = $user;

        return view('user.show', $data);
    }

    // UNTUK MENAMPILKAN HALAMAN EDIT DATA
    public function edit(User $user)
    {
        $data["user"] = $user;
        $data[strtolower("User")] = $user;

        return view('user.edit', $data);
    }

    // UNTUK PROSES PENYIMPANAN EDIT DATA
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'jenis_kelamin' => 'required',
            'no_hp' => "required|unique:user,no_hp,$user->no_hp,no_hp",
            'email' => "required|unique:user,email,$user->email,email",
            'password' => 'required|max:100|confirmed',
            'password_confirmation' => 'required',
        ]);

        $requestData = $request->except(['password_confirmation', '_method']);

        $user->update($requestData);

        return redirect()->route('user.index')->with('success', 'Berhasil mengubah User');
    }

    // UNTUK MENGHAPUS SATU DATA
    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }

    // UNTUK MENGHAPUS BANYAK DATA
    public function hapus_semua(Request $request)
    {
        $user_ids = collect(json_decode($request->ids, true))->filter(function ($item) {

            return $item != User::where('level', 'Admin')->first()->id;
        });

        $users = User::whereIn('id', $user_ids->toArray())->get();

        User::whereIn('id', $users->pluck('id'))->delete();

        return back()->with('success', 'Berhasil menghapus banyak data user');
    }

    // UNTUK MENAMPILKAN HALAMAN PROFILE
    public function profile(User $user)
    {
        $data["user"] = $user;
        $data[strtolower("User")] = $user;

        return view('user.profile', $data);
    }

    // UNTUK MENGHAPUS PROFILE
    public function profileUpdate(Request $request, User $user)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'email' => 'required|email|max:50',
            'password' => 'required|max:100|confirmed',
            'password_confirmation' => 'required'
        ]);

        $requestData = $request->except(['password_confirmation']);

        $user->update($requestData);

        return redirect()->route('user.index')->with('success', 'Berhasil mengubah User');
    }
}