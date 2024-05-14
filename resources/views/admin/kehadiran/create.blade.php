<x-admin-layouts>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Daftar List Absensi</h1>
                </div>
                @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
            
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('kehadiran.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <select class="form-select mb-4 @error('absensi_id') is-invalid @enderror" name="absensi_id">
                            <option value="" selected disabled>Pilih Jadwal</option>
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
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>

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
</x-admin-layouts>