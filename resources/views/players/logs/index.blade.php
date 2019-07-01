@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div content="row">
                {{ Breadcrumbs::render('player-view-logs', $player) }}
            </div>
            <div class="card card-chart">
                <div class="alert alert-primary card-header-success">
                    <center>
                <span class="lead">Viewing logs for <a href="{{ route('players.show', [ 'player' => $player ]) }}"
                                                       data-toggle="tooltip" title="Back to Player Profile"
                                                       data-placement="bottom">{{ $player->name }}</span>
                        </a></span>
                    </center>
                </div>
                <div class="card-category">
                    @forelse ($logs as $log)
                        <div class=" mb-2">
                            <div class="card-body">
                                [{{ $log->timestamp }}] [ {{ $log->action }} ]: {{ $log->details }}
                            </div>
                        </div>
                    @empty

                    @endforelse
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
