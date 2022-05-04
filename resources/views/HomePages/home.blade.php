@extends('HomePages.base')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-5" style="background:url(https://appco.themetags.com/img/footer-bg.png) ">
      <div class="row">
        <div class="col-10 mt-4 text-white ps-5">
          <h1 style="font-weight: 300" class="display-1"> Skill Hai! To Future Hai!</h1>
          <div class="">
            <p class="lead p-3" style="margin-left: -10px">
              "CWS is an on-demand marketplace for top Programming engineers, developers, consultants, architects,
              programmers, and tutors. Get your projects built by vetted web programming freelancers or learn from
              expert
              mentors with team training & coaching experiences in Project based training."
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="container">
  <div class="row mt-4">
    <div class="col-12 p-3">
      <p class="lead" style="font-weight: 500"> Courses</p>
    </div>
  </div>
  <div class="row">
    @foreach ($course as $i)
    <div class="col-lg-2 col-6 col-md-4 mb-3">
      <div class="card border text-center  h-100">
        <img src="{{ asset('images').'/'.$i->image }}" alt="" class="card-img-top img-fluid">
        <div class="card-body p-2 pb-0  mb-0">
          <h3 class="h6  mb-0">{{ $i->title }}</h3>
        </div>
        <div class="card-footer mt-1">
          <h3 class="fs-bold  mb-0 small"><strong>Duration : {{ $i->duration }} months</strong></h3>
        </div>
      </div>
    </div>
    @endforeach


  </div>
</div>
@endsection