@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This is the header text-->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card border-warning mb-3">
                    <div class="card-header">Viewing Warning for <span class="text-success">{{ $warning->player->name }}</span> | <span class="text-success">{{ $warning->player->identifier }}</span></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="{{ route('players.warnings.index', [ 'player' => $warning->player]) }}"><strong>Return to Warnings</strong></a>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{route('players.show', ['player' => $warning->player])}}"><strong>Return to player profile</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
