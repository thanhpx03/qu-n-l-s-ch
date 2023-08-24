@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<h1>thêm</h1>
<form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">name</label>
        <input type=" text" name="name" id="name">
    </div>
    <div>
    <label for="">gender</label>

        <input type=" text" name="gender" id="gender">
    </div>
    <div>
    <label for="">phone</label>

        <input type=" text" name="phone" id="phone">
    </div>
    <div>
    <label for="">address</label>
    
        <input type=" text" name="address" id="address">
    </div>
    <div>
    <label for="">image</label>

        <input type="file" name="image" id="image">
    </div>
    
    <button name="submit">save</button>
    
</form>