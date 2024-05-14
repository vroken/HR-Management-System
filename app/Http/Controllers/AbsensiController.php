<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = Absensi::with('positions')->latest()->paginate(10);
        $jabatan = Jabatan::all();

        $title = 'Hapus Jabatan';
        $text = "Apakah anda yakin ingin menghapus ini?";
        confirmDelete($title, $text);

        return view('admin.absensi.index', compact('absensi', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:6'],
            'description' => ['required', 'string', 'max:500'],
            'start_time' => ['required', 'date_format:H:i'],
            'batas_start_time' => ['required', 'date_format:H:i', 'after:start_time'],
            'end_time' => ['required', 'date_format:H:i'],
            'batas_end_time' => ['required', 'date_format:H:i', 'after:end_time'],
            'code' => ['sometimes', 'nullable', 'boolean'],
            'positions' => ['required', 'array'], // Ensure positions are provided as an array
            'positions.*' => ['exists:positions,id'], // Ensure each position exists in the database
        ]);
    
        // Create the Absensi instance and save it to the database
        $absensi = new Absensi();
        $absensi->title = $request->title;
        $absensi->description = $request->description;
        $absensi->start_time = $request->start_time;
        $absensi->batas_start_time = $request->batas_start_time;
        $absensi->end_time = $request->end_time;
        $absensi->batas_end_time = $request->batas_end_time;
        $absensi->code = $request->code;
        $absensi->save();
    
        // Attach selected positions to the Absensi
        $absensi->positions()->attach($request->positions);
    
    
        // dd($request->all());

        return redirect()->route('absensi.index')->with('message', 'Absensi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:6'],
            'description' => ['required', 'string', 'max:500'],
            'start_time' => ['required', 'date_format:H:i'],
            'batas_start_time' => ['required', 'date_format:H:i', 'after:start_time'],
            'end_time' => ['required', 'date_format:H:i'],
            'batas_end_time' => ['required', 'date_format:H:i', 'after:end_time'],
            'code' => ['sometimes', 'nullable', 'boolean'],
            'positions' => ['required', 'array'], 
            'positions.*' => ['exists:positions,id'], 
        ]);
    
        $absensi->title = $request->title;
        $absensi->description = $request->description;
        $absensi->start_time = $request->start_time;
        $absensi->batas_start_time = $request->batas_start_time;
        $absensi->end_time = $request->end_time;
        $absensi->batas_end_time = $request->batas_end_time;
        $absensi->code = $request->code;
        $absensi->save();
    
        $absensi->positions()->sync($request->positions);
    
        return redirect()->route('absensi.index')->with('message', 'Absensi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);

        // Delete the Absensi instance
        $absensi->delete();

        // Redirect the user to the index page with a success message
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
