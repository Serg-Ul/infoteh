@extends('layouts.profile')

@section('content')
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" value="{{ $task->title }}">
        </div>
        <div>
            <textarea name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <input type="text" name="deadline" class="custom-datepicker" readonly value="{{ $task->deadline }}">
        </div>
        <div>
            <select name="status">
                @foreach($statuses as $status)
                    <option value="{{ $status }}" @selected($task->status === $status)>{{ $status }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
