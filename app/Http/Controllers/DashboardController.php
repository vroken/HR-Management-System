<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'kehadiran' => Presence::all(),
            'absensi' => Absensi::all(),
        ]);
    }
}
