@extends('layouts.profile')

@section('content')
    <table>
        <thead>
        <tr>
            <td>Title</td>
            <td>Description</td>
            <td>Status</td>
            <td>Deadline</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->deadline }}</td>
                <td>
                    <div>
                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    </div>
                    <div>
                        <a href="{{ route('tasks.show', $task->id) }}">Show</a>
                    </div>
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
