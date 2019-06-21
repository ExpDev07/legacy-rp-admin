@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-secondary lead">
            <a href="{{ route('players.warnings.index', [ 'player' => $warning->player]) }}"><strong>Return to warnings</strong></a>
        </div>
        <div class="card border-warning mb-3">
            <div class="card-header lead">
                Viewing Warning for
                <a href="{{ route('players.show', [ 'player' => $warning->player ])  }}">
                    <span class="text-success">{{ $warning->player->name }}</span>
                    (<span class="text-success">{{ $warning->player->identifier }}</span>)
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
