@extends('layout.layout')
@section('content')
<form action="{{ route("staffs.store") }}" method ="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="h1" class="labe">
        <h1>Input Data</h1>
    </label>
    <label for="name">ID</label>
    <input type="number" id="id" name="id">
    <label for="name">Name</label>
    <input type="text" id="name" name="name"><br>
    <label for="name">Phone</label>
    <input type="number" id="phone" name="phone">
    <label for="name">Gender</label>
    <select name="gender" id="gender">
        <option value="M">Male</option>
        <option value="F">Femal</option>
    </select><br>
    <label for="name">Date Of Birth</label>
    <input type="date" id="dateofbirth" name="dateofbirth">
    <label for="name">Place Of Birth</label>
    <input type="text" id="placeofbith" name="placeofbirth">
       <input type="submit" value="Insert">
</form>
@endsection

