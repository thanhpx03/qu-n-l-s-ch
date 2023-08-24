<form action="{{route('flight.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div>
        <label for="">flight_number</label>
        <input type="text" name='flight_number'>
    </div>
    <div>
        <label for="">image</label>
        <input type="file" name='image'>
    </div>
    <div>
        <label for="">total_passer</label>
        <input type="text" name='total_passer'>
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name='description'>
    </div>
    <div>
        <label for="">airline</label>
        <input type="text" name='airline'>
    </div>
    <div>
        <button type="submit">gui</button>
</div>


</form>