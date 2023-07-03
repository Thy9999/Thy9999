@extends('layout.layout')
@section('content')
<form action="{{  route('staffs.update',$edit->id) }}" method="POST" autocomplete="off">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label for="h1" class="labe">
        <h1>Input Update</h1>
    </label>
    <label for="name">ID</label>
    <input type="number" id="id" name="id" value="{{ $edit->id }}">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $edit->name }}"><br>
    <label for="name">Phone</label>
    <input type="number" id="phone" name="phone" value="{{ $edit->phone }}">
    <label for="name">Gender</label>
    <select name="gender" id="gender">
        @if($edit->gender=='M'){
            <option value="M">Male</option>
            <option value="F">Female</option>
        }@else{
            <option value="F">Female</option>
            <option value="M">Male</option>
        }
        @endif
    </select><br>
    <label for="name">Date Of Birth</label>
    <input type="date" id="dateofbirth" name="dateofbirth" value="{{ $edit->dateofbirth }}">
    <label for="name">Place Of Birth</label>
    <input type="text" id="placeofbith" name="placeofbirth" value="{{ $edit->placeofbirth }}">
   {{-- <input type="submit" value="Close" class="btn btn-success"> --}}
       <input type="submit" value="Update" class="btn btn primary">
</form>
@endsection



