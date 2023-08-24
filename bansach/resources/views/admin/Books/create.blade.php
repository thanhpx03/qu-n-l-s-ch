@extends('admin.layout')
@section('Product')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('Book.store')}}" method="post"  enctype="multipart/form-data">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">id_category:</label>
    <input type="number" class="form-control" id="id_category" placeholder="Enter id_category" name="id_category">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">name_book:</label>
    <input type="text" class="form-control" id="name_book" placeholder="Enter name_book" name="name_book">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">describe:</label>
    <input type="text" class="form-control" id="describe" placeholder="Enter describe" name="describe">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">quantity:</label>
    <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
  </div>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">price:</label>
    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
  </div>
  <label for="img">img:</label>
 <input class="form-control" rows="5" name="img" type="file" id="img"></input>
  </div>
  
 <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection