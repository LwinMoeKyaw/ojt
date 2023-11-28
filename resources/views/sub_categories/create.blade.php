@extends('layouts.master')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ url('sub_category') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="name" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Category_id</label>
                    </div>
                    <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add Leave</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
