@extends('admin.template')

@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h3 class="m-b-10">About Us</h3>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">About Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5>Daftar Konten About Us</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Judul (ID)</th>
                                                        <th>Target DOOH</th>
                                                        <th>Target OOH</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($abouts as $about)
                                                        <tr>
                                                            <td>{{ $about->id }}</td>
                                                            <td>{{ $about->title['id'] ?? 'Tidak ada judul' }}</td>
                                                            <td>{{ $about->dooh_target }}</td>
                                                            <td>{{ $about->ooh_target }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary btn-sm"><i class="feather icon-edit"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @if($abouts->isEmpty())
                                                        <tr>
                                                            <td colspan="5" class="text-center">Data kosong. Silakan tambahkan data melalui seeder jika perlu.</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
