@extends('backend.include.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dr. A.K Baranwal</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Mission</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        @if (Session::has('success'))
            <div class="alert border-0 bg-white border-start border-5 border-success alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-success">Success</h6>
                        <div>{{ Session::get('success') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('update'))
            <div class="alert border-0 bg-white border-start border-5 border-info alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-info"><i class="bx bx-info-square"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-info">Update</h6>
                        <div>{{ Session::get('update') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert border-0 bg-white border-start border-5 border-danger alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-danger">Danger</h6>
                        <div>{{ Session::get('error') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-10">
                        <h3>Our Mission</h3>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <a href="{{ route('mission.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                                class="bx bxs-plus-square"></i>Add Mission</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mission as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img src="{{asset('public/storage/mission/' .$item->image)}}" style="width:50px;"></td>
                                    <td><img src="{{asset('public/storage/mission/' .$item->icon)}}" style="width:50px;"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('mission.edit', $item->id) }}" class="">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                            <form action="{{ route('mission.destroy', $item->id) }}" method="POST">
                                                @method('Delete')
                                                @csrf
                                                <button type="submit" class="ms-1">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </form>
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
@endsection
