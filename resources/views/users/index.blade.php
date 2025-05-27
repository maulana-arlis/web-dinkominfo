<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <div class="col-md-6 col-12">
                        <h1>Daftar Pengguna</h1>
                    </div>
                    <div class="col-md-6 col-12 text-md-right  mt-2 mt-md-0">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List User</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->position }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><span class="badge bg-info">{{ $user->role }}</span></td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Yakin ingin menghapus?');">
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
