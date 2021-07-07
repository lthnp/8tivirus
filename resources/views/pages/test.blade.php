@extends('layouts.app')
@section('content')
    @forelse($lists as $list)
    <a class="btn btn-primary" href="{{ route('project.show', $list->code) }}">{{ $list->id }}</a>
    @empty
        <p>empty.</p>
    @endforelse
@endsection
