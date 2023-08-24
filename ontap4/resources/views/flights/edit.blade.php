<h1>sửa</h1>
<form action="{{route('flight.update',$data)}}" method="post"enctype="multipart/form-data">


@csrf
@method('PUT')
 <div>
     <input type="text" name="flight_number" value="{{$data->flight_number}}">
 </div>
 <div>
     <input type="file" name="image" value="{{$data->image}}">
 </div>
 <div>
     <input type="text" name="total_passengers" value="{{$data->total_passengers}}">
 </div>
 <div>
     <input type="text" name="description" value="{{$data->description}}" >
 </div>
 <div>
    <select name="airline_id" id="" >
        <option value="">chọn</option>
        <option value="1" name="airline_id">việt nam airline</option>
        <option value="2" name="airline_id">Vietjet Air</option>
    </select>
    <!-- <input type="text" name="airline_id"> -->

 </div>
 <div>
     <button type="submit">gửi</button>
 </div>

</form>
