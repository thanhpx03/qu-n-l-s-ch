<form action="{{route('flight.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">flight_number</label>
        <input type="text" name="flight_number">
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">total_passengers</label>
        <input type="text" name="total_passengers">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name="description">
    </div>
    <!-- <div>
        <label for="">airline_id</label>
        <input type="text" name="airline_id">
    </div> -->
    <select name="airline_id" id="">
        <option value=""  name="airline_id">chon</option>
        <option value="1"  name="airline_id">viet nam airline</option>
        <option value="2"  name="airline_id">viet Jack</option>

    </select>
 
    <div>
        <button type="submit">gui</button>
    </div>
</form>