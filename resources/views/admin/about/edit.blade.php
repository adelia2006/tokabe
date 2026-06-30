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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h5 class="font-size-14 mb-3">Teks (Indonesia)</h5>
                        <div class="mb-3">
                            <label for="title_id" class="form-label">Judul (ID)</label>
                            <input type="text" class="form-control" id="title_id" name="title_id" value="{{ old('title_id', $about->title['id'] ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description_id" class="form-label">Deskripsi (ID)</label>
                            <textarea class="form-control" id="description_id" name="description_id" rows="4" required>{{ old('description_id', $about->description['id'] ?? '') }}</textarea>
                        </div>

                        <hr class="my-4">

                        <h5 class="font-size-14 mb-3">Teks (English)</h5>
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Judul (EN)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $about->title['en'] ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description_en" class="form-label">Deskripsi (EN)</label>
                            <textarea class="form-control" id="description_en" name="description_en" rows="4" required>{{ old('description_en', $about->description['en'] ?? '') }}</textarea>
                        </div>

                        <hr class="my-4">

                        <h5 class="font-size-14 mb-3">Bagian DOOH (Videotron)</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dooh_target" class="form-label">Angka Target DOOH</label>
                                <input type="number" class="form-control" id="dooh_target" name="dooh_target" value="{{ old('dooh_target', $about->dooh_target ?? 18) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image_dooh" class="form-label">Gambar DOOH</label>
                                <input type="file" class="form-control" id="image_dooh" name="image_dooh" accept="image/*">
                                @if($about && $about->image_dooh)
                                    <div class="mt-2">
                                        <img src="{{ filter_var($about->image_dooh, FILTER_VALIDATE_URL) ? $about->image_dooh : asset('storage/image_about/' . $about->image_dooh) }}" alt="DOOH Image" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                @endif
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dooh_description_id" class="form-label">Deskripsi DOOH (ID)</label>
                                <textarea class="form-control" id="dooh_description_id" name="dooh_description_id" rows="3" required>{{ old('dooh_description_id', $about->dooh_description['id'] ?? 'Titik lokasi strategis tersebar di berbagai pusat keramaian.') }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dooh_description_en" class="form-label">Deskripsi DOOH (EN)</label>
                                <textarea class="form-control" id="dooh_description_en" name="dooh_description_en" rows="3" required>{{ old('dooh_description_en', $about->dooh_description['en'] ?? 'Strategic locations spread across various crowd centers.') }}</textarea>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h5 class="font-size-14 mb-3">Bagian OOH (Billboard)</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ooh_target" class="form-label">Angka Target OOH</label>
                                <input type="number" class="form-control" id="ooh_target" name="ooh_target" value="{{ old('ooh_target', $about->ooh_target ?? 271) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image_ooh" class="form-label">Gambar OOH</label>
                                <input type="file" class="form-control" id="image_ooh" name="image_ooh" accept="image/*">
                                @if($about && $about->image_ooh)
                                    <div class="mt-2">
                                        <img src="{{ filter_var($about->image_ooh, FILTER_VALIDATE_URL) ? $about->image_ooh : asset('storage/image_about/' . $about->image_ooh) }}" alt="OOH Image" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                @endif
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ooh_description_id" class="form-label">Deskripsi OOH (ID)</label>
                                <textarea class="form-control" id="ooh_description_id" name="ooh_description_id" rows="3" required>{{ old('ooh_description_id', $about->ooh_description['id'] ?? 'Menjangkau audiens lebih luas dengan visibilitas maksimal.') }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ooh_description_en" class="form-label">Deskripsi OOH (EN)</label>
                                <textarea class="form-control" id="ooh_description_en" name="ooh_description_en" rows="3" required>{{ old('ooh_description_en', $about->ooh_description['en'] ?? 'Reach a wider audience with maximum visibility.') }}</textarea>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan Perubahan</button>
                        </div>
                    </form>
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
