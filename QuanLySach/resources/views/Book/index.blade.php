@extends('layout')
@section('content')
<table id="list" class="table table-striped" style="width:100%">
<thead>
            <tr>
                <th>id</th>
                <th>mã loại</th>
                <th>tên</th>
                <th>giá</th>
                <th>mô tả </th>
                <th>created_at </th>
                <th>updated_at</th>

                <th>hành động</th>
            </tr>
        </thead>
        <tbody?>
            @foreach ($data as $data)
                    <tr>
                    <td>{{ $data->id_book }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nameBook }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td> 
                        <td>

                        <button class="btn btn-danger"
                    onclick="document.getElementById('data-{{ $data->id }}').submit();">Xóa</button>

                            <form action="{{ route('Category.destroy',$data) }}" method="Post" id="data-{{$data->id}}">
                                <a class="btn btn-primary" href="{{ route('Category.edit',$data->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                            </form>
                        </td>
                    </tr>
                    @endforeach
</tbody>
</table>
@endsection