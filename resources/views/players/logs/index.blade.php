@extends('layouts.panel')

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player-view-logs', $player) }}
    </div>

    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-success">
                <span class="lead">
                    Viewing all logged actions related to this player
                </span>
            </div>
            <div class="card-category pb-3">
                <div class="card-body">
                    Below are all the logged actions for <strong>{{ $player->name }}</strong>. Some are appropriately colored in respect to their nature (e.g:
                    kills, deaths, and script injections are red). If you notice any suspicious activity, make sure to further investigate by, for example,
                    contacting the player.
                </div>
                @forelse ($logs as $log)
                    <div class="card-body pb-0">
                        <div class="alert alert-{{ LogHelper::type($log) }} mb-0 p-2">
                            [{{ $log->timestamp }}] [{{ $log->action }}]: {{ $log->details }}
                        </div>
                    </div>
                @empty
                    <div class="card-body lead">
                        We couldn't find any logs for this person. Maybe they haven't performed any actions on the server yet? If you believe this is an error,
                        please contact a developer right away to address this issue.
                    </div>
                @endforelse
                {{ $logs->links() }}
            </div>
        </div>
    </div>
@endsection
