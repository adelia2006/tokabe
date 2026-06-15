@extends('admin.template')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Kontak</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('contact-admin') }}">Kontak</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Kontak: {{ $contact->name }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.contact', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Penempatan</label>
                                <input type="text" class="form-control" id="name" value="{{ $contact->name }}" disabled>
                                <small class="form-text text-muted">Nama penempatan tidak bisa diubah karena terhubung dengan sistem.</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon / WhatsApp</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
                                <small class="form-text text-muted">Gunakan kode negara (contoh: 628115239999).</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan Default</label>
                                <textarea class="form-control" id="message" name="message" rows="3">{{ old('message', $contact->message) }}</textarea>
                                <small class="form-text text-muted">Pesan ini akan otomatis terisi saat pengunjung mengklik tombol WhatsApp. Boleh dikosongkan jika tombol hanya untuk telepon biasa.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('contact-admin') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
