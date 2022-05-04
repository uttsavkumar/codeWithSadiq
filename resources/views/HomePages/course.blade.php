@extends('HomePages.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-inline-flex mt-5">
                <h5 class="border-0 border-primary h2 border-3 border-bottom px-2" style="border-radius: 5px">Our
                    Courses</h5>
            </div>
           @foreach ($course as $item)
           <div class="card shadow-md p-2" style="border:0px">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <h1 class="display-6">{{ $item['title'] }}</h1>
                        <p class="small text-justify">{{$item['description']}}</p>
                        <div class="d-flex mt-4">
                            <p class="h6 "><strong>Course Fee: </strong> ₹ {{ $item['discounted_price'] }}</p>
                            <p class="h6 ms-3"><strong>Duration : </strong>{{ $item['duration'] }} months</p>
                            <p class="h6 ms-3"><strong>Instructor : </strong>Syed Sadique Hussain</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('images/'.$item->image) }}" alt=""
                            class="card-img-top" style="border-radius: 1.5rem">
                    </div>
                </div>
            </div>
        </div>
           @endforeach
        </div>

    </div>
</div>
@endsection