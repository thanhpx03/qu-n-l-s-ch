<button><a href="{{route('flight.create')}}">them</a></button>

<table border="1">
    <thead>
        <th>id</th>
        <th>flight_number</th>
        <th>image</th>
        <th>total_passengers</th>
        <th>description</th>
        <th>airline_id</th>
        <th>action</th>
    </thead>
    @foreach($data as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->flight_number}}</td>
        <td>
            <img src="{{$data->image}}" alt="" width="70">
        </td>
        <td>{{$data->total}}</td>
        <td>{{$data->desctription}}</td>
        <td>{{$data->airline->name}}</td>
        <td>
            <button><a href="{{route('flight.edit',$data->id)}}">sua</a></button>
            <form action="{{route('flight.destroy',$data->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">xoa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>