@extends('layouts.app')

@section('navigation')
    <ul class="nav">
        <li class="nav-item {{ (request()->is('players')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.index') }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-address-book"></i>
                    <small>PLAYER INDEX</small>
                </p>
            </a>
        </li>
        <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-user-circle"></i>
                    <small>MY PLAYER DASHBOARD</small>
                </p>
            </a>
            <hr class="style-two">
        <li>
            <div class="p-3 d-flex justify-content-center"><span
                    class="text-secondary">Admin Section for <br/>Player <strong><span
                            class="text-warning">{{ $player->name }}</span></strong></span>
            </div>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <h5>You are now editing a warning for {{ $warning->player->name  }}</h5>
    </div>
@endsection
