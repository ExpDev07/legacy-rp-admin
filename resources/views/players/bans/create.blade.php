@extends('layouts.app')

@section('content')
    <div class="container">
        <div content="row">
            {{ Breadcrumbs::render('player-create-ban', $player) }}
        </div>
        <div class="warnings-header alert alert-light">
            <center>
                <span class="text-dark">Banning </span>
                <a href="{{ route('players.show', [ 'player' => $player ]) }}">
                    <span class="text-success">{{ $player->name }}</span>
                </a>
            </center>
        </div>

        <div class="alert alert-secondary">
            <span class="lead">
                This person has a total of
                <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}">
                    <span class="text-warning">{{ $player->warnings()->count() }}</span> warnings
                </a>
            </span>
        </div>

        <form class="card border-danger mb-3" method="POST" action="{{ route('players.ban.store', [ 'player' => $player ]) }}">
            <div class="card-body">
                @csrf

                <h5>Create the ban</h5>
                <p>
                    You are now creating a ban for {{ $player->name }}. If you are currently trialing for staff, make sure to contact a moderator or
                    above to sign off on it. All bans are logged automatically.
                </p>
                <input class="form-control mb-2" name="reason" placeholder="Reason. Keep it brief...">
                <button class="btn btn-danger" style="width: 100%"><i class="fas fa-camera"></i>Ban Player</button>
            </div>
        </form>
    </div>
@endsection
