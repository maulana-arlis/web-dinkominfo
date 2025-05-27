<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Profil</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('profile') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', Auth::user()->name) }}">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="position">Jabatan</label>
                                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', Auth::user()->position) }}">
                                @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', Auth::user()->email) }}">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password (Opsional)</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
