<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Detail Berita</h1>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $news->image_path) }}" class="img-fluid mb-3" alt="Gambar Berita">
                        <h2>{{ $news->title }}</h2>
                        <p><strong>Penulis:</strong> {{ $news->user->name }}</p>
                        <p class="fs-5">{!! ($news->content) !!}</p>

                        <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
