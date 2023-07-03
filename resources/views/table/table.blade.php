
@extends('layout.layout')
@section('content')
<a href="{{ route("staffs.create") }}" type="botton">Insert</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Place Of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($staff as $s)
        <tr>
            <td></td>
            <td>{{$s->id}}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->phone }}</td>

            <?php
            if($s->gender=='M'){?>
                <td>Male</td>
             <?php
            }else {?>
                <td>Female</td>
            <?php
            }
           ?>

            <td>{{ $s->dateofbirth }}</td>
            <td>{{ $s->placeofbirth }}</td>
            <td>
                <a href="{{ route('staffs.edit',$s->id) }}" class="btn btn-success">Edit</a>

                {{-- <a href="{{ route('staffs.destroy',$s->id) }}" type="button" class="btn btn-primary">Delete</a> --}}
                <form action="{{ route('staffs.destroy',$s->id) }}" method="POST" onclick="return confirm('Are you sure to delete')">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm" class="BtnDelete" id="BtnDelete">Delete</button>
                </form>


            </td>


        </tr>
           @endforeach
    </tbody>
</table>
@endsection

