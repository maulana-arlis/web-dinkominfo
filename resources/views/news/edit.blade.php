<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Edit Berita</h1>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="title" class="form-control" value="{{ $news->title }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea name="content" id="content-editor" class="form-control" rows="5" required>{{ old('content', $news->content) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Gambar Lama</label><br>
                                <img src="{{ asset('storage/' . $news->image_path) }}" width="150" alt="Gambar">
                            </div>
                            <div class="form-group">
                                <label>Ganti Gambar</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan
                                Perubahan</button>
                            <a href="{{ route('news.index') }}" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content-editor', {
                height: 300,
                toolbar: [{
                        name: 'document',
                        items: ['Source', '-', 'NewPage', 'Preview', 'Print']
                    },
                    {
                        name: 'clipboard',
                        items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo']
                    },
                    {
                        name: 'editing',
                        items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
                    },
                    {
                        name: 'insert',
                        items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar']
                    },
                    {
                        name: 'styles',
                        items: ['Styles', 'Format', 'Font', 'FontSize']
                    },
                    {
                        name: 'colors',
                        items: ['TextColor', 'BGColor']
                    },
                    {
                        name: 'basicstyles',
                        items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                    },
                    {
                        name: 'paragraph',
                        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                    }
                ],
                filebrowserUploadUrl: "{{ route('news.uploadImage') }}",
                filebrowserUploadMethod: 'form'
            });
        </script>
    @endpush

</x-layout>
