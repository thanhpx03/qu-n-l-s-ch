<form action="{{route('flight.update',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="">flight_number</label>
        <input type="text" name="flight_number" value="{{$data->flight_number}}"> 
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name="image" value="{{$data->image}}">
    </div>
    <div>
        <label for="">total_passengers</label>
        <input type="text" name="total_passengers" value="{{$data->total_passengers}}">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name="description" value="{{$data->description}}">
    </div>
    <select name="airline_id" id="">
        <option value=""  name="airline_id"  >{{$data->airline->name}}</option>
        <option value="1"  name="airline_id" >viet nam airline</option>
        <option value="2"  name="airline_id">viet Jack</option>

    </select>
 
 
    <div>
        <button type="submit">gui</button>
    </div>
</form>