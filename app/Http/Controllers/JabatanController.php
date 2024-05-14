<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::latest()->paginate(10);

        $title = 'Hapus Jabatan';
        $text = "Apakah anda yakin ingin menghapus ini?";
        confirmDelete($title, $text);

        return view('admin.jabatan.index', compact('jabatan'));
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
    public function store(StoreJabatanRequest $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|unique:positions',
        ]);

        Jabatan::create($validateDate);

        return redirect()->route('positions.index')->with('message', 'Nama jabatan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        $this->authorize('view', $jabatan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJabatanRequest $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->name = $request->input('name');
        $jabatan->save();
    
        return redirect()->route('positions.index')->with('message', 'Nama jabatan berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $position = Jabatan::findOrFail($id);
        Alert::success('Berhasil Dihapus!', 'Nama Jabatan Berhasil Dihapus.');
        
        // Perform soft deletion
        $position->delete();

        return redirect()->route('positions.index');
    }
}
