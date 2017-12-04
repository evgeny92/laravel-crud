@extends('layouts.layout')

@section('content')
    <div class="container">
        <h3>Create Task</h3>
        @include('partials.errors')
        <br>
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['route' => ['tasks.store']]) !!}
                 <div class="form-group">
                     <label for="title">Title</label>
                     <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                     <br>
                     <label for="description">Description</label>
                     <textarea name="description"  cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                     <br>
                     <button class="btn btn-success">Add Task</button>
                 </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
