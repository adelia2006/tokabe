@extends('admin.template')
@section('content')

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: {!! json_encode(session('success')) !!},
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
@if (session('update'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Updated',
                text: {!! json_encode(session('update')) !!},
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
@if (session('delete'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Deleted',
                text: {!! json_encode(session('delete')) !!},
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        @php
                                            $pageTitle = 'Detail Service List';
                                            if (isset($currentService)) {
                                                $sTitle = is_array($currentService->judul) ? ($currentService->judul['id'] ?? $currentService->judul['en'] ?? '') : ($currentService->judul ?? '');
                                                $pageTitle = $sTitle ? "Detail Service List: {$sTitle}" : $pageTitle;
                                            }
                                        @endphp
                                        <div class="page-header-title">
                                            <h3 class="m-b-10">{{ $pageTitle }}</h3>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin">
                                                    <i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('service-details.index') }}">Detail Service List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4>{{ $pageTitle }}</h4>
                                        <div>
                                            @if(isset($currentService))
                                            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><i class="feather icon-list"></i> Manage Kategori</button>
                                            @endif
                                            <a href="{{ route('service-details.create') }}{{ isset($currentService) ? '?service_id='.$currentService->id : '' }}" class="btn btn-primary">Add New Detail</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Kategori</th>
                                                        <th>Tipe</th>
                                                        <th>Gambar</th>
                                                        <th>Judul Deskripsi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($details as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ is_array($item->serviceCategory->nama) ? ($item->serviceCategory->nama['id'] ?? '') : '' }}</td>
                                                            <td>
                                                                @if($item->tipe_card == 'main')
                                                                    <span class="badge bg-primary">Card Utama</span>
                                                                @else
                                                                    <span class="badge bg-secondary">Card Kecil</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($item->gambar)
                                                                    <img src="{{ asset('storage/service_details/' . $item->gambar) }}" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                                                                @else
                                                                    <span>No Image</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <strong>{{ is_array($item->judul) ? ($item->judul['id'] ?? '') : '' }}</strong><br>
                                                                <small class="text-muted">{!! \Illuminate\Support\Str::limit(strip_tags(is_array($item->deskripsi) ? ($item->deskripsi['id'] ?? '') : $item->deskripsi), 60) !!}</small>
                                                            </td>
                                                            <td>
                                                                <a class="btn drp-icon btn-outline-primary"
                                                                    href="{{ route('service-details.edit', $item->id) }}"
                                                                    type="button"><i class="feather icon-edit"></i></a>
                                                                <button class="btn drp-icon btn-outline-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#confirmDeleteModal-{{ $item->id }}">
                                                                    <i class="feather icon-trash"></i>
                                                                </button>
                                                                <div class="modal fade"
                                                                    id="confirmDeleteModal-{{ $item->id }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Confirm Delete</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Are you sure you want to delete this Detail Service?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                                <form action="{{ route('service-details.destroy', $item->id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                        @if(isset($currentService))
                        <!-- Add/Manage Category Modal -->
                        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addCategoryModalLabel">Manage Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Tambah Kategori Baru</h6>
                                        <form action="{{ route('service-categories.store') }}" method="POST" class="mb-4">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $currentService->id }}">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" name="nama_id" class="form-control" required placeholder="Nama Kategori (ID)">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" name="nama_en" class="form-control" required placeholder="Nama Kategori (EN)">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary w-100">Add</button>
                                                </div>
                                            </div>
                                        </form>

                                        <h6>Daftar Kategori</h6>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama (ID)</th>
                                                        <th>Nama (EN)</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($categories as $cat)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ is_array($cat->nama) ? ($cat->nama['id'] ?? '') : '' }}</td>
                                                            <td>{{ is_array($cat->nama) ? ($cat->nama['en'] ?? '') : '' }}</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal-{{ $cat->id }}" data-bs-dismiss="modal" title="Edit Kategori"><i class="feather icon-edit"></i></button>
                                                                <form action="{{ route('service-categories.destroy', $cat->id) }}" method="POST" style="display:inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus kategori ini? Detail di dalamnya juga akan terhapus.')" title="Hapus Kategori"><i class="feather icon-trash"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">Belum ada kategori.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @foreach($categories as $cat)
                        <!-- Edit Category Modal -->
                        <div class="modal fade" id="editCategoryModal-{{ $cat->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel-{{ $cat->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCategoryModalLabel-{{ $cat->id }}">Edit Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('service-categories.update', $cat->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label>Nama Kategori (ID)</label>
                                                <input type="text" name="nama_id" class="form-control" required value="{{ is_array($cat->nama) ? ($cat->nama['id'] ?? '') : '' }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Nama Kategori (EN)</label>
                                                <input type="text" name="nama_en" class="form-control" required value="{{ is_array($cat->nama) ? ($cat->nama['en'] ?? '') : '' }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCategoryModal" data-bs-dismiss="modal">Back to List</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
