<x-layout>
    <x-navbar />
    <x-sidebar />

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1>Kontak Kami</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Kontak</h3>
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        @if($contact)
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Alamat:</strong> {{ $contact->address }}</p>
                                    <p><strong>Telepon:</strong> {{ $contact->phone_number }}</p>
                                    <p><strong>FAQ:</strong> {{ $contact->faq_number }}</p>
                                    <p><strong>Email:</strong> {{ $contact->email1 }}{{ $contact->email2 ? ', ' . $contact->email2 : '' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Operasional:</strong> {{ $contact->operasional_days }} ({{ $contact->operasional_times }})</p>
                                    <p><strong>Sosial Media:</strong></p>
                                    <p>
                                        <a href="{{ $contact->twitter_url }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="fab fa-twitter"></i> Twitter
                                        </a>
                                        <a href="{{ $contact->facebook_url }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="fab fa-facebook"></i> Facebook
                                        </a>
                                        <a href="{{ $contact->instagram_url }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="fab fa-instagram"></i> Instagram
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </div>
                        @else
                            <p class="text-center">Tidak ada data kontak tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
