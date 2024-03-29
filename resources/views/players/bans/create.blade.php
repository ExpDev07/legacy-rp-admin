@extends('layouts.panel')

@section('navigation')
    <ul class="nav">
        <li class="nav-item {{ (request()->is('players')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.index') }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-address-book"></i>
                    <small>PLAYER INDEX</small></p>
            </a>
        </li>
        <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-user-circle"></i>
                    <small>MY PLAYER DASHBOARD</small></p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player-create-ban', $player) }}
    </div>

    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-success">
                <span class="lead mb-3">
                    Banning {{ $player->name  }} ({{ $player->identifier }})
                </span>
                This person has a total of
                <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}">
                    <u>{{ $player->warnings()->count() }} warnings (click to view)</u>.
                </a>
            </div>

            <form class="card border-danger" method="POST" action="{{ route('players.ban.store', [ 'player' => $player ]) }}">
                <div class="card-body">
                    @csrf
                    <p>
                        You are now creating a ban for {{ $player->name }}. If you are currently trialing for staff, make sure to contact a moderator or
                        above to sign off on it. All bans are logged automatically. If the offense is minor, we recommend using the warning system instead
                        and/or to review any warnings that the person may have received before. The decision is yours, though.
                    </p>
                    <input class="form-control mb-2" name="reason" placeholder="Reason. Keep it brief...">
                    <button class="btn btn-danger" style="width: 100%">
                        <i class="fas fa-gavel"></i> Ban Player
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
