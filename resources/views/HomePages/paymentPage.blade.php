@extends('HomePages.base')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h6 style="font-size: 18px">Pay Outstanding Due</h6>
                    <form action="" method="POST" class="d-flex">
                        @csrf
                        <input type="search" name="contact" value="{{ old('contact') }}" class="form-control">
                        @error('contact')
                        <p class="text-danger small">{{ $message }}</p>
                        @enderror
                        <input type="submit" value="Search" class="btn btn-dark">
                    </form>
                    <h6 class="lead mt-1" style="font-size: 14px">Enter Registered Mobile No..</h6>
                </div>
            </div>
            @if($std)
            <div class="row">
                <div class="col-lg-12 p-5">
                    <table class="table">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Month</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($std as $pay)
                        <tr>
                            <td>{{ $pay->id }}</td>
                            <td>{{ $pay->student->name }}</td>
                            <td>{{ $pay->due_date }}</td>
                            <td>{{ $pay->amount }}</td>
                            <td>

                                @if ($pay->status == 'paid')
                                <a href="" class="btn btn-success btn-sm disabled">Paid</a>
                                @endif
                                @if ($pay->status == 'due')
                               <form action="{{ route('makePayment') }}" method="post" class="d-inline ">
                                <input type="hidden" value="{{ $pay->student->contact }}" name="contact">
                                <input type="hidden" value="{{ $pay->id }}" name="pay_id"> 
                                  @csrf 
                                   <input type="submit" value="Due"  class="btn btn-danger">
                               </form>
                                @endif
                                <a href="" class="btn btn-primary btn-sm "><i class="bi bi-printer"></i></a>


                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection