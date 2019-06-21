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
                Total warnings: <span class="text-warning">{{ $warnings->total() }}</span>
            </span>
        </div>

        <form class="card border-warning mb-3" method="POST" action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
            <div class="card-body">
                @csrf

                <h5>Create a new warning</h5>
                <div class="col-sm-10 input-group pb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><b>Message</b></span>
                    </div>
                    <input class="form-control" name="message" placeholder="Combat logging: Player was being chased and then logged out.">
                </div>
                <div class="col-sm-2 pb-3">
                    <button class="btn btn-success btn-block">Create</button>
                </div>
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
