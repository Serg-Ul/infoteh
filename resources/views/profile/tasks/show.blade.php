@extends('layouts.profile')

@section('content')
    <div>
        Task name: {{ $task->title }}
    </div>
    <div>
        Description: {{ $task->description }}
    </div>
    <div>
        Status: {{ $task->status }}
    </div>
    <div>
        Deadline: {{ $task->deadline }}
    </div>
@endsection
