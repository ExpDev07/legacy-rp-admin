@extends('layouts.panel')

@section('content')
        <div content="row">
            {{ Breadcrumbs::render('players') }}
        </div>
    <!--This section is for looking up a person-->
    <div class="row">
        <div class="col-sm-8">
            <div class="card card-chart">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-primary card-header-success">
                        <span class="lead">
                                Look up players by their <b>name</b> or <b>identifier</b>. Be as specific as possible to limit the results.
                        </span>
                        </div>
                    </div>
                </div>
                <form class="row" method="GET">
                    <div class="col-sm-12 input-group card-category p-4 mt-3">
                        <label class="input-group-text"><b>Lookup</b></label>
                        <div class="form-group bmd-form-group"></div>
                        <input class="form-control" name="query"
                               placeholder="Truckster | steam:0a1b2e3d4e5f6789">
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <button class="btn btn-success btn-block mb-3" style="width: 100%">Player Lookup</button>
                    </div>
                </form>
            </div>
            <div class="card card-chart pt-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success card-header-success mb-3">
                            <span class="lead">
                                    Results
                            </span>
                        </div>
                        <div class="card-body">
                            @forelse ($players as $player)
                                <a href="{{ route('players.show', ['player' => $player]) }}" data-toggle="tooltip" data-placement="bottom" title="Click for More Information">
                                    <div class="alert alert-primary" role="alert">
                                        {{ $player->name }} | {{ $player->identifier }}
                                    </div>
                                </a>
                            @empty
                                <h4>No players found! Try a different name or identifier.</h4>
                            @endforelse
                            {{ $players->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---Character Cards --->
        @if (!is_null($player->characterOne))
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-info lead"><i class="fas fa-address-card mr-1" style="color:white;"></i>
                            Here are the characters for the top result <i class="fas fa-chevron-right" style="color:white"></i> {{ Auth::user()->username }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        @if (!is_null($player->characterOne))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                <i class="fas fa-user-circle"></i> {{ $player->characterOne->firstname }}<br/>{{ $player->characterOne->lastname }}
                            </button>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body card-text">
                                    DOB: {{ $player->characterOne->dob }}<br/> Sex: {{ $player->characterOne->gender }}
                                    <br/>
                                    Height: {{ $player->characterOne->height }}<br/>
                                    </p>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                First<br/>Character
                            </button> @endif
                    </div>
                    <div class="col-sm-6">
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
                                    </p>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                Second<br/>Character
                            </button>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        @if (!is_null($player->characterThree))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                {{ $player->characterThree->firstname }}<br/>{{ $player->characterThree->lastname }}
                                <br/>/span>
                            </button>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body">
                                    DOB: {{ $player->characterThree->dob }}<br/>
                                    Sex: {{ $player->characterThree->gender }}
                                    <br/>
                                    Height: {{ $player->characterThree->height }}<br/>
                                    </p>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-secondary btn-lg btn-block"><i class="fas fa-user-alt-slash"></i> No
                                Third<br/>Character
                            </button>
                        @endif
                    </div>
                    <!-- Character Card for characterFour --->
                    <div class="col-sm-6">
                        @if (!is_null($player->characterFour))
                            <button role="button" type="button" class="btn btn-primary btn-lg btn-block">
                                {{ $player->characterFour->firstname }}<br/>{{ $player->characterFour->lastname }}
                                <br/><span class="glyphicon glyphicon-triangle-bottom"
                                           aria-hidden="true"></span>
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
        @endif
    </div>

    </div>
@endsection
