@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This is the header text-->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="col-sm-7 alert alert-secondary"><span><a href="{{ route('players.warnings.create', [ 'player' => $warning->player ]) }}"><strong>Create new warning</strong></a> | <a href="{{route('players.show', ['player' => $warning->player])}}"><strong>Return to player profile</strong></a> | <a href="{{ route('players.warnings.index', [ 'player' => $warning->player]) }}"><strong>Return to Warnings</strong></a></div>
                <div class="card border-warning mb-3">
                    <div class="card-header">
                        Viewing Warning for <span class="text-success">{{ $warning->player->name }}</span> | <span class="text-success">{{ $warning->player->identifier }}</span>
                        |
                        Issued by <span class="text-success">{{ $warning->issuer->name }}</span>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $warning->message }}</p>
                        <div class="row">
                            <div class="col-sm-3">
                                <a href=""{{ route('warnings.edit', [ 'player' => $warning->player]) }}><strong>Edit This Warning</strong></a>
                            </div>
                            <div class="col-sm-3">
                                <a href="#"><strong>Delete This Warning</strong></a><br/>
                                <span style="font-size: 12px;">(Only Admins can delete warnings)</span>
                            </div>
                            <div class="col-sm-3">
                                <a href="#"><strong>Comment on This Warning</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
