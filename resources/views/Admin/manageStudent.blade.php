@extends('Admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-9 " style="font-size: 25px">Manage <u class="text-primary">{{ $title }}</u> Student's</div>
        <div class="col-3">
            <div class="btn-group">
                <a href="{{ route('admin.manageStudent.active') }}" class="btn btn-danger">Active</a>
                <a href="{{  route('admin.manageStudent.newAd') }}" class="btn btn-info">New</a>
                <a href="{{  route('admin.manageStudent.passOut') }}" class="btn btn-success">Passout</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hovered table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>FatherName</th>
                        <th>Email</th>
                        <th>Joining DAte</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $s)
                    <tr>
                        <th>{{ $s->id }}</th>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->contact}}</td>
                        <td>{{ $s->fatherName}}</td>
                        <td>{{ $s->email}}</td>
                        <td>{{ date('d-M D',strtotime($s->created_at))}}</td>
                        <td>{{ $s->address}}4</td>
                        <td class="d-flex">
                            @if ($s->status == 0)
                            <a href="{{ route('admin.delete',$s->id) }}" class="btn btn-danger me-2  btn-sm"><i
                                    class="bi bi-trash-fill"></i></a>
                            @elseif ($s->status == 1)
                            <a href="{{ route('admin.passout',$s->id) }}"
                                class="btn btn-danger me-2  btn-sm">Passout</a>
                            @endif
                            <a href="" class="btn btn-warning me-2 btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <a href="" class="btn btn-secondary me-2 btn-sm"><i class="bi bi-eye-fill"></i></a>
                            @if ($s->status == 0)
                            <a href="{{ route('admin.approve',['id' => $s->id]) }}" class="btn btn-success btn-sm"><i
                                    class="bi bi-check2-circle"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection