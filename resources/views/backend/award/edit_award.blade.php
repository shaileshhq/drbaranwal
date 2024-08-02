@extends('backend.include.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dr. A.K Baranwal</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('award.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Award</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-10">
                        <h3>Edit Award</h3>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="form-body mt-4">
                    <div class="border border-3 p-4 rounded">
                        <form method="POST" action="{{ route('award.update', $award->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="formFile">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label for="formFile">
                                        <img src="{{ asset('public/storage/award/' . $award->image) }}" width="100%"
                                            height="100">
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary px-5 radius-30">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
