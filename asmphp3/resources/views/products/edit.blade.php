@extends('layout')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('product.update',$data->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
 
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">category_id:</label>
    <input type="text" class="form-control" id="category_id" placeholder="Enter category_id" name="category_id" value="{{$data->category->id}}">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data->name}}">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">sku:</label>
    <input type="text" class="form-control" id="sku" placeholder="Enter sku" name="sku"  value="{{$data->sku}}">
  </div>
  <div class="">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">slug:</label>
    <input type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug" value="{{$data->slug}} ">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">describe:</label>
    <input type="text" class="form-control" id="describe" placeholder="Enter describe" name="describe" value="{{$data->describe}}">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">price:</label>
    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="{{$data->price}}">
  </div>
  <div class="">
  <label for="img">img:</label>
 <input class="form-control" rows="5" name="img" type="file" id="img"></input>
  </div>
 <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection