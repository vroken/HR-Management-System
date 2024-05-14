<x-admin-layouts>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Tambahkan Absensi</h1>
                </div>
                
                <div class="row m-2">
                    <div class="modal-body">
                        <form method="POST" action="{{ route('absensi.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <label for="name" class="mb-2">Judul Absensi</label>
                                        <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" placeholder="Judul Absensi" name="name" value="{{ old('name') }}">
                                        @error('name')
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
                                
                                    <div class="col-md-12">
                                        {{-- <select class="form-select mb-4 @error('code')is-invalid @enderror"  placeholder="Nama Jabatan" name="code" value="{{ old('code') }}">
                                            <option selected>Pilih Nama Jabatan</option>
                                            
                                        </select>
                                        @error('code')
                                            <small class="invalid-feedback">
                                                {{ $message }}
                                            </small>
                                        @enderror --}}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-end mb-3"> <!-- Add justify-content-end class -->
                                <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>                            
                        </form>
                    </div>           
                </div>     
            </div>
        </div>
    </div>
</x-admin-layouts>