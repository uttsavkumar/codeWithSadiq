@extends('Admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('course.store')  }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" value="">
                                    @error('title')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="">Price</label>
                                            <input type="number" name="price" class="form-control"
                                                value="{{ old('price') }}">
                                            @error('price')
                                            <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="">discounted_price</label>
                                            <input type="number" name="discounted_price" class="form-control"
                                                value="{{ old('discounted_price') }}">
                                            @error('discounted_price')
                                            <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                                    @error('image')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="">duration</label>
                                            <input type="text" name="duration" class="form-control"
                                                value="{{ old('duration') }}">
                                            @error('duration')
                                            <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="">category</label>
                                            <input type="text" name="category" class="form-control"
                                                value="{{ old('category') }}">
                                            @error('category')
                                            <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="description" cols="10" rows="9" class="form-control"
                                        placeholder="Enter Description"></textarea>
                                        @error('description')
                                        <p class="text-danger text-sm">{{ $message }}</p>
                                        @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                    @error('status')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="Insert Course" class="btn btn-primary w-100">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</div>
@endsection