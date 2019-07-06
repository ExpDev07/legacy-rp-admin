@extends('layouts.panel')
@section('navigation')
    <ul class="nav">
        <li class="nav-item {{ (request()->is('players')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.index') }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-address-book"></i>
                    <small>PLAYER INDEX</small>
                </p>
            </a>
        </li>
        <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                <i class="fas fa-chart-network"></i>
                <p><i class="fas fa-user-circle"></i>
                    <small>MY PLAYER DASHBOARD</small>
                </p>
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div content="row">
        {{ Breadcrumbs::render('player', $player) }}
    </div>
    <div class="row">
        <!-- Check if player is banned -->
        @if ($player->is_banned())
            <div class="card card-chart">
                <div class="alert alert-danger mb-0" role="alert">
                    <span class="lead">
                        <!-- Display the ban id (can be given to Ben) -->
                        [{{ $player->bans()->first()->{'ban-id'} }}]

                        <!-- Create the rest of ban information -->
                        This player is currently banned by
                        @if (is_null($player->bans()->first()->issuer))
                        <!-- Use the banner-id as we didn't find any player associated with it -->
                            {{ $player->bans()->first()->{'banner-id'} }}
                        @else
                        <!-- Use the name of the issuer -->
                            {{ $player->bans()->first()->issuer->name }}
                        @endif
                    <!-- Give the reason -->
                        for: {{ $player->bans()->first()->reason }}
                    </span>
                </div>
            </div>
        @endif

        <div class="card card-chart">
            <!-- Name and playtime card -->
            <div class="alert alert-success card-header-success">
                <!-- Show the name and the identifier -->
                <span class="lead mb-2">
                    {{ $player->name }} ({{ $player->identifier  }})
                </span>

                <!-- Display how much time they've spent on legacy roleplay -->
                <strong>Time spent on Legacy Roleplay:</strong> {{ $player->play_time() }}.
            </div>

            <!--StaffController Control Panel -->
            <div class="card-body">
                <!-- Title -->
                <h3><strong>Staff Actions</strong></h3>
                <span class="lead">
                    <small>Perform staff actions related to this player.</small>
                </span>
                <div class="row mt-3">
                    <!-- Steam Profile -->
                    @if (!is_null($player->steam_profile()))
                        <div class="col-sm-3">
                            <a href="{{ $player->steam_profile() }}">
                                <button type="button" class="btn btn-success btn-block">
                                    <i class="fas fa-address-card"></i> Visit Steam Profile
                                </button>
                            </a>
                        </div>
                @endif
                <!-- Warnings -->
                    <div class="col-sm-3">
                        <a href="{{ route('players.warnings.index', [ 'player' => $player ]) }}">
                            <button type="button" class="btn btn-warning btn-block">
                                <i class="fas fa-exclamation-triangle"></i> Warnings
                            </button>
                        </a>
                    </div>
                    <!-- Logs -->
                    <div class="col-sm-3">
                        <a href="{{ route('players.logs.index', [ 'player' => $player ]) }}">
                            <button type="button" class="btn btn-info btn-block">
                                <i class="fas fa-clipboard-list"></i> View Logs
                            </button>
                        </a>
                    </div>
                    <!-- Ban -->
                    <div class="col-sm-3">
                        <!-- Check if player is banned -->
                    @if ($player->bans()->count() > 0)
                        <!-- They are, display the form to unban them -->
                            <form method="POST"
                                  action="{{ route('players.ban.destroy', [ 'player' => $player, 'ban' => 0 ]) }}">
                                @csrf @method('DELETE')
                                <button class="btn btn-success btn-block">
                                    <i class="fas fa-minus-circle"></i> Unban
                                </button>
                            </form>
                    @else
                        <!-- They're not, display a link to ban them -->
                            <a href="{{ route('players.ban.create', [ 'player' => $player ]) }}">
                                <button type="button" class="btn btn-danger btn-block">
                                    <i class="fas fa-user-slash"></i> Ban User
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!---END STAFF ONLY SECTION!!!! ------->

        <div class="card card-body">
            <div class="row">
                <!-- Character Card for character_one --->
                <div class="col-sm-3">
                    @if (!is_null($player->character_one))
                        <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                            <i class="fas fa-user-circle"></i>
                            {{ $player->character_one->firstname }}<br/>{{ $player->character_one->lastname }}
                        </button>
                        <div class="characerCard mb-3" style="max-width: 540px;">
                            <div class="card-body card-text">
                                DOB: {{ $player->character_one->dob }}
                                <br/>
                                Sex: {{ $player->character_one->gender }}
                                <br/>
                                Height: {{ $player->character_one->height }}<br/>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-secondary btn-lg btn-block">
                            <i class="fas fa-user-alt-slash"></i> No First Character
                        </button>
                    @endif
                </div>
                <!--End Character Card for character_one -->
                <!-- Character Card for character_two --->
                <div class="col-sm-3">
                    @if (!is_null($player->character_two))
                        <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                            <i class="fas fa-user-circle"></i>
                            {{ $player->character_two->firstname }} <br/> {{ $player->character_two->lastname }}
                        </button>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="card-body">
                                DOB: {{ $player->character_two->dob }}
                                <br/>
                                Sex: {{ $player->character_two->gender }}
                                <br/>
                                Height: {{ $player->character_two->height }}<br/>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-secondary btn-lg btn-block">
                            <i class="fas fa-user-alt-slash"></i> No Second Character
                        </button>
                    @endif
                </div>
                <!--End Character Card for character_two -->
                <!-- Character Card for character_three --->
                <div class="col-sm-3">
                    @if (!is_null($player->character_three))
                        <div class="alert alert-primary btn-lg btn-block">
                            <i class="fas fa-user-circle"></i>
                            {{ $player->character_three->firstname }}
                            <br/> {{ $player->character_three->lastname }}
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="card-body">
                                DOB: {{ $player->character_three->dob }}
                                <br/>
                                Sex: {{ $player->character_three->gender }}
                                <br/>
                                Height: {{ $player->character_three->height }}<br/>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-secondary btn-lg btn-block">
                            <i class="fas fa-user-alt-slash"></i> No Third Character
                        </button>
                    @endif
                </div>
                <!--End Character Card for character_three -->
                <!-- Character Card for character_four --->
                <div class="col-sm-3">
                    @if (!is_null($player->character_four))
                        <div class="alert alert-primary btn-lg btn-block">
                            <i class="fas fa-user-circle"></i>
                            {{ $player->character_four->firstname }}
                            <br/> {{ $player->character_four->lastname }}
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="card-body">
                                DOB: {{ $player->character_four->dob }}
                                <br/>
                                Sex: {{ $player->character_four->gender }}
                                <br/>
                                Height: {{ $player->character_four->height }}<br/>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-secondary btn-lg btn-block">
                            <i class="fas fa-user-alt-slash"></i> No Fourth Character
                        </button>
                    @endif
                </div>
                <!--End Character Card for character_four -->
            </div>
        </div>
    </div>
@endsection
