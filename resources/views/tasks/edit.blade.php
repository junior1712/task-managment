@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tasks._form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
