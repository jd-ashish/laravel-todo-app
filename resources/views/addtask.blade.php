@extends('layout')

@section('content')
<div class="container">
<h3>Add new task</h3>

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

    <form method="POST" action="/add-todo-data">
    @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="title" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Date and time</label>
            <input type="date" class="form-control" name="date" id="formGroupExampleInput2" required>
        </div>
        <div class="form-group">
            <label for="Discriptions">Discriptions</label>
            <textarea rows="10" class="form-control" name="discription" id="Discriptions" required></textarea>
        </div>
        <div class="form-group">
            <label for="Status">Select Status</label>
            <select class="form-control" name="status"  required>
                <option >Select status</option>
                <option value="1">Pending</option>
                <option value="2">Expired</option>
                <option value="3">Compeleted</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add todo data</button>
    </form>
</div>
@endsection
