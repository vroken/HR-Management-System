<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Role;
use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use Illuminate\Database\Eloquent\Collection;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // private $role;
    // private $positions;

    // public function __construct()
    // {
    //     $this->role = Role::all(); // Fetch all roles
    //     $this->positions = Jabatan::all(); // Fetch all positions
    // }

    public function index()
    {
        $karyawan = User::with('positions')->latest()->paginate(10);
        $positions = Jabatan::all();
        $role = Role::all();

        $title = 'Hapus Karyawan';
        $text = "Apakah anda yakin ingin menghapus ini?";
        confirmDelete($title, $text);

        return view('admin.karyawan.index', compact('karyawan', 'positions', 'role'));
    }

    public function viewPdf($id)
    {
        $users = User::findOrFail($id);

        // Load HTML content from blade view
        $html = view('admin.dashboard.masuk', compact('users'))->render();
    
        // Setup Dompdf options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
    
        // Instantiate Dompdf with options
        $dompdf = new Dompdf($options);
        
        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
    
        // Output the generated PDF (inline or download)
        return $dompdf->stream('slip-gaji.pdf');
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
    public function store(StoreKaryawanRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:8',
            'jabatan' => 'required|exists:positions,id',
            'role' => 'required|exists:roles,id',
            'employee_id' => 'required|unique:users,employee_id',
            'date_of_birth' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'joining_date' => 'required|date',
            'gaji' => 'required|numeric',
            'employee_status' => 'required|string',
            'emergency_contact' => 'required|string',
            'gambar' => 'nullable|image|max:3050',
            'tunjangan_jabatan' => 'required|numeric',
            'lembur' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'pot_bpjs' => 'required|numeric',
            'pot_pajak' => 'required|numeric',
            'pot_jht' => 'required|numeric',
        ]);

        try {
            // Store the uploaded image path
            $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('post-images', 'public') : null;

            // Create new user
            $user = new User;
            $user->name = $validatedData['name'];   
            $user->email = $validatedData['email'];
            $user->phone = $validatedData['phone'];
            $user->password = Hash::make($validatedData['password']);
            $user->position_id = $validatedData['jabatan'];
            $user->role_id = $validatedData['role'];
            $user->employee_id = $validatedData['employee_id'];
            $user->date_of_birth = $validatedData['date_of_birth'];
            $user->jenis_kelamin = $validatedData['jenis_kelamin'];
            $user->alamat = $validatedData['alamat'];
            $user->joining_date = $validatedData['joining_date'];
            $user->gaji = $validatedData['gaji'];
            $user->employee_status = $validatedData['employee_status'];
            $user->emergency_contact = $validatedData['emergency_contact'];
            $user->gambar = $gambarPath;
            $user->tunjangan_jabatan = $validatedData['tunjangan_jabatan'];
            $user->lembur = $validatedData['lembur'];
            $user->uang_makan = $validatedData['uang_makan'];
            $user->pot_bpjs = $validatedData['pot_bpjs'];
            $user->pot_pajak = $validatedData['pot_pajak'];
            $user->pot_jht = $validatedData['pot_jht'];
            $user->save();

            Alert::success('Berhasil Ditambahkan!', 'Nama karyawan berhasil ditambahkan.');
            return redirect()->route('karyawan.index');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['message' => $e->getMessage()]);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(User $karyawan)
    {
        return view('admin.dashboard.masuk', [
            'users' => User::with('positions'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'phone' => ['required', 'unique:users,phone,'.$id],
            'current_password' => ['current_password'],
            'password' => [Password::defaults(), 'confirmed'],
            'jabatan' => ['required', 'exists:positions,id'],
            'role' => ['required', 'exists:roles,id'],
            'date_of_birth' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'joining_date' => 'required|date',
            'gaji' => 'required|numeric',
            'employee_status' => 'required|string',
            'emergency_contact' => 'required|string',
            'gambar' => ['nullable', 'image', 'max:3050'],
            'tunjangan_jabatan' => 'required|numeric',
            'lembur' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'pot_bpjs' => 'required|numeric',
            'pot_pajak' => 'required|numeric',
            'pot_jht' => 'required|numeric',
        ]);
    
        $karyawan = User::find($id);
        $karyawan->name = $request->name;
        $karyawan->email = $request->email;
        $karyawan->phone = $request->phone;
        $karyawan->position_id = $request->jabatan;
        $karyawan->role_id = $request->role;
        $karyawan->date_of_birth = $request->date_of_birth;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->alamat = $request->alamat;
        $karyawan->joining_date = $request->joining_date;
        $karyawan->gaji = $request->gaji;
        $karyawan->employee_status = $request->employee_status;
        $karyawan->emergency_contact = $request->emergency_contact;
        $karyawan->gambar = $request->image;
        $karyawan->tunjangan_jabatan = $request->tunjangan_jabatan;
        $karyawan->lembur = $request->lembur;
        $karyawan->uang_makan = $request->uang_makan;
        $karyawan->pot_bpjs = $request->pot_bpjs;
        $karyawan->pot_pajak = $request->pot_pajak;
        $karyawan->pot_jht = $request->pot_jht;
        
        if ($request->hasFile('gambar')) {
            if ($karyawan->gambar) {
                Storage::delete($karyawan->gambar);
            }
            $karyawan->gambar = $request->file('gambar')->store('post-images', 'public');
        }

        if ($request->filled('new_password')) {
            $userData['password'] = Hash::make($request->new_password);
        }

        Alert::success('Karyawan Updated!', 'Data karyawan berhasil diupdate!') ;

        $karyawan->save();

        return redirect()->route('karyawan.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $karyawan = User::findOrFail($id);
        Alert::success('Success Title', 'Success Message');
        Storage::delete($karyawan->gambar);
        $karyawan->delete();

        return redirect()->route('karyawan.index');
        ;
    }
}
