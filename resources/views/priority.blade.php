@extends('layouts.app')

@section('content')
    @if (count($demands))
        <div class="tasks-container">
            @foreach ($demands as $demand)
                @include('components\full-modal', [$demand])

                @include('components\content', [$demand])
            @endforeach
        </div>
    @endif
@endsection
