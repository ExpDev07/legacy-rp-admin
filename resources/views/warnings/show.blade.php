@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Breadcrumbs::render('player-view-warning', $warning) }}
        <div class="card border-warning mb-3 ">
            <div class="card-header lead">
                Viewing warning for
                <a href="{{ route('players.show', [ 'player' => $warning->player ])  }}">
                    <span class="text-success">{{ $warning->player->name }}</span>
                </a>
                |
                Issued by <span class="text-success">{{ $warning->issuer->name }}</span>
            </div>
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
@endsection
