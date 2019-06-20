@extends('layouts.app') @section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="pb-2 warnings-header alert alert-light">
                    <center><span class="text-dark">Viewing Warnings for </span><span class="text-success">{{ $player->name }}</span> <span class="text-muted">|</span> <span class="text-success">{{$player->identifier }}</span></center>
                </div>
                <div>
                    <div class="col-sm-7 alert alert-secondary"><span class="lead">Total Warnings: <span
                                class="text-warning">{{ $warnings->total() }}</span></span> | <a href="{{ route('players.warnings.create', [ 'player' => $player ]) }}"><strong>Create
                                a new warning</strong></a> | <a href="{{route('players.show', ['player' => $player])}}"><strong>Return
                                to player profile</strong></a>
                    </div>
                    @forelse ($warnings as $warning)
                        <div class="card border-warning mb-3">
                            <div class="card-body">
                                <p class="card-text">{{ $warning->message }}</p>
                                <p class="text-right">posted at <strong>{{ $warning->created_at }}</strong><br/> by
                                    <strong>{{ $warning->issuer->name  }}</strong></p>
                                <div class="row">
                                    <div class="col-sm-3"><strong><a
                                                href="{{ route('warnings.show', ['warning' => $warning]) }}">View or
                                                Edit this Warning</a></strong></div>
                                    <div class="col-sm-3"></div>
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
                    @endforelse {{ $warnings->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
