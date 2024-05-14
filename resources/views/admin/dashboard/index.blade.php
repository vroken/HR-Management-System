<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<x-admin-layouts>
    <style>
        /* Add your CSS styles here */
        #map {
            height: 300px;
            width: 100%;
        }

        #map2 {
            height: 300px;
            width: 100%;
        }
    </style>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Daftar List Absensi</h1>
                </div>
                <div class="card-body mb-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <i class="align-middle me-2" data-feather="alert-triangle"></i> <span class="align-middle">{{ $error }}</span>
                            @endforeach
                        </div>
                    @endif

                    <h3 class="mb-3">Selamat datang, {{ Auth::user()->name }}!</h3>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ Storage::url(Auth::user()->gambar) }}" class="img-fluid rounded-start" alt="gambar">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>{{ Auth::user()->name }}</h2>
                                    <h5 class="card-title">{{ Auth::user()->positions->name }}</h5>
                                    <p class="card-text">{{ Auth::user()->alamat }}</p>
                                    <p class="card-text"><small class="text-muted">Akun dibuat : {{ Auth::user()->created_at->diffForHumans() }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mx-0 align-items-center">
                                    <div class="col-auto">
                                        <h3>Absensi Masuk</h3>
                                        <h5 class="card-title">Silahkan pilih jadwal absensi <span>MASUK</span> dengan benar!</h5>
                                        <p class="card-text">Pastikan anda sudah berada di lokasi kerja pada waktu yang ditentukan, dan tunggu konfirmasi dari sistem yang menandakan bahwa absensi masuk Anda telah tercatat</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalKeluar">
                                            Absensi Masuk
                                        </button>
                                    </div>
                
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalKeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Absen Masuk</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            @foreach ($errors->all() as $error)
                                                                <i class="align-middle me-2" data-feather="alert-triangle"></i> <span class="align-middle">{{ $error }}</span>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    <h3>Lokasi anda saat ini :</h3>
                                                    <div id="map2"></div> <!-- Use unique ID for the first map -->

                                                    <script>
                                                        function initMap1() {
                                                            var map1 = new google.maps.Map(document.getElementById('map2'), {
                                                                center: {lat: -34.397, lng: 150.644},
                                                                zoom: 8
                                                            });

                                                            if (navigator.geolocation) {
                                                                navigator.geolocation.getCurrentPosition(function(position) {
                                                                    var pos = {
                                                                        lat: position.coords.latitude,
                                                                        lng: position.coords.longitude
                                                                    };
                                                                    map1.setCenter(pos);
                                                                    var marker = new google.maps.Marker({
                                                                        position: pos,
                                                                        map: map1,
                                                                        title: 'Your Location'
                                                                    });
                                                                }, function() {
                                                                    handleLocationError(true, map1.getCenter());
                                                                });
                                                            } else {
                                                                handleLocationError(false, map1.getCenter());
                                                            }
                                                        }

                                                        function handleLocationError(browserHasGeolocation, pos) {
                                                            var infoWindow = new google.maps.InfoWindow();
                                                            infoWindow.setPosition(pos);
                                                            infoWindow.setContent(browserHasGeolocation ? 'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t support geolocation.');
                                                            infoWindow.open(map1);
                                                        }
                                                    </script>

                                                    <!-- Include the first map script with a unique callback name -->
                                                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap1" async defer></script>

                                                    <form method="POST" action="{{ route('kehadiran.store') }}" class="mt-3">
                                                        @csrf
                                                        
                                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                        <label for="absensi_id">Jadwal Absensi</label>
                                                        <select class="form-select mb-2 @error('absensi_id') is-invalid @enderror" name="absensi_id">
                                                            <option value="" selected disabled>Pilih Jadwal</option>
                                                            @foreach ($absensi as $absen)
                                                                <option value="{{ $absen->id }}">{{ $absen->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('absensi_id')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                        
                                                        <input type="hidden" name="presence_date" value="{{ now()->toDateString() }}">

                                                        <label for="entry_time">Current Time:</label>
                                                        <input type="time" class="form-control mb-2 @error('entry_time') is-invalid @enderror" id="entry_time" name="entry_time" value="{{ old('entry_time') }}" readonly>



                                                        <script>
                                                            // Get the current time
                                                            var now = new Date();
                                                            var hours = now.getHours().toString().padStart(2, '0');
                                                            var minutes = now.getMinutes().toString().padStart(2, '0');
                                                            var entry_time = hours + ':' + minutes;
                                                        
                                                            // Set the input value to the current time
                                                            document.getElementById('entry_time').value = entry_time;
                                                        </script>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Absen Masuk</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mx-0 align-items-center">
                                    <div class="col-auto">
                                        <h3>Absensi Keluar</h3>
                                        <h5 class="card-title">Silahkan pilih jadwal absensi <span>KELUAE</span> dengan benar!</h5>
                                        <p class="card-text">Pastikan anda sudah berada di lokasi kerja pada waktu yang ditentukan, dan tunggu konfirmasi dari sistem yang menandakan bahwa absensi masuk Anda telah tercatat</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Absensi Masuk
                                        </button>
                                    </div>
                
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Absen Keluar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            @foreach ($errors->all() as $error)
                                                                <i class="align-middle me-2" data-feather="alert-triangle"></i> <span class="align-middle">{{ $error }}</span>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    <h3>Lokasi anda saat ini :</h3>
                                                    <div id="map2"></div>
    
                                                    <script>
                                                        function initMap() {
                                                        // Create a map object and specify the DOM element for display
                                                        var map = new google.maps.Map(document.getElementById('map2'), {
                                                            center: {lat: -34.397, lng: 150.644}, // Default center coordinates (Sydney, Australia)
                                                            zoom: 8 // Default zoom level
                                                        });
                                    
                                                        // Try HTML5 geolocation to get the user's current location
                                                        if (navigator.geolocation) {
                                                            navigator.geolocation.getCurrentPosition(function(position) {
                                                                var pos = {
                                                                    lat: position.coords.latitude,
                                                                    lng: position.coords.longitude
                                                                };
                                    
                                                                // Center the map to the user's current location
                                                                map.setCenter(pos);
                                    
                                                                // Add a marker at the user's current location
                                                                var marker = new google.maps.Marker({
                                                                    position: pos,
                                                                    map: map,
                                                                    title: 'Your Location'
                                                                });
                                                            }, function() {
                                                                handleLocationError(true, map.getCenter());
                                                            });
                                                        } else {
                                                            // Browser doesn't support Geolocation
                                                            handleLocationError(false, map.getCenter());
                                                        }
                                                    }
                                    
                                                    // Handle errors in geolocation
                                                    function handleLocationError(browserHasGeolocation, pos) {
                                                        var infoWindow = new google.maps.InfoWindow();
                                                        infoWindow.setPosition(pos);
                                                        infoWindow.setContent(browserHasGeolocation ?
                                                                            'Error: The Geolocation service failed.' :
                                                                            'Error: Your browser doesn\'t support geolocation.');
                                                        infoWindow.open(map);
                                                    }
                                    
                                                    </script>
                                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx1W1VaSgpuraKJkTbCSL_jkW5-OijE6w&callback=initMap" async defer></script>
                                                    <form method="POST" action="{{ route('kehadiran.store') }}" class="mt-3">
                                                        @csrf
                                                        
                                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                        <label for="absensi_id">Jadwal Absensi</label>
                                                        <select class="form-select mb-2 @error('absensi_id') is-invalid @enderror" name="absensi_id">
                                                            <option value="" selected disabled>Pilih Jadwal</option>
                                                            @foreach ($absensi as $absen)
                                                                <option value="{{ $absen->id }}">{{ $absen->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('absensi_id')
                                                            <small class="invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                        
                                                        <input type="hidden" name="presence_date" value="{{ now()->toDateString() }}">

                                                        <label for="exit_time">Current Time:</label>
                                                        <input type="time" class="form-control mb-2 @error('exit_time') is-invalid @enderror" id="exit_time" name="exit_time" value="{{ old('exit_time') }}" readonly>



                                                        <script>
                                                            // Get the current time
                                                            var now = new Date();
                                                            var hours = now.getHours().toString().padStart(2, '0');
                                                            var minutes = now.getMinutes().toString().padStart(2, '0');
                                                            var exit_time = hours + ':' + minutes;
                                                        
                                                            // Set the input value to the current time
                                                            document.getElementById('exit_time').value = exit_time;
                                                        </script>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Absen Keluar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</x-admin-layouts>