
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
                            Tambahkan Jabatan
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Jabatan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('positions.store') }}">
                                        @csrf
                                        <div class="card-body">
                                            <input type="text" class="form-control @error('name')is-invalid @enderror" placeholder="Nama Jabatan" name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                            @enderror
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
                        <td>Nama Jabatan</td>
                        <td>Aksi</td>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $jab)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $jab->id }}"></td>
                                <td>{{ ($jabatan->currentPage() - 1) * $jabatan->perPage() + $loop->iteration }}</td>
                                <td>{{ $jab->name }}</td>
                                <td class="d-flex justify-content-between">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{ $jab->id }}">
                                                Edit
                                            </button>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalEdit{{ $jab->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Jabatan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('positions.update', $jab->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <input type="text" class="form-control @error('name')is-invalid @enderror" placeholder="Nama Jabatan" name="name" value="{{ $jab->name }}">
                                                                @error('name')
                                                                    <small class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </small>
                                                                @enderror
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


                                    <form class="delete-form" method="post" data-route="{{ route('positions.destroy', $jab->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('positions.destroy', $jab->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    {{ $jabatan->links() }}
                </nav>
            </div>
        </div>
    </div>
</x-admin-layouts>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })
</script>