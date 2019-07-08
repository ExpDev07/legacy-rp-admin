@extends('layouts.panel')

@section('navigation')
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('players.index') }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-address-book"></i>
                    <small>PLAYER INDEX</small></p>
            </a>
        </li>
        <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                <i class="fas fa-chart-network"></i>
                <p>
                    <i class="fas fa-user-circle"></i> <small>MY PLAYER DASHBOARD</small>
                </p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div content="row">

    </div>

    <div class="row">
        <h1>DASD</h1>
    </div>
@endsection
