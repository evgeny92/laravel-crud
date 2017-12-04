@extends('layouts.layout')

@section('content')
    <div class="container">
        <h3>Show Task # - {{ $task->title }}</h3>
        <br>
        <div class="row">
            <div class="well">
                {{ $task->description }}
            </div>
            <br>
            {!! Html::linkRoute('tasks.index', '&laquo; See All Tasks', [], ['class' => 'btn btn-success']) !!}
        </div>
    </div>
@endsection