<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<x-admin-layouts>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Daftar List Absensi</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="row justify-content-between mx-0 align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambahkan Absensi
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('absensi.store') }}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="title" class="mb-2">Judul Absensi</label>
                                                    <input type="text" class="form-control mb-3 @error('title') is-invalid @enderror" placeholder="Judul Absensi" name="title" value="{{ old('title') }}">
                                                    @error('title')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                    
                                                    <label for="description" class="mb-2">Deskripsi</label>
                                                    <input type="text" class="form-control mb-3 @error('description') is-invalid @enderror" placeholder="Judul Absensi" name="description" value="{{ old('description') }}">
                                                    @error('description')
                                                        <small class="invalid-feedback">
                                                            {{ $message }}
                                                        </small>
                                                    @enderror
                                                </div>
                
                                                {{-- Waktu Absensi Masuk --}}
                                                <div class="col-md-6">
                                                    <div class="mb-2">
                                                        <label for="start_time">Waktu Absen Masuk</label>
                                                        <input type="time" class="form-control @error('start_time') is-invalid @enderror" placeholder="Judul Absensi" name="start_time" value="{{ old('start_time') }}">
                                                        @error('start_time')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-2">
                                                        <label for="batas_start_time">Batas Absen Masuk</label>
                                                        <input type="time" class="form-control @error('batas_start_time') is-invalid @enderror" placeholder="Judul Absensi" name="batas_start_time" value="{{ old('batas_start_time') }}">
                                                        @error('batas_start_time')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
            
                                                {{-- Waktu Absensi Keluar --}}
                                                <div class="col-md-6">
                                                    <div class="mb-2">
                                                        <label for="end_time">Waktu Absen Keluar</label>
                                                        <input type="time" class="form-control @error('end_time') is-invalid @enderror" placeholder="Judul Absensi" name="end_time" value="{{ old('end_time') }}">
                                                        @error('end_time')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-2">
                                                        <label for="batas_end_time">Batas Absen Keluar</label>
                                                        <input type="time" class="form-control @error('batas_end_time') is-invalid @enderror" placeholder="Judul Absensi" name="batas_end_time" value="{{ old('batas_end_time') }}">
                                                        @error('batas_end_time')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-12 d-flex flex-column">
                                                    <label class="jabatan">Jabatan Karyawan</label>
                                                    @foreach ($jabatan as $posisi)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="positions[]" value="{{ $posisi->id }}">
                                                            <label class="form-check-label">{{ $posisi->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-end mb-3">
                                            <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button>
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
                        <td>Nama Absensi</td>
                        <td>Keterangan</td>
                        <td>Jabatan</td>
                        <td>Aksi</td>
                    </thead>
                    <tbody>
                        @foreach ($absensi as $absen)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $absen->id }}"></td>
                                <td>{{ ($absensi->currentPage() - 1) * $absensi->perPage() + $loop->iteration }}</td>
                                <td>{{ $absen->title }}</td>
                                <td>{{ $absen->description }}</td>
                                <td>
                                    @if($absen->positions->isNotEmpty())
                                        @foreach($absen->positions as $position)
                                            {{ $position->name }}
                                            @if(!$loop->last)
                                                , 
                                            @endif
                                        @endforeach
                                    @else
                                        Tidak ada jabatan
                                    @endif
                                </td>
                                
                                <td class="d-flex justify-content-between">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{ $absen->id }}">
                                                Edit
                                            </button>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalEdit{{ $absen->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Absensi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('absensi.update', $absen->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-2">
                                                                            <label for="title" class="mb-2">Judul Absensi</label>
                                                                            <input type="text" class="form-control @error('title')is-invalid @enderror" placeholder="Nama Absensi" name="title" value="{{ $absen->title }}">
                                                                            @error('title')
                                                                                <small class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </small>
                                                                            @enderror
                                                                        </div>
        
                                                                        <div class="mb-2">
                                                                            <label for="title" class="mb-2">Deskripsi</label>
                                                                            <input type="text" class="form-control @error('description')is-invalid @enderror" placeholder="Nama Absensi" name="description" value="{{ $absen->description }}">
                                                                            @error('description')
                                                                                <small class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-2">
                                                                            <label for="start_time" class="mb-2">Waktu Absen Masuk</label>
                                                                            <input type="time" class="form-control @error('start_time') is-invalid @enderror" placeholder="Judul Absensi" name="start_time" value="{{ old('start_time', \Carbon\Carbon::parse($absen->start_time)->format('H:i')) }}">
                                                                            @error('start_time')
                                                                                <small class="invalid-feedback">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="mb-2">
                                                                            <label for="batas_start_time" class="mb-2">Batas Waktu Absen Masuk</label>
                                                                            <input type="time" class="form-control @error('batas_start_time') is-invalid @enderror" placeholder="Judul Absensi" name="batas_start_time" value="{{ old('batas_start_time', \Carbon\Carbon::parse($absen->batas_start_time)->format('H:i')) }}">
                                                                            @error('batas_start_time')
                                                                                <small class="invalid-feedback">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-2">
                                                                            <label for="end_time" class="mb-2">Waktu Absen Keluar</label>
                                                                            <input type="time" class="form-control @error('end_time') is-invalid @enderror" placeholder="Judul Absensi" name="end_time" value="{{ old('end_time', \Carbon\Carbon::parse($absen->end_time)->format('H:i')) }}">
                                                                            @error('end_time')
                                                                                <small class="invalid-feedback">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-2">
                                                                            <label for="batas_end_time" class="mb-2">Batas Waktu Absen Keluar</label>
                                                                            <input type="time" class="form-control @error('batas_end_time') is-invalid @enderror" placeholder="Judul Absensi" name="batas_end_time" value="{{ old('batas_end_time', \Carbon\Carbon::parse($absen->batas_end_time)->format('H:i')) }}">
                                                                            @error('batas_end_time')
                                                                                <small class="invalid-feedback">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @foreach ($jabatan as $posisi)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" 
                                                                            type="checkbox" 
                                                                            name="positions[]" 
                                                                            value="{{ $posisi->id }}" 
                                                                            {{ $absen->positions->contains($posisi->id) ? 'checked' : '' }}>
                                                                        <label class="form-check-label">{{ $posisi->name }}</label>
                                                                    </div>
                                                                @endforeach


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


                                    <form class="delete-form" method="post" data-route="{{ route('absensi.destroy', $absen->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('absensi.destroy', $absen->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    {{ $absensi->links() }}
                </nav>
            </div>
        </div>
    </div>
</x-admin-layouts>