<button><a href="{{route('flight.create')}}">thêm</a></button>

<table border="1">
    <thead>
        <th>id</th>
        <th>flight_number</th>
        <th>image</th>
        <th>total_passengers</th>
        <th>description</th>
        <th>airline_id</th>
        <th>hành động</th>
    </thead>
    @foreach($data as $data)
    <tr>
    <td>{{$data->id}}</td>

        <td>{{$data->flight_number}}</td>
        <td>
            <img src="{{$data->image}}" width="70" alt="">
        </td>
        <td>{{$data->total_passengers}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->airline->name}}</td>
        <td>
        <button ><a href="{{route('flight.edit',$data->id)}}">sửa</a></button>
            <form action="{{route('flight.destroy',$data->id)}}" method="Post" >
               
                @csrf
                @method('DELETE')
                <button type="submit">xóa</button>

            </form>
        </td>
    </tr>

    @endforeach
</table>