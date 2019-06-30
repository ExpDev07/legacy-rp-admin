@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-sm-9">
            <div content="row">
                {{ Breadcrumbs::render('player-create-warning', $player) }}
            </div>
            <div class="alert alert-primary">
                <center>
                    Viewing warnings for
                    <a href="{{ route('players.show', [ 'player' => $player ]) }}" data-toggle="tooltip"
                       title="Back to Player Profile" data-placement="bottom">
                        {{ $player->name }}
                    </a>
                </center>
                Total warnings: {{ $warnings->total() }}
            </div>
            <div class="card card-chart">
                <div class="alert alert-primary card-header-warning">
                    <center>
                <span class="lead">Creating Warning for | <a href="{{ route('players.show', [ 'player' => $player ]) }}"
                                                             data-toggle="tooltip" title="Back to Player Profile"
                                                             data-placement="bottom">{{ $player->name }}</span>
                        </a></span>
                    </center>
                </div>
                <div class="card-category">
                    <form class="card mb-3" method="POST"
                          action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
                        <div class="card-body">
                            @csrf
                            <textarea class="form-control mb-2" style="height: 13vw" name="message"
                                      placeholder="Reason, explanation, and available evidence."></textarea>
                            <button class="btn btn-warning" style="width: 100%" data-toggle="tooltip"
                                    title="Finish and Confirm Warning (were you detailed enough?)"
                                    data-placement="bottom">
                                Create Warning
                            </button>
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
                                        <strong><a href="{{ route('warnings.show', ['warning' => $warning]) }}">View
                                                this
                                                warning</a></strong>
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
            </div>
        </div>
    </div>

@endsection
