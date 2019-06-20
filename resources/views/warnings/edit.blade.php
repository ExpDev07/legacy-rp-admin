@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>You are now editing a warning for {{ $warning->player->name  }}</h5>
    </div>
@endsection
