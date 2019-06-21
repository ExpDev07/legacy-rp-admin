@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-secondary lead">
            <a href="{{route('players.show', ['player' => $player])}}">
                <strong>Return to player profile</strong>
            </a> |
            <a href="{{ route('players.warnings.index', [ 'player' => $player]) }}">
                <strong>Return to Warnings</strong>
            </a>
        </div>
        <div class="card border-warning">
                <div class="card-header lead">
                    Creating Warning for
                    <span class="text-success">{{ $player->name }}</span> | <span class="text-success">{{ $player->identifier }}</span>
                </div>
            <form method="POST" action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
                @csrf
                <div class="col-sm-10 input-group pb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><b>Message</b></span>
                    </div>
                    <input class="form-control" name="message" placeholder="Combat logging: Player was being chased and then logged out.">
                </div>
                <div class="col-sm-2 pb-3">
                    <button class="btn btn-success btn-block">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
