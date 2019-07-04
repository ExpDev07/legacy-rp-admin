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
                <p><i class="fas fa-user-circle"></i>
                    <small>MY PLAYER DASHBOARD</small></p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('players') }}
    </div>

    <!--This section is for looking up a person-->
    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-success">
                <span class="lead">
                    Look up players by their <b>name</b> or <b>identifier</b>. Be as specific as possible to limit the results.
                </span>
            </div>
            <form method="GET">
                <div class="input-group card-category p-4 mt-3">
                    <label class="input-group-text">
                        <b>Lookup</b>
                    </label>
                    <input class="form-control" name="query" placeholder="Truckster | steam:0a1b2e3d4e5f6789">
                    <button class="btn btn-success btn-block mt-4" style="width: 100%">Player Lookup</button>
                </div>
            </form>
        </div>

        <div class="card card-chart">
            <div class="alert alert-success card-header-success mb-3">
                <span class="lead">
                    Results
                </span>
            </div>
            <div class="card-body">
                @forelse ($players as $player)
                    <a href="{{ route('players.show', ['player' => $player]) }}" data-toggle="tooltip" data-placement="bottom" title="Click for More Information">
                        <div class="alert alert-primary" role="alert">
                            {{ $player->name }} | {{ $player->identifier }}
                        </div>
                    </a>
                @empty
                    <h4>No players found! Try a different name or identifier.</h4>
                @endforelse
                {{ $players->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
@endsection
