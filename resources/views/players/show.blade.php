@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Name and playtime card -->
                <div class="alert alert-primary">
                    <span class="lead">{{ $player->name }} ({{ $player->identifier  }})</span> <br/>
                    <strong>Time spent on Legacy Roleplay:</strong> {{ $player->play_time() }}
                </div>
            </div>
            <div class="col-sm-12">
                <!-- Check if player is banned -->
                @if (!is_null($player->ban))
                    <div class="alert alert-danger" role="alert">
                        <span class="lead">
                            <!-- Display the ban id (can be given to Ben) -->
                            [{{ $player->ban->{'ban-id'} }}]

                            <!-- Create the rest of ban information -->
                            This player is banned by
                            @if (is_null($player->ban->issuer))
                                <!-- Use the banner-id as we didn't find any player associated with it -->
                                {{ $player->ban->{'banner-id'} }}
                            @else
                                <!-- Use the name of the issuer -->
                                {{ $player->ban->issuer->name }}
                            @endif
                            <!-- Give the reason -->
                            for: {{ $player->ban->reason }}
                        </span>
                    </div>
                @endif
            </div>
        </div>
        <!--Staff Control Panel -->
        <div class="row">
            <div class="col-sm-12">
                <div class="alert card card-body border-info" role="alert">
                    <!-- Title -->
                    <h5><strong>Staff Actions</strong></h5>
                    <p>
                        Perform staff actions related to this player.
                    </p>

                    <div class="row">
                        <!-- Warnings -->
                        <div class="col-sm-3">
                            <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}" style="text-decoration: none">
                                <button type="button" class="btn btn-warning btn-block">Warnings</button>
                            </a>
                        </div>
                        <!-- Logs -->
                        <div class="col-sm-3">
                            <a href="{{ route('players.logs.index', [ 'player' => $player ]) }}" style="text-decoration: none">
                                <button type="button" class="btn btn-info btn-block">View Logs</button>
                            </a>
                        </div>
                        <!-- Ban -->
                        <div class="col-sm-3">
                            <!-- Check if player is banned -->
                            @if (is_null($player->ban))
                                <!-- They're not, display a link to ban them -->
                                <a href="{{ route('players.ban.create', [ 'player' => $player ]) }}" style="text-decoration: none">
                                    <button type="button" class="btn btn-danger btn-block">Ban</button>
                                </a>
                            @else
                                <!-- They are, display the form to unban them -->
                                <form method="POST" action="{{ route('bans.destroy', [ 'ban' => $player->ban ]) }}">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-success btn-block">Unban</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---END STAFF ONLY SECTION!!!! ------->
        <div class="row">
            <!-- Character Card for characterOne --->
            <div class="col-sm-3">
                @if (!is_null($player->characterOne))
                    <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                        {{ $player->characterOne->firstname }} {{ $player->characterOne->lastname }}
                        <br/><span class="glyphicon glyphicon glyphicon-user"
                                   aria-hidden="true"></span>
                    </button>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="card-body card-text">
                            DOB: {{ $player->characterOne->dob }}<br/> Sex: {{ $player->characterOne->gender }}<br/> Height: {{ $player->characterOne->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charOneBackstory" role="button" aria-expanded="false" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                            class="glyphicon glyphicon-list-alt"
                                            aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No First Character</button> @endif
            </div>
            <!--End Character Card for characterOne -->
            <!-- Character Card for characterTwo --->
            <div class="col-sm-3">
                @if (!is_null($player->characterTwo))
                    <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                        {{ $player->characterTwo->firstname }} {{ $player->characterTwo->lastname }}
                        <br/><span class="glyphicon glyphicon glyphicon-user"
                                   aria-hidden="true"></span>
                    </button>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="card-body">
                            DOB: {{ $player->characterTwo->dob }}<br/> Sex: {{ $player->characterTwo->gender }}<br/> Height: {{ $player->characterTwo->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charTwoBackstory" role="button" aria-expanded="false" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                            class="glyphicon glyphicon-list-alt"
                                            aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Second Character</button>
                @endif
            </div>
            <!--End Character Card for characterTwo -->
            <!-- Character Card for characterThree --->
            <div class="col-sm-3">
                @if (!is_null($player->characterThree))
                    <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                        {{ $player->characterThree->firstname }} {{ $player->characterThree->lastname }}
                        <br/><span class="glyphicon glyphicon glyphicon-user"
                                   aria-hidden="true"></span>
                    </button>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="card-body">
                            DOB: {{ $player->characterThree->dob }}<br/> Sex: {{ $player->characterThree->gender }}<br/> Height: {{ $player->characterThree->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charThreeBackstory" role="button" aria-expanded="false" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                            class="glyphicon glyphicon-list-alt"
                                            aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Third Character</button>
                @endif
            </div>
            <!--End Character Card for characterThree -->
            <!-- Character Card for characterFour --->
            <div class="col-sm-3">
                @if (!is_null($player->characterFour))
                    <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                        {{ $player->characterFour->firstname }} {{ $player->characterFour->lastname }}
                        <br/><span class="glyphicon glyphicon-triangle-bottom"
                                   aria-hidden="true"></span>
                    </button>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="card-body">
                            <span class="card-text">DOB: {{ $player->characterFour->dob }}</span><br/>
                            <span class="card-text">Sex: {{ $player->characterFour->gender }}</span><br/>
                            <span class="card-text">Height: {{ $player->characterFour->height }}</span><br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charFourBackstory" role="button" aria-expanded="false" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                            class="glyphicon glyphicon-list-alt"
                                            aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Fourth Character</button>
                @endif
            </div>
            <!--End Character Card for characterFour -->
        </div>
    </div>
@endsection
