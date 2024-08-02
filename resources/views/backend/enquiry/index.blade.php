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
                        <li class="breadcrumb-item active" aria-current="page">All Enquiry</li>
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
                        <h3>Enquiry</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Purpose</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiry as $key=>$item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->purpose }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <form action="{{route('enquiry.destroy', $item->id)}}" method="POST">
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
