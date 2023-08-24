@if($errors->any())
<div>
    @foreach($errors->all() as $error)
    <ul>
        <li>{{$error}}</li>
    </ul>
    @endforeach
</div>
@endif

<h1>sửa</h1>
<form action="{{route('student.update',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="">name</label>
        <input type=" text" name="name" id="name" value="{{$data->name}}">
    </div>
    <div>
    <label for="">gender</label>

        <input type=" text" name="gender" id="gender" value="{{$data->gender}}">
    </div>
    <div>
    <label for="">phone</label>

        <input type=" text" name="phone" id="phone" value="{{$data->phone}}">
    </div>
    <div>
    <label for="">address</label>
    
        <input type=" text" name="address" id="address" value="{{$data->address}}">
    </div>
    <div>
    <label for="">image</label>

        <input type="file" name="image" id="image" value="{{$data->image}}">
    </div>
    
    <button name="submit">save</button>
    
</form>