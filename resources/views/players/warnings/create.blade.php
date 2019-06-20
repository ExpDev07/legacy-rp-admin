@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-primary" role="alert">
                        <span class="lead">
                            <center>
                                You are now creating a warning for {{ $player->name }}
                            </center>
                        </>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('players.warnings.store', [ 'player' => $player ]) }}">
                @csrf

                <div class="col-sm-10 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><b>Message</b></span>
                    </div>
                    <input class="form-control" name="message" placeholder="Combat logging: Player was being chased and then logged out.">
                </div>
                <div class="col-sm-2"><button class="btn btn-success" style="width: 100%">Create</button></div>
            </form>
        </div>
    </div>
@endsection
