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
                        <h3>Add Award</h3>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="form-body mt-4">
                    <div class="border border-3 p-4 rounded">
                        <form method="post" action="{{ route('award.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="inputProductTitle" class="form-label">Award Type</label>
                                    <select class="single-select form-control" name="award_type">
                                        <option value="">Select Award Type</option>
                                        <option value="certificate"> Certificate</option>
                                        <option value="guest_awards"> Guest Awards</option>
                                        <option value="guest_lecture"> Guest Lecture</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="formFile">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="editor" class="form-label">Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary px-5 radius-30">Save</button>
                            </div>
                        </form>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
