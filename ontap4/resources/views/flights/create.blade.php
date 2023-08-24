<h1>thêm</h1>
<form action="{{route('flight.store')}}" method="post" enctype="multipart/form-data">

@csrf
 <div>
     <input type="text" name="flight_number">
 </div>
 <div>
     <input type="file" name="image">
 </div>
 <div>
     <input type="text" name="total_passengers">
 </div>
 <div>
     <input type="text" name="description">
 </div>
 <div>
    <select name="airline_id" id="">
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
