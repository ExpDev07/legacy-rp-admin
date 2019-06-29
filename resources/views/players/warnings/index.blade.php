@extends('layouts.app')

@section('content')
    <div class="container">
        <div content="row">
            {{ Breadcrumbs::render('player-create-warning', $player) }}
        </div>
        <div class="warnings-header alert alert-light">
            <center>
                <span class="text-dark">Viewing warnings for </span>
                <a href="{{ route('players.show', [ 'player' => $player ]) }}" data-toggle="tooltip" title="Back to Player Profile" data-placement="bottom">
                    <span class="text-success">{{ $player->name }}</span>
                </a>
            </center>
        </div>

        <div class="alert alert-secondary">
            <span class="lead">
                Total warnings: <span class="text-warning">{{ $warnings->total() }}</span>
            </span>
        </div>

        <form class="card border-warning mb-3" method="POST" action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
            <div class="card-body">
                @csrf

                <h5>Create a new warning</h5>
                <textarea class="form-control mb-2" style="height: 13vw" name="message" placeholder="Reason, explanation, and available evidence."></textarea>
                <button class="btn btn-success" style="width: 100%" data-toggle="tooltip" title="Finish and Confirm Warning (were you detailed enough?)" data-placement="bottom">Create Warning</button>
            </div>
        </form>

        @forelse ($warnings as $warning)
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <p class="card-text">{{ $warning->message }}</p>
                    <p class="text-right">posted at <strong>{{ $warning->created_at }}</strong><br/> by
                        <strong>{{ $warning->issuer->name  }}</strong></p>
                    <div class="row">
                        <div class="col-sm-3">
                            <strong><a href="{{ route('warnings.show', ['warning' => $warning]) }}">View this warning</a></strong>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card border-warning">
                <div class="card-body">
                    <span class="lead">This player has no warnings. They're doing great!</span>
                </div>
            </div>
        @endforelse {{ $warnings->links() }}
    </div>
@endsection
