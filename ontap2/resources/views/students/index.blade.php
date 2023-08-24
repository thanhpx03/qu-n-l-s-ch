<h1>hêllooo</h1>
<a href="{{route('student.create')}}">thêm</a>
<table border="1">
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>phone</th>
    <th>address</th>
    <th>image</th>
    <th>create_up</th>
    <th>update_up</th>
    <th>hành động</th>
    <tbody?>
            @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->phone }}</td>
                       
                        <td>{{ $data->address }}</td>
                        <!-- <td>{{ $data->image }}</td> -->

                        <td>
                        <img width="70px" src="{{ asset($data->image) }}" alt="">
                        </td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td> 
                        <td>
                       <button> <a class="btn btn-primary" href="{{ route('student.edit',$data->id) }}">Edit</a></button>
                        <!-- <button class="btn btn-danger"

                    onclick="
                     if (confirm('Are you sure?')) {
                            document.getElementById('item-{{ $data->id }}').submit();
                        }
                    ">Xóa</button> -->

                            <form action="{{ route('student.destroy',$data) }}" method="Post" id="data-{{$data->id}}">
                              <button name="submit" type="submit">xoa</button>
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                            </form>
                        </td>
                    </tr>
                    @endforeach
</tbody>
</table>


</table>