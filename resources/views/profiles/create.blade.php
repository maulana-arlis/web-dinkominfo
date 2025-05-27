<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Profil</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="position">Posisi</label>
                                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="position" value="{{ old('position') }}" required>
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_path">Gambar</label>
                                <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror" id="image_path" accept="image/*" required>
                                @error('image_path')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="order">Urutan</label>
                                <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" id="order" value="{{ old('order') }}" required>
                                @error('order')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                            <a href="{{ route('profiles.index') }}" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
