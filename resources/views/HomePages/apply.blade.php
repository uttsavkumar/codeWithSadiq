@extends('HomePages.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-3 mx-auto">
            <p class="lead" style="font-weight: 500">Apply for Admission</p>
            <hr>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control ">
                    @error('name')
                    <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Father Name</label>
                            <input type="text" name="fatherName" value="{{ old('fatherName') }}" class="form-control ">
                            @error('fatherName')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Education</label>
                            <input type="text" name="education" value="{{ old('education') }}" class="form-control ">
                            @error('education')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" value="{{ old('contact') }}" class="form-control ">
                            @error('contact')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control ">
                            @error('email')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="">City</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control ">
                            @error('city')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="">State</label>
                            <input type="text" name="state" value="{{ old('state') }}" class="form-control ">
                            @error('state')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="">Date</label>
                            <input type="date" name="dob" value="{{ old('dob') }}" class="form-control ">
                            @error('dob')
                            <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <textarea name="address" cols="30" rows="10" value="{{ old('address') }}"
                        class="form-control "></textarea>
                    @error('address')
                    <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" value="Add" class="btn btn-dark w-100">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection