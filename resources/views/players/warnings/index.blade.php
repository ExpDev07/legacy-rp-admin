@extends('layouts.panel')

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player-create-warning', $player) }}
    </div>

    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-warning">
                <span class="lead">
                    Creating Warning
                </span>
            </div>
            <div class="card-category">
                <form class="card mb-3" method="POST" action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
                    <div class="card-body">
                        <p>
                            To submit a warning, fill out the text-box below detailing the reasons behind this warning. If you have any evidence, remember to
                            also include that (links to screenshots, videos, etc). Other staff members will use submitted warnings as an indicator or whether
                            to ban the person. Please include as much information as possible.
                        </p>

                        @csrf
                        <textarea class="form-control mb-2" style="height: 13vw" name="message" placeholder="Reason, explanation, and available evidence."></textarea>
                        <button class="btn btn-warning" style="width: 100%">
                            Create Warning
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card card-chart mt-0">
            <div class="alert alert-primary">
                <span class="lead">
                    Total warnings: {{ $warnings->count() }}
                </span>
            </div>

            <div class="card-category">
                @forelse ($warnings as $warning)
                    <div class="card border-warning">
                        <div class="card-body">
                            <p class="card-text">{{ $warning->message }}</p>
                            <p class="text-right">posted at <strong>{{ $warning->created_at }}</strong><br/> by
                                <strong>{{ $warning->issuer->name  }}</strong></p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <strong>
                                        <a href="{{ route('warnings.show', ['warning' => $warning]) }}">
                                            View this warning
                                        </a>
                                    </strong>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card-body">
                        <span class="lead">This player has no warnings. They're doing great!</span>
                    </div>
                @endforelse {{ $warnings->links() }}
            </div>
        </div>
    </div>
@endsection
