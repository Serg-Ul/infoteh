@extends('layouts.profile')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{ $userId }}">
        <div>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Title">
        </div>
        <div>
            <textarea name="description"></textarea>
        </div>
        <div>
            <input type="text" name="deadline" class="custom-datepicker" readonly placeholder="Date">
        </div>
        <div>
            <select name="status">
                @foreach($statuses as $status)
                    <option value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
