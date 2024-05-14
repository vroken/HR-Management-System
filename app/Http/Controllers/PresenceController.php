<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absensi;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // protected $absensi;

    // public function __construct(Absensi $absensi)
    // {
    //     $this->absensi = $absensi;
    // }

    public function index()
    {
        $kehadiran = Presence::latest()->paginate(10);
        $absensi = Absensi::all();

        $title = 'Hapus Jabatan';
        $text = "Apakah anda yakin ingin menghapus ini?";
        confirmDelete($title, $text);

        return view('admin.kehadiran.index', compact('kehadiran', 'absensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kehadiran.create', [
            'kehadiran' => Presence::all(),
            'absensi' => Absensi::all(),
        ]);
    }

    public function absensiMasuk() {
        return view('admin.dashboard.masuk', [
            'kehadiran' => Presence::all(),
            'absensi' => Absensi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'absensi_id' => ['required', 'exists:attedance,id'],
            'presence_date' => ['required', 'date'],
            'entry_time' => ['nullable', 'date_format:H:i'],
            'exit_time' => ['nullable', 'date_format:H:i'],
        ]);

        $absensi = Absensi::findOrFail($request->absensi_id);

        // Melakukan validasi untuk absensi batas masuk
        if ($request->entry_time > $absensi->batas_start_time) {
            return redirect()->back()->withErrors(['message' => 'Anda tidak dapat melakukan absensi MASUK setelah pukul : ' . $absensi->batas_start_time]);
        }

        // Melakukan validasi untuk absensi masuk
        if ($request->entry_time && ($request->entry_time < $absensi->start_time)) {
            return redirect()->back()->withErrors(['message' => 'Anda tidak dapat melakukan absensi MASUK sebelum pukul : ' . $absensi->start_time]);
        }

        // Melakukan validasi untuk absensi keluar
        if ($request->exit_time && ($request->exit_time < $absensi->end_time)) {
            return redirect()->back()->withErrors(['message' => 'Anda tidak dapat melakukan absensi KELUAR sebelum pukul : ' . $absensi->end_time]);
        }

        try {
            Presence::create([
                'user_id' => $request->user_id,
                'absensi_id' => $request->absensi_id,
                'presence_date' => $request->presence_date,
                'entry_time' => $request->entry_time,
                'exit_time' => $request->exit_time,
            ]);

            Alert::success('Absen Berhasil!', 'Anda sudah melakukan absensi hari ini!');

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            // Debug: Check if any exception occurs
            dd($e->getMessage());
            return redirect()->back()->withInput()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Presence $presence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presence $presence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        //
    }
}
