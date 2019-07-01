@extends('layouts.panel')

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player-view-warning', $warning) }}
    </div>

    <div class="row">
        <div class="card card-chart">
            <div class="alert alert-primary card-header-warning">
                <span class="lead">
                    Viewing warning | issued by {{ $warning->issuer->name }}
                </span>
            </div>
            <div class="card-category">
                <div class="card-body">
                    <p class="card-text">{{ $warning->message }}</p>
                    <div class="row">
                        <div class="col-sm-3">
                            <a href=""{{ route('warnings.edit', [ 'player' => $warning->player]) }}><strong>Edit</strong></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#"><strong>Delete</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
