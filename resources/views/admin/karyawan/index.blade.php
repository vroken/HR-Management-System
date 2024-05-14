<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<x-admin-layouts>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Daftar List Jabatan</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="row justify-content-between mx-0 align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambahkan Karyawan
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('karyawan.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control mb-2 @error('name')is-invalid @enderror" placeholder="Nama Karyawan" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="employee_id">Nomor ID Karyawan</label>
                                                <input type="text" class="form-control mb-2 @error('employee_id')is-invalid @enderror" placeholder="ID Karyawan" name="employee_id" value="{{ old('employee_id') }}">
                                                @error('employee_id')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control mb-2 @error('email')is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="phone">Nomor Telepon Pribadi</label>
                                                <input type="number" class="form-control mb-2 @error('phone')is-invalid @enderror" placeholder="Nomor Telepon" name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="emergency_contact">Nomor Telepon Darurat</label>
                                                <input type="number" class="form-control mb-2 @error('emergency_contact')is-invalid @enderror" placeholder="Kontak Darurat" name="emergency_contact" value="{{ old('emergency_contact') }}">
                                                @error('emergency_contact')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">    
                                                <label for="password">Password Lengkap</label>
                                                <input type="password" class="form-control mb-2 @error('password')is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                                                @error('password')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="password_confirmation">Konfirmasi Password</label>
                                                <input type="password" class="form-control mb-2 @error('password_confirmation')is-invalid @enderror" placeholder="Konfirmasi Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                                @error('password_confirmation')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="date_of_birth">Tanggal Lahir</label>
                                                <input type="date" class="form-control mb-2 @error('date_of_birth')is-invalid @enderror" placeholder="Tanggal Lahir" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                                @error('date_of_birth')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-select mb-2 @error('jenis_kelamin')is-invalid @enderror"  placeholder="Jenis Kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="boy" {{ old('jenis_kelamin') == 'boy' ? 'selected' : '' }}>Laki - Laki</option>
                                                    <option value="girl" {{ old('jenis_kelamin') == 'girl' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="alamat">Alamat Lengkap</label>
                                                <input class="form-control mb-2 @error('alamat')is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="joining_date">Tanggal Awal Masuk</label>
                                                <input type="date" class="form-control mb-2 @error('joining_date')is-invalid @enderror" placeholder="Tanggal Join" name="joining_date" value="{{ old('joining_date') }}">
                                                @error('joining_date')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label for="employee_status">Status Karyawan</label>
                                                <select class="form-select mb-2 @error('employee_status') is-invalid @enderror" name="employee_status">
                                                    <option value="" selected disabled>Pilih Status Karyawan</option>
                                                    <option value="active" {{ old('employee_status') == 'active' ? 'selected' : '' }}>Aktif</option>
                                                    <option value="leave" {{ old('employee_status') == 'leave' ? 'selected' : '' }}>Cuti</option>
                                                    <option value="terminated" {{ old('employee_status') == 'terminated' ? 'selected' : '' }}>Diberhentikan</option>
                                                </select>
                                                @error('employee_status')
                                                    <small class="invalid-feedback">{{ $message }}</small>
                                                @enderror
                                            </div>                            

                                            <div class="col-md-6">
                                                <label for="name">Jabatan</label>
                                                <select class="form-select mb-2 @error('jabatan')is-invalid @enderror"  placeholder="Nama Jabatan" name="jabatan" value="{{ old('jabatan') }}">
                                                    <option selected>Pilih Nama Jabatan</option>
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('jabatan')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name">Role</label>
                                                <select class="form-select mb-2 @error('role')is-invalid @enderror"  placeholder="Role User" name="role" value="{{ old('role') }}">
                                                    <option selected>Pilih Role</option>
                                                    @foreach ($role as $rol)
                                                        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for="image" class="form-label">Gambar Profile</label>
                                                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="image" name="gambar" onchange="previewImage()">
                                                <img class="img-preview img-fluid mt-2 col-sm-7" alt="" >
                                                @error('gambar')
                                                    <small class="invalid-feedback">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="modal-footer mt-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="gaji">Gaji Pokok</label>
                                                    <input type="text" class="form-control mb-2 @error('gaji') is-invalid @enderror" placeholder="Gaji" name="gaji" id="gajiInput" value="{{ old('gaji') }}">
                                                    @error('gaji')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                                                    <input type="text" class="form-control mb-2 @error('tunjangan_jabatan') is-invalid @enderror" placeholder="Tunjangan Jabatan Karyawan" name="tunjangan_jabatan" id="gajiInput" value="{{ old('tunjangan_jabatan') }}">
                                                    @error('tunjangan_jabatan')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="lembur">Lembur</label>
                                                    <input type="text" class="form-control mb-2 @error('lembur') is-invalid @enderror" placeholder="Biaya Lembur" name="lembur" id="gajiInput" value="{{ old('lembur') }}">
                                                    @error('lembur')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="uang_makan">Uang Makan</label>
                                                    <input type="text" class="form-control mb-2 @error('uang_makan') is-invalid @enderror" placeholder="Biaya Makan" name="uang_makan" id="gajiInput" value="{{ old('uang_makan') }}">
                                                    @error('uang_makan')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="pot_bpjs">Potongan BPJS</label>
                                                    <input type="text" class="form-control mb-2 @error('pot_bpjs') is-invalid @enderror" placeholder="Potongan BPJS" name="pot_bpjs" id="gajiInput" value="{{ old('pot_bpjs') }}">
                                                    @error('pot_bpjs')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="pot_pajak">Potongan Pajak</label>
                                                    <input type="text" class="form-control mb-2 @error('pot_pajak') is-invalid @enderror" placeholder="Potongan Pajak" name="pot_pajak" id="gajiInput" value="{{ old('pot_pajak') }}">
                                                    @error('pot_pajak')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="pot_jht">Potongan JHT</label>
                                                    <input type="text" class="form-control mb-2 @error('pot_jht') is-invalid @enderror" placeholder="Potongan Jaminan Hari Tua" name="pot_jht" id="gajiInput" value="{{ old('pot_jht') }}">
                                                    @error('pot_jht')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif

                <table class="table table-hover my-0">
                    <thead>
                        <td scope="col"><input type="checkbox" class="check-all"></td>
                        <td>No.</td>
                        <td>Nama Karyawan</td>
                        <td>No Telepon</td>
                        <td>Jabatan</td>
                        <td>Status Karyawan</td>
                        <td>Aksi</td>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $user)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $user->id }}"></td>
                                <td>{{ ($karyawan->currentPage() - 1) * $karyawan->perPage() + $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->positions->name ?? 'Tidak ada jabatan' }}</td>
                                    @if ($user->employee_status == 'active')
                                        <td><span class="badge bg-success">Aktif</span></td>
                                    @elseif ($user->employee_status == 'leave')
                                        <td><span class="badge bg-danger">Keluar</span></td>
                                    @elseif ($user->employee_status == 'terminated')
                                        <td><span class="badge bg-warning">Cuti</span></td>
                                    @endif
                                <td class="">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalShow{{ $user->id }}">
                                                    Lihat
                                                </button>
                                            </div>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalShow{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="{{ Storage::url($user->gambar) }}" class="img-fluid rounded-start" alt="gambar">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h2>{{ $user->name }}</h2>
                                                                        <h6 class="card-subtitle mb-2 text-muted">{{ $user->employee_id }}</h6>
                                                                        <p class="card-text">{{ $user->alamat }}</p>
                                                                    </div>
                                                                </div>
                                                                <ul class="list-group list-group-flush mt-3">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Email</span>
                                                                            <li class="list-group-item">{{ $user->email }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span for="">Nomor Telepon</span>
                                                                            <li class="list-group-item">{{ $user->phone }}</li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span for="">Nomor Telepon Darurat</span>
                                                                            <li class="list-group-item">{{ $user->emergency_contact }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tanggal Lahir</span>
                                                                            <li class="list-group-item">{{ \Carbon\Carbon::parse($user->date_of_birth)->format('d F Y') }}</li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Jenis Kelamin</span>
                                                                            @if ($user->jenis_kelamin == 'boy')
                                                                                <li class="list-group-item">Laki-Laki</li>
                                                                            @elseif ($user->jenis_kelamin == 'girl')
                                                                                <li class="list-group-item">Perempuan</li>
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tanggal Awal Masuk</span>
                                                                            <li class="list-group-item">{{ \Carbon\Carbon::parse($user->joining_date)->format('d F Y') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Status Karyawan</span>
                                                                            @if ($user->employee_status == 'active')
                                                                                <li class="list-group-item">Aktif</li>
                                                                            @elseif ($user->employee_status == 'leave')
                                                                                <li class="list-group-item">Keluar</li>
                                                                            @elseif ($user->employee_status == 'terminated')
                                                                                <li class="list-group-item">Cuti</li>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Jabatan Karyawan</span>
                                                                            <li class="list-group-item">{{ $user->positions->name }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Role Account</span>
                                                                            <li class="list-group-item">{{ $user->role->name }}</li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Gaji Pokok</span>
                                                                            <li class="list-group-item">{{ number_format($user->gaji, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tunjangan Jabatan</span>
                                                                            <li class="list-group-item">{{ number_format($user->tunjangan_jabatan, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Biaya Lembur</span>
                                                                            <li class="list-group-item">{{ number_format($user->lembur, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Biaya Makan</span>
                                                                            <li class="list-group-item">{{ number_format($user->uang_makan, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan BPJS</span>
                                                                            <li class="list-group-item">{{ number_format($user->pot_bpjs, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan Pajak</span>
                                                                            <li class="list-group-item">{{ number_format($user->pot_pajak, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan JHT</span>
                                                                            <li class="list-group-item">{{ number_format($user->pot_jht, 0, ',', '.') }}</li>
                                                                        </div>
                                                                        <div class="col-md-12 mt-2">
                                                                            <span>Total Gaji Keseluruhan</span>
                                                                            <li class="list-group-item">
                                                                                {{ number_format($user->gaji + $user->tunjangan_jabatan + $user->lembur + $user->uang_makan - $user->pot_bpjs - $user->pot_pajak - $user->pot_jht, 0, ',', '.') }}
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ route('generate.pdf', $user->id) }}" class="btn btn-primary">Cetak Slip Gaji</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{ $user->id }}">
                                                Edit
                                            </button>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalEdit{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('karyawan.update', $user->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="name">Nama Lengkap</label>
                                                                    <input type="text" class="form-control mb-2 @error('name')is-invalid @enderror" placeholder="Nama Karyawan" name="name" value="{{ $user->name }}">
                                                                    @error('name')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="employee_id">Nomor ID Karyawan</label>
                                                                    <input type="text" class="form-control mb-2 @error('employee_id')is-invalid @enderror" placeholder="ID Karyawan" name="employee_id" value="{{ $user->employee_id }}">
                                                                    @error('employee_id')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-12">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control mb-2 @error('email')is-invalid @enderror" placeholder="Email" name="email" value="{{ $user->email }}">
                                                                    @error('email')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="phone">Nomor Telepon Pribadi</label>
                                                                    <input type="number" class="form-control mb-2 @error('phone')is-invalid @enderror" placeholder="Nomor Telepon" name="phone" value="{{ $user->phone }}">
                                                                    @error('phone')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="emergency_contact">Nomor Telepon Darurat</label>
                                                                    <input type="number" class="form-control mb-2 @error('emergency_contact')is-invalid @enderror" placeholder="Kontak Darurat" name="emergency_contact" value="{{ $user->emergency_contact }}">
                                                                    @error('emergency_contact')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="current_password">Password Lama</label>
                                                                    <input type="password" class="form-control mb-2 @error('current_password') is-invalid @enderror" placeholder="Password Lama" name="current_password">
                                                                    @error('current_password')
                                                                        <small class="invalid-feedback">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="new_password">Password Baru</label>
                                                                    <input type="password" class="form-control mb-2 @error('new_password') is-invalid @enderror" placeholder="Password Baru" name="new_password">
                                                                    @error('new_password')
                                                                        <small class="invalid-feedback">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                                                                    <input type="password" class="form-control mb-2" placeholder="Konfirmasi Password Baru" name="new_password_confirmation">
                                                                    @error('new_password_confirmation')
                                                                        <small class="invalid-feedback">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="date_of_birth">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control mb-2 @error('date_of_birth')is-invalid @enderror" placeholder="Tanggal Lahir" name="date_of_birth" value="{{ $user->date_of_birth }}">
                                                                    @error('date_of_birth')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                    <select class="form-select mb-2 @error('jenis_kelamin')is-invalid @enderror"  placeholder="Jenis Kelamin" name="jenis_kelamin" value="{{ $user->jenis_kelamin }}">
                                                                        <option value="boy" {{ $user->jenis_kelamin == 'boy' ? 'selected' : '' }}>
                                                                            Laki-Laki
                                                                        </option>
                                                                        <option value="girl" {{ $user->jenis_kelamin == 'girl' ? 'selected' : '' }}>
                                                                            Perempuan
                                                                        </option>
                                                                    </select>
                                                                    @error('jenis_kelamin')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="alamat">Alamat Lengkap</label>
                                                                    <input class="form-control mb-2 @error('alamat')is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{ $user->alamat }}">
                                                                    @error('alamat')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="joining_date">Tanggal Awal Masuk</label>
                                                                    <input type="date" class="form-control mb-2 @error('joining_date')is-invalid @enderror" placeholder="Tanggal Join" name="joining_date" value="{{ $user->joining_date }}">
                                                                    @error('joining_date')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <label for="employee_status">Status Karyawan</label>
                                                                    <select class="form-select mb-2 @error('employee_status') is-invalid @enderror" name="employee_status">
                                                                        <option value="active" {{ $user->employee_status == 'active' ? 'selected' : '' }}>
                                                                            Aktif
                                                                        </option>
                                                                        <option value="terminated" {{ $user->employee_status == 'terminated' ? 'selected' : '' }}>
                                                                            Cuti
                                                                        </option>
                                                                        <option value="leave" {{ $user->employee_status == 'leave' ? 'selected' : '' }}>
                                                                            Keluar
                                                                        </option>
                                                                    </select>
                                                                    @error('employee_status')
                                                                        <small class="invalid-feedback">{{ $message }}</small>
                                                                    @enderror
                                                                </div>                            
                    
                                                                <div class="col-md-6">
                                                                    <label for="name">Jabatan</label>
                                                                    <select class="form-select mb-2 @error('jabatan')is-invalid @enderror"  placeholder="Nama Jabatan" name="jabatan">
                                                                        @foreach ($positions as $position)
                                                                            <option value="{{ $position->id }}" {{ $position->id == $user->positions->id ? 'selected' : '' }}>
                                                                                {{ $position->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('jabatan')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="name">Role</label>
                                                                    <select class="form-select mb-2 @error('role')is-invalid @enderror"  placeholder="Role User" name="role" value="{{ old('role') }}">
                                                                        <option selected>Pilih Role</option>
                                                                        @foreach ($role as $rol)
                                                                            <option value="{{ $rol->id }}" {{ $rol->id == $user->role->id ? 'selected' : '' }}>
                                                                                {{ $rol->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('role')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <label for="image" class="form-label">Gambar Profile</label>
                                                                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="image2" name="gambar" onchange="previewImage2()" value="{{ $user->gambar }}">
                                                                    <img class="img-preview2 img-fluid mt-2 col-sm-7" alt="">
                                                                    @if($user->gambar)
                                                                        <img src="{{ Storage::url($user->gambar) }}" class="img-fluid" alt="User Image">
                                                                    @endif
                                                                    @error('gambar')
                                                                        <small class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer mt-1">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="gaji">Gaji Pokok</label>
                                                                        <input type="text" class="form-control mb-2 @error('gaji') is-invalid @enderror" placeholder="Gaji" name="gaji" id="gajiInput" value="{{ $user->gaji }}">
                                                                        @error('gaji')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                                                                        <input type="text" class="form-control mb-2 @error('tunjangan_jabatan') is-invalid @enderror" placeholder="Tunjangan Jabatan Karyawan" name="tunjangan_jabatan" id="gajiInput" value="{{ $user->tunjangan_jabatan }}">
                                                                        @error('tunjangan_jabatan')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                    
                                                                    <div class="col-md-6">
                                                                        <label for="lembur">Lembur</label>
                                                                        <input type="text" class="form-control mb-2 @error('lembur') is-invalid @enderror" placeholder="Biaya Lembur" name="lembur" id="gajiInput" value="{{ $user->lembur }}">
                                                                        @error('lembur')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="uang_makan">Uang Makan</label>
                                                                        <input type="text" class="form-control mb-2 @error('uang_makan') is-invalid @enderror" placeholder="Biaya Makan" name="uang_makan" id="gajiInput" value="{{ $user->uang_makan }}">
                                                                        @error('uang_makan')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                    
                                                                    <div class="col-md-6">
                                                                        <label for="pot_bpjs">Potongan BPJS</label>
                                                                        <input type="text" class="form-control mb-2 @error('pot_bpjs') is-invalid @enderror" placeholder="Potongan BPJS" name="pot_bpjs" id="gajiInput" value="{{ $user->pot_bpjs }}">
                                                                        @error('pot_bpjs')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="pot_pajak">Potongan Pajak</label>
                                                                        <input type="text" class="form-control mb-2 @error('pot_pajak') is-invalid @enderror" placeholder="Potongan Pajak" name="pot_pajak" id="gajiInput" value="{{ $user->pot_pajak }}">
                                                                        @error('pot_pajak')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                    
                                                                    <div class="col-md-6">
                                                                        <label for="pot_jht">Potongan JHT</label>
                                                                        <input type="text" class="form-control mb-2 @error('pot_jht') is-invalid @enderror" placeholder="Potongan Jaminan Hari Tua" name="pot_jht" id="gajiInput" value="{{ $user->pot_jht }}">
                                                                        @error('pot_jht')
                                                                            <small class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                  
                                </td>
                                <td>
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">

                                            <form class="delete-form" method="post" data-route="{{ route('karyawan.destroy', $user->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE') 
                                                <a href="{{ route('karyawan.destroy', $user->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    {{-- {{ $jabatan->links() }} --}}
                </nav>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }

        function previewImage2() {
            const image = document.querySelector('#image2');
            const imgpreview = document.querySelector('.img-preview2');

            imgpreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-admin-layouts>