@extends('admin.layout')
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

<form action="{{route('Category.store')}}" method="post">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name_category">
  </div>
  
 <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection