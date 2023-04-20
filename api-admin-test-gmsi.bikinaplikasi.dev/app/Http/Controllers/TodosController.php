<?php

namespace App\Http\Controllers;

use App\Models\ActivityGroups;
use App\Models\Todos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class TodosController extends Controller
{

    // UNTUK HALAMAN INDEX
    public function index(Request $request)
    {
        $data['todos'] = Todos::paginate(1000);

        $data['todos_count'] = count(Schema::getColumnListing('todos'));

        return view('todos.index', $data);
    }

    // UNTUK HALAMAN CREATE DATA
    public function create()
    {
        $data['activityGroups'] = ActivityGroups::pluck('title', 'id');
        
        return view('todos.create', $data);
    }

    // UNTUK PROSES PENYIMPANAN / PENAMBAHAN DATA
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:30',
            'activity_group_id' => 'required',
            'is_active' => 'required',
            'priority' => 'required',
        ]);

        $requestData = $request->except(['password_confirmation']);

        Todos::create($requestData);

        return redirect()->route('todos.index')->with('success', 'Berhasil menambah Todos');
    }

    // UNTUK MENAMPILKAN HALAMAN EDIT DATA
    public function edit(Todos $todos)
    {
        $data["todos"] = $todos;
        $data[strtolower("Todos")] = $todos;
        $data['activityGroups'] = ActivityGroups::pluck('title', 'id');

        return view('todos.edit', $data);
    }

    
    // UNTUK PROSES PENYIMPANAN EDIT DATA
    public function update(Request $request, Todos $todos)
    {
        $this->validate($request, [
            'title' => 'required|string|max:30',
            'activity_group_id' => 'required',
            'is_active' => 'required',
            'priority' => 'required',
        ]);

        $requestData = $request->except(['password_confirmation', '_method']);

        $todos->update($requestData);

        return redirect()->route('todos.index')->with('success', 'Berhasil mengubah Todos');
    }

    // UNTUK MENGHAPUS SATU DATA
    public function destroy(Todos $todos)
    {
        $todos->delete();
        
        return redirect()->route('todos.index')->with('success', 'Todos berhasil dihapus!');
    }

    // UNTUK MENGHAPUS BANYAK DATA
    public function hapus_semua(Request $request)
    {
        $todos_ids = collect(json_decode($request->ids, true))->filter(function ($item) {

            return $item != Todos::where('level', 'Admin')->first()->id;
        });

        $todoss = Todos::whereIn('id', $todos_ids->toArray())->get();

        Todos::whereIn('id', $todoss->pluck('id'))->delete();

        return back()->with('success', 'Berhasil menghapus banyak data todos');
    }
}