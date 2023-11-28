@extends('layouts.master')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ url('sub_category/'.$sub_category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-lg-9">
                        <label for="nameInput" class="form-label">Name</label>
                    </div>
                    <div class="col-lg-12">
                        <input name="name" value="{{ $sub_category->name }}" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
                    <select name="category_id" id="" class="form-control">
                    @forelse ($categories as $category)
                    <option
                    {{  $category->id == $sub_category->category->id ? 'selected' : ''}}
                     value="{{$category->id}}">{{$category->name}}</option>
                    @empty
                 @endforelse
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
