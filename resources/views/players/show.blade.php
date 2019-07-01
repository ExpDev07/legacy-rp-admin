@extends('layouts.panel')

@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player', $player) }}
        </div>
    <div class="row">
        <div class="col-sm-12">
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
            <div class="card card-chart">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Name and playtime card -->
                        <div class="alert alert-success card-header-success">
                            <span class="lead">{{ $player->name }} ({{ $player->identifier  }})</span> <br/>
                            <strong>Time spent on Legacy Roleplay:</strong> {{ $player->play_time() }}
                        </div>
                    </div>
                </div>
                <!--StaffController Control Panel -->
                <div class="row p-4">
                    <div class="card-body">
                        <!-- Title -->
                       <h2><small><strong>Staff Actions</strong></small></h2>
                        <span class="lead">
                            <small>Perform staff actions related to this player.</small>
                        </span>
                        <div class="row">
                            <!-- Warnings -->
                            <div class="col-sm-3">
                                <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}"
                                   style="text-decoration: none">
                                    <button type="button" class="btn btn-warning btn-block" data-toggle="tooltip"
                                            title="View/Edit/Add Warnings to This Player" data-placement="bottom"><i
                                            class="fas fa-exclamation-triangle"></i> Warnings
                                    </button>
                                </a>
                            </div>
                            <!-- Logs -->
                            <div class="col-sm-3">
                                <a href="{{ route('players.logs.index', [ 'player' => $player ]) }}"
                                   style="text-decoration: none">
                                    <button type="button" class="btn btn-info btn-block" data-toggle="tooltip"
                                            title="View This Player's Logs" data-placement="bottom"><i
                                            class="fas fa-clipboard-list"></i> View Logs
                                    </button>
                                </a>
                            </div>
                            <!-- Ban -->
                            <div class="col-sm-3">
                                <!-- Check if player is banned -->
                            @if (is_null($player->ban))
                                <!-- They're not, display a link to ban them -->
                                    <a href="{{ route('players.ban.create', [ 'player' => $player ]) }}"
                                       style="text-decoration: none">
                                        <button type="button" class="btn btn-danger btn-block" data-toggle="tooltip"
                                                title="Ban a Player (Reason Required)" data-placement="bottom"><i
                                                class="fas fa-user-slash"></i> Ban
                                        </button>
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
            <div class="card card-body">
                <div class="row">
                    <!-- Character Card for characterOne --->
                    <div class="col-sm-3">
                        @if (!is_null($player->characterOne))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                <i class="fas fa-user-circle"></i> {{ $player->characterOne->firstname }}<br/>{{ $player->characterOne->lastname }}
                            </button>
                            <div class="characerCard mb-3" style="max-width: 540px;">
                                <div class="card-body card-text">
                                    DOB: {{ $player->characterOne->dob }}<br/> Sex: {{ $player->characterOne->gender }}
                                    <br/>
                                    Height: {{ $player->characterOne->height }}<br/>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block">No First<br/>Character</button> @endif
                    </div>
                    <!--End Character Card for characterOne -->
                    <!-- Character Card for characterTwo --->
                    <div class="col-sm-3">
                        @if (!is_null($player->characterTwo))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                {{ $player->characterTwo->firstname }}<br/>{{ $player->characterTwo->lastname }}
                                <br/></span>
                            </button>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body">
                                    DOB: {{ $player->characterTwo->dob }}<br/> Sex: {{ $player->characterTwo->gender }}
                                    <br/>
                                    Height: {{ $player->characterTwo->height }}<br/>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                Second<br/>Character
                            </button>
                        @endif
                    </div>
                    <!--End Character Card for characterTwo -->
                    <!-- Character Card for characterThree --->
                    <div class="col-sm-3">
                        @if (!is_null($player->characterThree))
                            <div class="alert alert-primary btn-lg btn-block">
                                {{ $player->characterThree->firstname }}<br/>{{ $player->characterThree->lastname }}
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body">
                                    DOB: {{ $player->characterThree->dob }}<br/>
                                    Sex: {{ $player->characterThree->gender }}
                                    <br/>
                                    Height: {{ $player->characterThree->height }}<br/>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                Third<br/>Character
                            </button>
                        @endif
                    </div>
                    <!--End Character Card for characterThree -->
                    <!-- Character Card for characterFour --->
                    <div class="col-sm-3">
                        @if (!is_null($player->characterFour))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                {{ $player->characterFour->firstname }}<br/>{{ $player->characterFour->lastname }}
                                <br/>
                            </button>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body">
                                    <span class="card-text">DOB: {{ $player->characterFour->dob }}</span><br/>
                                    <span class="card-text">Sex: {{ $player->characterFour->gender }}</span><br/>
                                    <span class="card-text">Height: {{ $player->characterFour->height }}</span><br/>
                                    </p>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                Fourth<br/>Character
                            </button>
                        @endif
                    </div>
                    <!--End Character Card for characterFour -->
                </div>


            </div>
        </div>
    </div>
@endsection
