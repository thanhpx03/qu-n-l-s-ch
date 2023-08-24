<form action="{{route('flight.update',$data->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div>
        <label for="">flight_number</label>
        <input type="text" name='flight_number' value="{{$data->flight_number}}">
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name='image' value="{{$data->image}}">
    </div>
    <div>
        <label for="">total_passer</label>
        <input type="text" name='total_passer' value="{{$data->total_passer}}">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name='description' value="{{$data->description}}">
    </div>
    <div>
        <label for="">airline</label>
        <input type="text" name='airline' value="{{$data->airline}}">
    </div>
    <div>
        <button type="submit">gui</button>
</div>


</form>