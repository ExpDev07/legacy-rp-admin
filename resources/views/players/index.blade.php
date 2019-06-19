@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This section is for looking up a person-->
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <h5>
                            <center>
                                Look up players by their <b>name</b> or <b>identifier</b>. Be as specific as possible to limit the results.
                            </center>
                        </h5>
                    </div>
                </div>
            </div>
            <form class="row" method="GET">
                <div class="col-sm-10 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><b>Lookup</b></span>
                    </div>
                    <input class="form-control" name="query" placeholder="Truckster | steam:0a1b2e3d4e5f6789">
                </div>
                <div class="col-sm-2"><button class="btn btn-success" style="width: 100%">Player Lookup</button></div>
            </form>
        </div>
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    @forelse ($players as $player)
                        <div class="alert alert-warning" role="alert">
                            <a href="{{route('players.show', ['player' => $player])}}">{{ $player->name }} | {{ $player->id }}</a>
                        </div>
                    @empty
                        <h4>No players found! Try a different name or identifier.</h4>
                    @endforelse
                    {{ $players->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
