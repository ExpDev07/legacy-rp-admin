@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div content="row">
                {{ Breadcrumbs::render('player-create-ban', $player) }}
            </div>
            <div class="card card-chart">
                <div class="alert alert-primary card-header-success">
                    <center>
                        <span class="lead">Banning <a href="{{ route('players.show', [ 'player' => $player ]) }}"
                                                      data-toggle="tooltip" title="Back to Player Profile"
                                                      data-placement="bottom">{{ $player->name }}</a></span>
                    </center>
                    This person has a total of
                    <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}" data-toggle="tooltip"
                       title="To Player Warnings" data-placement="bottom">
                        {{ $player->warnings()->count() }} warnings
                    </a>
                </div>

                <form class="card border-danger mb-3" method="POST"
                      action="{{ route('players.ban.store', [ 'player' => $player ]) }}">
                    <div class="card-body">
                        @csrf

                        <h5>Create the ban</h5>
                        <p>
                            You are now creating a ban for {{ $player->name }}. If you are currently trialing for staff,
                            make sure to contact a moderator or
                            above to sign off on it. All bans are logged automatically.
                        </p>
                        <input class="form-control mb-2" name="reason" placeholder="Reason. Keep it brief...">
                        <button class="btn btn-danger" style="width: 100%" data-toggle="tooltip"
                                title="Finish and Confirm Ban" data-placement="bottom"><i class="fas fa-gavel"></i> Ban
                            Player
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
