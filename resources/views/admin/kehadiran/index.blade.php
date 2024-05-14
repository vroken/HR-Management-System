<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-admin-layouts>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Daftar List Absensi</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="row justify-content-between mx-0 align-items-center">
                    {{-- <div class="col-auto">
                        <a href="{{ route('kehadiran.create') }}" class="btn btn-primary">
                            Tambahkan Absensi
                        </a>
                    </div> --}}

                    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('kehadiran.store') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        {{-- <input type="hidden" name="absensi_id" value="{{ auth()->user()->absensi_id }}"> --}}
                                        <select class="form-select mb-4 @error('absensi_id') is-invalid @enderror" name="absensi_id">
                                            <option value="" selected disabled>Pilih Jadwal</option> <!-- Disable the default selected option -->
                                            @foreach ($absensi as $absen)
                                                <option value="{{ $absen->id }}">{{ $absen->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('absensi_id')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                        
                                        <input type="hidden" name="presence_date" value="{{ now()->toDateString() }}">
                                        
                                        <div class="mb-3">
                                            <label for="entry_button" class="form-label @error('entry_time') is-invalid @enderror">Press Enter Button</label>
                                            @error('entry_time')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                            <button type="button" class="btn btn-primary" id="entry_button">Enter</button>
                                            <input type="hidden" id="entry_time" class="@error('entry_time') is-invalid @enderror" name="entry_time" value="{{ old('entry_time') }}">
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="exit_button" class="form-label">Press Exit Button</label>
                                            @error('absensi_id')
                                                <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                            <button type="button" class="btn btn-primary" id="exit_button" disabled>Exit</button>
                                            <input type="hidden" id="exit_time" name="exit_time" class="@error('exit_time') is-invalid @enderror" value="{{ old('exit_time') }}">
                                        </div>
                                        
                                    
                                        <!-- Other form fields -->
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
                        <td>Nama Karyawan</td>
                        <td>Tanggal Absensi</td>
                        <td>Waktu Absensi</td>
                    </thead>
                    <tbody>
                        @foreach ($kehadiran as $hadir)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $hadir->id }}"></td>
                                <td>{{ ($kehadiran->currentPage() - 1) * $kehadiran->perPage() + $loop->iteration }}</td>
                                <td>{{ $hadir->absensi->title }}</td>
                                <td>{{ $hadir->user->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($hadir->presence_date)->format('d F Y') }}</td>
                                <td>
                                    @if ($hadir->entry_time)
                                        <p>Waktu Masuk</p>
                                        <p>{{ $hadir->entry_time }}</p>
                                    @elseif ($hadir->exit_time)
                                        Waktu Keluar <br>
                                        {{ $hadir->exit_time }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    {{ $kehadiran->links() }}
                </nav>
            </div>
        </div>
    </div>
</x-admin-layouts>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var entryButton = document.getElementById('entry_button');
        var exitButton = document.getElementById('exit_button');

        entryButton.addEventListener('click', function() {
            var entryTimeInput = document.getElementById('entry_time');
            entryTimeInput.value = getCurrentTime();
            exitButton.disabled = false;
        });

        exitButton.addEventListener('click', function() {
            var exitTimeInput = document.getElementById('exit_time');
            exitTimeInput.value = getCurrentTime();
            this.disabled = true; // Disable exit button after clicking
        });

        function getCurrentTime() {
            var now = new Date();
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            return hours + ':' + minutes;
        }
    });
</script>