@extends('layouts.layout')

@section('content')
    <div class="container">
        <h3>Edit Task # - {{ $task->id }}</h3>
        @include('partials.errors')
        <br>
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}">
                    <br>
                    <label for="description">Description</label>
                    <textarea name="description"  cols="30" rows="10" class="form-control">{{ $task->description }}</textarea>
                    <br>
                    <button class="btn btn-warning">Edit Task</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
