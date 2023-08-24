
<button><a href="{{route('flight.create')}}">them</a></button>
<table border="1">
    <thead>
        <th>id</th>
        <th>flight_number</th>
        <th>image</th>
        <th>total_passer</th>
        <th>description</th>
        <th>airline</th>
    </thead>
@foreach($data as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->flight_number}}</td>
        <td>
            <img src="{{$data->image}}" alt="" width="70">
        </td>
        <td>{{$data->total_passer}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->airline}}</td>
        <td>
            <button><a href="{{route('flight.edit',$data->id)}}">edit</a></button>
            <form action="{{route('flight.destroy',$data->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>