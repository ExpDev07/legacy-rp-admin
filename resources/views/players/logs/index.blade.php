@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="warnings-header alert alert-light">
            <center>
                <span class="text-dark">Viewing logs for </span>
                <a href="{{ route('players.show', [ 'player' => $player ]) }}">
                    <span class="text-success">{{ $player->name }}</span>
                </a>
            </center>
        </div>

        <div class="alert alert-secondary">
            @forelse ($logs as $log)
                <div class="alert alert-light mb-2">
                    [{{ $log->timestamp }}] [ {{ $log->action }} ]: {{ $log->details }}
                </div>
            @empty

            @endforelse
            {{ $logs->links() }}
        </div>
    </div>
@endsection
