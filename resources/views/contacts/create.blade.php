<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Kontak</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            @foreach(['address', 'phone_number', 'faq_number', 'email1', 'email2', 'operasional_days', 'operasional_times', 'twitter_url', 'facebook_url', 'instagram_url', 'maps_url'] as $field)
                                <div class="form-group">
                                    <label for="{{ $field }}">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                                    <input type="text" name="{{ $field }}" class="form-control @error($field) is-invalid @enderror" value="{{ old($field) }}">
                                    @error($field) <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
