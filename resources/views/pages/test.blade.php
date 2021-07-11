@extends('layouts.app')
@section('content')
    <p class="py-3"></p>
    @forelse($lists as $list)
    <a class="btn btn-primary" href="{{ route('project.show', $list->code) }}">{{ $list->code }}</a>
    @empty
        <p>empty.</p>
    @endforelse
@endsection
