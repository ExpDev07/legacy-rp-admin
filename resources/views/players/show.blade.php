@extends('layouts.app')

@section('content')
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
                    <span class="lead pb-2"><span class="text-primary">{{ Auth::user()->username }}</span> you are currently administrating the user: <span
                            class="text-success">{{ $player->name }}</span></span>

                    <div class="row">
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commendationLookup" type="button"
                                    class="btn btn-success btn-block">Lookup Commendations
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#warningLookup" type="button "
                                    class="btn btn-warning btn-block">Lookup Warnings
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#banLookup" type="button "
                                    class="btn btn-danger btn-block">Lookup Previous Bans and Appeals
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commentLookup" type="button "
                                    class="btn btn-secondary btn-block">Lookup Comment
                            </button>
                        </div>
                        <div class="col-sm-12 p-3">
                            <button data-toggle="collapse" href="#allLookup" type="button "
                                    class="btn btn-success btn-block">Lookup All
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commendationSubmit" type="button"
                                    class="btn btn-outline-success btn-block">Submit Commendation
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#warningSubmit" type="button"
                                    class="btn btn-outline-warning btn-block">Submit Warning
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#banSubmit" type="button"
                                    class="btn btn-outline-danger btn-block">Submit Ban
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#commentSubmit" type="button"
                                    class="btn btn-outline-secondary btn-block muted">Subbmit Comment
                            </button>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button data-toggle="collapse" href="#appealSubmit" type="button"
                                    class="btn btn-outline-info btn-block mt-3">Submit Appeal
                            </button>
                        </div>
                        <div class="col-sm-3"></div>


                    </div>
                </div>
                <!---Commendation Submission Drop Box -->
                <div class="collapse col-sm-12 card card-body mb-4 pb-4" id="commendationSubmit">
                    <div align="right">
                        <button data-toggle="collapse" href="#commendationSubmit" type="button"
                                class="btn btn-outline-secondary btn-sm mb-3">close window
                        </button>
                    </div>
                    <h4 class="display-4 text-success">Submit Commendation</h4>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Staff Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}"
                               readonly="readonly" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description of Commendation"></textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <!---End Comendation Box -->
                <!---Warning Submission Box Drop Box -->
                <div class="collapse col-sm-12 card card-body mb-4 pb-4" id="warningSubmit">
                    <div align="right">
                        <button data-toggle="collapse" href="#warningSubmit" type="button"
                                class="btn btn-outline-secondary btn-sm mb-3">close window
                        </button>
                    </div>
                    <h4 class="display-4 text-warning">Submit Warning</h4>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Staff Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}"
                               readonly="readonly" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description of Warning"></textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <!-- End Warning submission Drop Box -->
                <!-- Begin Ban Pulldown Section -->
                <div class="collapse col-sm-12 card card-body mb-4 pb-4" id="banSubmit">
                    <div align="right">
                        <button data-toggle="collapse" href="#banSubmit" type="button"
                                class="btn btn-outline-secondary btn-sm mb-3">close window
                        </button>
                    </div>
                    <h4 class="display-4 text-danger">Submit Ban</h4>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Staff Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}"
                               readonly="readonly" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description of Ban"></textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <!--- End Ban Pulldown Section-->
                <!-- Begin Appeal Pulldown Section -->
                <div class="collapse col-sm-12 card card-body mb-4 pb-4" id="appealSubmit">
                    <div align="right">
                        <button data-toggle="collapse" href="#appealSubmit" type="button"
                                class="btn btn-outline-secondary btn-sm mb-3">close window
                        </button>
                    </div>
                    <h4 class="display-4 text-info">Submit Appeal</h4>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Staff Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}"
                               readonly="readonly" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description of Appeal"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">URL of Appeal</span>
                        </div>
                        <input type="text" class="form-control m-2" aria-label="Sizing example input"
                               aria-describedby="URL of the Ban Appeal"
                               placeholder="https://legacyroleplay.online/c/applications/ban-appeals">
                    </div>
                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <!-- End appeal pulldown section -->
                <!-- Begin  Comment Section -->
                <div class="collapse col-sm-12 card card-body mb-4 pb-4" id="commentSubmit">
                    <div align="right">
                        <button data-toggle="collapse" href="#commentSubmit" type="button"
                                class="btn btn-outline-secondary btn-sm mb-3">close window
                        </button>
                    </div>
                    <h4 class="display-4 text-secondary">Submit Comment</h4>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Staff Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->username }}"
                               readonly="readonly" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description of Comment"></textarea>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-success">Submit</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button btn-block" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
                <!--- End Ban Pulldown Section-->
                <div class="collapse" id="commendationLookup">
                    <div class="alert alert-light" role="alert">
                        <div align="right">
                            <button data-toggle="collapse" href="#commendationLookup" type="button"
                                    class="btn btn-outline-secondary btn-sm mb-3">close window
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
                            <button data-toggle="collapse" href="#warningLookup" type="button"
                                    class="btn btn-outline-secondary btn-sm mb-3">close window
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
                            <button data-toggle="collapse" href="#banLookup" type="button"
                                    class="btn btn-outline-secondary btn-sm mb-3">close window
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
                            <button data-toggle="collapse" href="#commentLookup" type="button"
                                    class="btn btn-outline-secondary btn-sm mb-3">close window
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
                            <button data-toggle="collapse" href="#allLookup" type="button"
                                    class="btn btn-outline-secondary btn-sm mb-3">close window
                            </button>
                        </div>
                        <li><span class="text-success"><strong>COMMENDATION | 03/05/2019 | by jackmcjack |</strong> for helping new players</span>
                        </li>
                        <li><span
                                class="text-warning"><strong>WARNING | 02/04/2019 | by Blanket |</strong> for fearrp</span>
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
            <div class="col-sm-4">
                @if (!is_null($player->characterOne))
                    <button data-toggle="collapse" href="#charOne" role="button" aria-expanded="false"
                            type="button"
                            class="btn btn-primary btn-lg btn-block">{{ $player->characterOne->firstname }} {{ $player->characterOne->lastname }}<br/><span class="glyphicon glyphicon-triangle-bottom"
                                                                        aria-hidden="true"></span>
                    </button>
                    <!-- End Display of $player->characterOne button --->
                @else
                    <!-- Else Display this button for "No First Character Found"-->
                    <button class="btn btn-secondary btn-lg btn-block">No First Character</button>
                @endif
            </div>
        </div>
    </div>
@endsection
