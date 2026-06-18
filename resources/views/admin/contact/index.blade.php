@extends('admin.template')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Manajemen Kontak Global</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Pengaturan Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pengaturan Kontak Website</h5>
                        <p>Pengaturan ini akan mengubah nomor WhatsApp, Email, dan Lokasi secara serentak di seluruh tombol pada website.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.contact', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="phone">Nomor WhatsApp / Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
                                <small class="form-text text-muted">Gunakan kode negara (contoh: 628115239999).</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email Tokabe</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
                                <small class="form-text text-muted">Email untuk kebutuhan kontak. Boleh dikosongkan jika tidak ada.</small>
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi / Alamat Lengkap Tokabe</label>
                                <textarea class="form-control" id="location" name="location" rows="3">{{ old('location', $contact->location) }}</textarea>
                                <small class="form-text text-muted">Alamat lokasi yang akan ditampilkan (misal di Footer). Boleh dikosongkan.</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan Default WhatsApp</label>
                                <textarea class="form-control" id="message" name="message" rows="3">{{ old('message', $contact->message) }}</textarea>
                                <small class="form-text text-muted">Pesan ini akan otomatis terisi saat pengunjung mengklik tombol WhatsApp. Boleh dikosongkan.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Peraturan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
