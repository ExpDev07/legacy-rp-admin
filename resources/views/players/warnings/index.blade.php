@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10"><div class="text-right"><a href="{{route('players.show', ['player' => $player])}}"><strong>Return to player profile</strong></a></div>
                <center><div class="pb-2 warnings-header">All warnings for {{ $player->name }} | {{$player->identifier }}</div></center>

                <h5>Total: {{ $warnings->total() }}</h5>
                <a href="{{ route('players.warnings.create', [ 'player' => $player ]) }}">Create a new warning.</a>

                @forelse ($warnings as $warning)
                    <div class="card border-warning mb-3">
                        <div class="card-body">
                            <p class="card-text">{{ $warning->message }}</p>
                            <p class="text-right">posted at <strong>{{ $warning->created_at }}</strong><br/>
                            by <strong>{{ $warning->issuer->name  }}</strong></p>
                            <div class="row">
                                <div class="col-sm-3"><strong><a href="{{ route('warnings.show', ['warning' => $warning]) }}">View this warning</a></strong></div>
                                <div class="col-sm-3"><strong><a href="#">Nullify This Warning</a></strong></div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card border-warning mb-3">
                        <div class="card-body">
                            <span class="lead">This play has no warnings. They're doing great!</span>
                        </div>
                    </div>
                @endforelse
                {{ $warnings->links() }}
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
