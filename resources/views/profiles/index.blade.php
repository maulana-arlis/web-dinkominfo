<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <div class="col-md-6 col-12">
                        <h1>Daftar Profil</h1>
                    </div>
                    <div class="col-md-6 col-12 text-md-right  mt-2 mt-md-0">
                        <a href="{{ route('profiles.create') }}" class="btn btn-primary">Tambah Profil</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Profil</h3>
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Urutan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profiles as $key => $profile)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $profile->image_path) }}" alt="{{ $profile->name }}" width="50" class="img-thumbnail">
                                            </td>
                                            <td>{{ $profile->name }}</td>
                                            <td>{{ $profile->position }}</td>
                                            <td>{{ $profile->order }}</td>
                                            <td>
                                                <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
