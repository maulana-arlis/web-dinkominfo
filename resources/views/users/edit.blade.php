<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Pengguna</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="position" class="form-control" value="{{ $user->position }}" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <div class="form-group">
                                <label>Password (Opsional)</label>
                                <input type="password" name="password" class="form-control">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" class="form-control">
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="super_admin" {{ $user->role == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
