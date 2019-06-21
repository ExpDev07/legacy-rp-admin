@extends('layouts.app') @section('content')
    <div class="container">
        <div class="warnings-header alert alert-light">
            <center>
                <span class="text-dark">Viewing warnings for </span>
                <a href="{{ route('players.show', [ 'player' => $player ])  }}">
                    <span class="text-success">{{ $player->name }}</span>
                    <span class="text-muted">|</span>
                    <span class="text-success">{{$player->identifier }}</span>
                </a>
            </center>
        </div>
        <div class="alert alert-secondary">
            <span class="lead">
                Total warnings: <span class="text-warning">{{ $warnings->total() }}</span> |
                <a href="{{ route('players.warnings.create', [ 'player' => $player ]) }}"><strong>Create a new warning</strong></a>
            </span>
        </div>
        @forelse ($warnings as $warning)
            <div class="card border-warning">
                <div class="card-body">
                    <p class="card-text">{{ $warning->message }}</p>
                    <p class="text-right">posted at <strong>{{ $warning->created_at }}</strong><br/> by
                        <strong>{{ $warning->issuer->name  }}</strong></p>
                    <div class="row">
                        <div class="col-sm-3">
                            <strong><a href="{{ route('warnings.show', ['warning' => $warning]) }}">View this warning.</a></strong></div>
                        <div class="col-sm-3"></div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card border-warning">
                <div class="card-body">
                    <span class="lead">This play has no warnings. They're doing great!</span>
                </div>
            </div>
        @endforelse {{ $warnings->links() }}
    </div>
@endsection
