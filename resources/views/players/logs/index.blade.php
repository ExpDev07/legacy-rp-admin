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
            <div class="card-category">
                @forelse ($logs as $log)
                    <div class="card-body">
                        [{{ $log->timestamp }}] [{{ $log->action }}]: {{ $log->details }}
                    </div>
                @empty
                    <div class="card-body">
                        We couldn't find any logs for this person. Maybe they haven't performed any actions on the server yet? If you believe this is an error,
                        please contact a developer right away to address this issue.
                    </div>
                @endforelse
                {{ $logs->links() }}
            </div>
        </div>
    </div>
@endsection
