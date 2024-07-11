@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @include('tasks._form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
