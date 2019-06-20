@extends('layouts.app') @section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-primary" role="alert">
                    <span class="lead">{{ $player->name }}</span> <br/>
                    <span class="lead">{{ $player->playtime }} minutes played on LegacyRP</span>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="alert alert-danger" role="alert">
                    <span class="lead">This player is banned for RDM</span>
                </div>
            </div>
        </div>
        <!--Truckster I need you to code a global boolean for $isStaff so we can make this Staff section conditional for staff members only. -->
        <!--Staff Control Panel -->
        <div class="row">
            <div class="col-sm-12">
                <div class="alert card card-body mb-3 border-info" role="alert">
                    <h5><strong>Staff Control Panel</strong></h5>
                    <span class="lead"><span class="text-primary">{{ Auth::user()->username }}</span> you are currently administrating the user <span class="glyphicon glyphicon-chevron-down"></span></span>
                    <span class="lead text-success pb-2">{{ $player->name }} | {{ $player->identifier }}</span>
                    <div class="row">
                        <!--Lookup Commendation Button -->
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commendationLookup" type="button" class="btn btn-success btn-block">Lookup Commendations</button>
                        </div>
                        <!--Lookup Warnings Button -->
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#warningLookup" type="button " class="btn btn-warning btn-block">Lookup Warnings</button>
                        </div>
                        <!--Lookup Bans and Appeals Button -->
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#banLookup" type="button " class="btn btn-danger btn-block">Lookup Previous Bans and Appeals</button>
                        </div>
                        <!--Lookup Staff Comments Button -->
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commentLookup" type="button " class="btn btn-secondary btn-block">Lookup Comment</button>
                        </div>
                        <!--Lookup Everything Button -->
                        <div class="col-sm-12 p-3">
                            <button data-toggle="collapse" href="#allLookup" type="button " class="btn btn-success btn-block">Lookup Everything</button>
                        </div>
                        <div class="col-sm-3">
                            <!--Submit Commendation Button -->
                            <a href="./comments/" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-success btn-block">Submit
                                    Commendation
                                </button>
                            </a>
                        </div>
                        <!--Submit Warning Button -->
                        <div class="col-sm-3">
                            <a href="./warnings/" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-warning btn-block">Submit
                                    Warning
                                </button>
                            </a>
                        </div>
                        <!--Submit Ban Button -->
                        <div class="col-sm-3">
                            <a href="./bans/" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-danger btn-block">Submit
                                    Ban
                                </button>
                            </a>
                        </div>
                        <!--Submit Comment Button -->
                        <div class="col-sm-3">
                            <a href="./comments/" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-secondary btn-block muted">
                                    Submit Comment
                                </button>
                            </a>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3"></div>
                        <!--Submit Appeal Button -->
                        <div class="col-sm-3 pt-3">
                            <a href="./appeals/" style="text-decoration: none;">
                                <button type="button" class="btn btn-outline-info btn-block">
                                    Submit Appeal
                                </button>
                            </a>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <div class="collapse" id="commendationLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#commendationLookup" type="button" class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <ul>
                            <span class="text-success"><li><strong>COMMENDATION | 03/05/2019 | by jackmcjack |</strong> for helping new players</li></span>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="warningLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#warningLookup" type="button" class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <ul>
                            <span class="text-warning"><li><strong>WARNING | 02/04/2019 | by Blanket |</strong> for fear rp </li></span>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="banLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#banLookup" type="button" class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <ul>
                            <span class="text-danger"><li><strong>BAN | 03/10/2019 | by Emily Kate |</strong> for mass RDM with a vehicle</li></span>
                            <span class="text-info"><li><strong>APPEAL| 03/15/2019 | by EMILY KATE | it was an accident, he simply lost control of the car, he had video footage.</strong></li></span>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="commentLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#commentLookup" type="button" class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <ul>
                            <span class="text-secondary"><li><strong>COMMENT | 04/20/2019 | by Emily Kate |</strong> Post ban appeal comment - has been role playing well and been well received by the community</li></span>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="allLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#allLookup" type="button" class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <li><span class="text-success"><strong>COMMENDATION | 03/05/2019 | by jackmcjack |</strong> for helping new players</span>
                        </li>
                        <li><span class="text-warning"><strong>WARNING | 02/04/2019 | by Blanket |</strong> for fearrp</span>
                        </li>
                        <li><span class="text-danger"><strong>BAN | 03/10/2019 | by Emily Kate |</strong> for mass rdm with a vehicle</span>
                        </li>
                        <li><span class="text-info"><strong>APPEAL| 03/15/2019 | by EMILY KATE | it was an accident, he simply lost control of the car, he had video footage.</strong></span>
                        </li>
                        <li><span class="text-secondary"><strong>COMMENT | 04/20/2019 | by Emily Kate |</strong> Post ban appeal comment - has been role playing well and been well received by the community</span>
                        </li>
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
                            DOB: {{ $player->characterOne->dob }}<br/>
                            Sex: {{ $player->characterOne->gender }}<br/>
                            Height: {{ $player->characterOne->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charOneBackstory" role="button" aria-expanded="false" aria-control="charOnebackstory" type="button" class="btn btn-secondary btn-sm">Read Back Story
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
                            DOB: {{ $player->characterTwo->dob }}<br/>
                            Sex: {{ $player->characterTwo->gender }}<br/>
                            Height: {{ $player->characterTwo->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charOneBackstory" role="button" aria-expanded="false" aria-control="charOnebackstory" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                                class="glyphicon glyphicon-list-alt"
                                                aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Second Character</button> @endif
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
                            DOB: {{ $player->characterThree->dob }}<br/>
                            Sex: {{ $player->characterThree->gender }}<br/>
                            Height: {{ $player->characterThree->height }}<br/>
                            <center><br/>
                                <p> <button data-toggle="collapse" href="#charOneBackstory" role="button" aria-expanded="false" aria-control="charOnebackstory" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                                class="glyphicon glyphicon-list-alt"
                                                aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Third Character</button> @endif
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
                                <p> <button data-toggle="collapse" href="#charOneBackstory" role="button" aria-expanded="false" aria-control="charOnebackstory" type="button" class="btn btn-secondary btn-sm">Read Back Story
                                        <span
                                                class="glyphicon glyphicon-list-alt"
                                                aria-hidden="true"></span></button>
                            </center>
                            </p>
                        </div>
                    </div>
                @else
                    <button class="btn btn-secondary btn-lg btn-block">No Fourth Character</button> @endif
            </div>
            <!--End Character Card for characterFour -->
            <div class="col-sm-12 py-3">
                <div class="collapse" id="charOneBackstory">
                    <div class="bg-light rounded-lg py-3 pl-3">
                        <div align="right">
                            <button data-toggle="collapse" href="#charOneBackstory" type="button" class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <h5>The Backstory of {{ $player->characterOne->firstname }} {{$player->characterOne->lastname }}</h5>
                        <p>{{ $player->characterOne->story }}</p>
                        <div align="right">
                            <!---This button here is important if the steam owner is logged and owns these characters, then how about a wysiwyg form to allow them to edit in great detail their backstories? --->
                            <button type="button" class="btn btn-primary my-3 mr-2">Edit Backstory</button>
                            <!--- ^^^^^^^ This Button ^^^^^^^^  it is available in all three profiles ---->
                            <br/>
                            <span class="text-success pr-2">It looks like you own this account, you can edit this character backstory.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 py-3">
                <div class="collapse" id="charTwoBackstory">
                    <div class="bg-light rounded-lg py-3 pl-3">
                        <div align="right">
                            <button data-toggle="collapse" href="#charTwoBackstory" type="button" class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <h5>The Backstory of { $player->characterTwo->firstname } { $player->characterTwo->lastname }
                        </h5>
                        <p>{ $player->characterTwo->story }</p>
                        <!---If the steam account logged in owns the characters - then allow them to edit the backstories. -->
                        <div align="right">
                            <button type="button" class="btn btn-primary my-3 mr-2">Edit Backstory</button>
                            <br/>
                            <span class="text-success pr-2">It looks like you own this account, you can edit this character backstory.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 py-3">
                <div class="collapse" id="charThreeBackstory">
                    <div class="bg-light rounded-lg py-3 pl-3">
                        <div align="right">
                            <button data-toggle="collapse" href="#charThreeBackstory" type="button" class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <h5>The Backstory of { $player->characterThree->firstname } { $player->characterThree->lastname }
                        </h5>
                        <p>{ $player->characterThree->story }</p>
                        <!---If the steam account logged in owns the characters - then allow them to edit the backstories. -->
                        <div align="right">
                            <button type="button" class="btn btn-primary my-3 mr-2">Edit Backstory</button>
                            <br/>
                            <span class="text-success pr-2">It looks like you own this account, you can edit this character backstory.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection