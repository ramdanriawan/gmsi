<?php

namespace App\Http\Controllers;

use App\Models\ActivityGroups;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ActivityGroupsController extends Controller
{

    // UNTUK HALAMAN INDEX
    public function index(Request $request)
    {
        $data['activity_groups'] = ActivityGroups::paginate(1000);

        $data['activity_groups_count'] = count(Schema::getColumnListing('activity_groups'));

        return view('activity-groups.index', $data);
    }

    // UNTUK HALAMAN CREATE DATA
    public function create()
    {
        return view('activity-groups.create');
    }

    // UNTUK PROSES PENYIMPANAN / PENAMBAHAN DATA
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:30',
            'email' => 'required|email|unique:activity_groups,email',
        ]);

        $requestData = $request->except(['password_confirmation']);

        ActivityGroups::create($requestData);

        return redirect()->route('activity-groups.index')->with('success', 'Berhasil menambah Activity Groups');
    }

    // UNTUK MENAMPILKAN HALAMAN EDIT DATA
    public function edit(ActivityGroups $activityGroups)
    {
        $data["activity_groups"] = $activityGroups;
        $data[strtolower("activity_groups")] = $activityGroups;

        return view('activity-groups.edit', $data);
    }

    // UNTUK PROSES PENYIMPANAN EDIT DATA
    public function update(Request $request, ActivityGroups $activityGroups)
    {
        $this->validate($request, [
            'title' => 'required|string|max:30',
            'email' => "required|email|unique:activity_groups,email,$activityGroups->email,email",
        ]);

        $requestData = $request->except(['password_confirmation', '_method']);

        $activityGroups->update($requestData);

        return redirect()->route('activity-groups.index')->with('success', 'Berhasil mengubah Activity Groups');
    }

    // UNTUK MENGHAPUS SATU DATA
    public function destroy(ActivityGroups $activityGroups)
    {
        $activityGroups->delete();
        
        return redirect()->route('activity-groups.index')->with('success', 'Activity Groups berhasil dihapus!');
    }

    // UNTUK MENGHAPUS BANYAK DATA
    public function hapus_semua(Request $request)
    {
        $activity_ids = collect(json_decode($request->ids, true))->filter(function ($item) {

            return $item != ActivityGroups::where('level', 'Admin')->first()->id;
        });

        $activitys = ActivityGroups::whereIn('id', $activity_ids->toArray())->get();

        ActivityGroups::whereIn('id', $activitys->pluck('id'))->delete();

        return back()->with('success', 'Berhasil menghapus banyak data activity groups');
    }
}