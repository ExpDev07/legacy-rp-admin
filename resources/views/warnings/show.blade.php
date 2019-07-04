@extends('layouts.panel')

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
    </ul>
@endsection

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player-view-warning', $warning) }}
    </div>

    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-warning">
                <span class="lead">
                    Viewing warning | issued by {{ $warning->issuer->name }}
                </span>
            </div>
            <div class="card-category">
                <div class="card-body">
                    <p class="card-text">{{ $warning->message }}</p>
                    <div class="row">
                        <div class="col-sm-3">
                            <a href=""{{ route('warnings.edit', [ 'player' => $warning->player]) }}><strong>Edit</strong></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#"><strong>Delete</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
