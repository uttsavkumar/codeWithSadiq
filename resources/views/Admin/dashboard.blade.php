@extends('Admin.master')

@section('content')
<div class="row">
    <div class="col-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h2 class="display-4">50+</h2>
                <h6>TOtal Student</h6>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h2 class="display-4">50+</h2>
                <h6>TOtal Due</h6>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h2 class="display-4">50+</h2>
                <h6>TOtal Courses</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>DueDate</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($due_payment as $due)
            <tr>
                <th>{{ $due->id }}</th>
                <td>{{ $due->student->name }}</td>
                <td>{{ $due->amount }}</td>
                <td>{{ $due->due_date }}</td>
                <td><div class="badge bg-danger text-white rounded-pill">{{ $due->status }}</div></td>
                <td>
                    @if ($due->status === 'due')
                    <a href="{{ route('admin.makeCashPayment',['std_id' => $due->student_id,'id' => $due->id]) }}" class="btn btn-success ">Paid</a>
                    @else
                    <a href="" class="btn btn-success disabled">Paid</a>

                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection