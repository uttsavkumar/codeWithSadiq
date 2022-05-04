@extends('Admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('course.create') }}" class="btn btn-primary btn-md float-end">Insert Course</a>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Discounted Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($course as $i)
                <tr>
                    <th>{{ $i->id }}</th>
                    <td>{{ $i->title }}</td>
                    <td>{{ "Rs. " . $i->discounted_price }}</td>
                    <td>
                        <img src="{{ asset('images').'/'.$i->image }}" alt="" height="100px">
                    </td>
                    <td>
                        @if ($i->status == 1)
                        <a href="{{ route('course.setDisable',['id' => $i->id]) }}"
                            class="badge rounded-pill text-white mt-4 p-2 bg-success">Active</a>

                        @else
                        <a href="{{ route('course.setActive',['id' => $i->id]) }}"
                            class="badge rounded-pill text-white mt-4 p-2 bg-secondary">Disable</a>

                        @endif
                    </td>
                    <td class="d-flex ">
                        <a href="{{ route('course.edit',['course' => $i->id]) }}" 
                             class="btn btn-warning me-2 mt-4 btn-sm"><i
                                class="bi bi-pencil-fill"></i></a>
                        <a href="{{ route('course.delete',$i->id) }}" class="btn btn-danger me-2 mt-4 btn-sm"><i
                                class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

 

@endsection