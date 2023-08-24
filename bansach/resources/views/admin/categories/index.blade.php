@extends('admin.layout')
@section('content')
<h2>
<a href="{{route('Category.create')}}" class="btn btn-primary">thêm mới </a>
</h2>
<table id="list" class="table table-striped" style="width:100%">
<thead>
            <tr>
                <th>id</th>
                <th>danh mục</th>
              
                <th>created_at </th>
                <th>updated_at</th>

                <th>hành động</th>
            </tr>
        </thead>
        <tbody?>
            @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name_category }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td> 
                        <td>
                        <a class="btn btn-primary" href="{{ route('Category.edit',$data->id) }}">Edit</a>
                        <button class="btn btn-danger"
                    onclick="document.getElementById('data-{{ $data->id }}').submit();">Xóa</button>

                            <form action="{{ route('Category.destroy',$data) }}" method="Post" id="data-{{$data->id}}">
                              
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