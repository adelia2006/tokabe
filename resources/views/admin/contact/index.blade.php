@extends('admin.template')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Manajemen Kontak (WhatsApp & Telepon)</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Kontak Website</h5>
                        <p>Ubah nomor WhatsApp atau Telepon untuk setiap penempatan tombol di website.</p>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="contact-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Penempatan</th>
                                        <th>Nomor Telepon</th>
                                        <th>Pesan Default</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ Str::limit($item->message, 50, '...') }}</td>
                                            <td>
                                                <a href="{{ route('edit.contact', $item->id) }}" class="btn btn-primary btn-sm" title="Edit">
                                                    <i class="feather icon-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
