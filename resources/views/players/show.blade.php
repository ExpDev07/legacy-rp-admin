@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="alert alert-danger" role="alert">
                    This is if ($player->banned) == true
                    <h4>{{ $player->name }}</h4>
                    <h3>BANNED</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="alert alert-primary" role="alert">
                    This is if ($player->banned) != true
                    <h4>{{ $player->name }}</h4>
                    <!--Is this playtime in minutes???? -->
                    <h4>{{ $player->playtime }}</h4> <span class="muted">minutes played on LegacyRP</span>
                </div>
            </div>
            <!--Truckster I need you to code a global boolean for $isStaff so we can make this Staff section conditional for staff members only. -->
            <div class="col-sm-8">
                <div class="alert card card-body mb-3 border-info" role="alert" ?>
                    <h5 class="display-4 "><strong>Staff Control Panel</strong></h5>
                    <H4>Hello</H4>
                    <h5>{{ Auth::user()->username }}</h5>
                    <ul>
                        <!---Is it possible for staff to see their staff points displayed here? Shown from each server on a simple foreach loop? --->
                        <li>You currently have { Auth::user()->username->isStaff->serverOneStaffPoints } (foreach
                            loop)
                        </li>
                    </ul>
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
                                    class="btn btn-secondary btn-block">Submit Comment
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
                            <button data-toggle="collapse" href="#appealSubmit" type="button"
                                    class="btn btn-outline-secondary btn-block muted">Subbmit Appeal
                            </button>
                        </div>
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
                        <input type="text" class="form-control m-2" aria-label="Sizing example input" aria-describedby="URL of the Ban Appeal" placeholder="https://legacyroleplay.online/c/applications/ban-appeals">
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
            <!---END STAFF ONLY SECTION!!!! ------->
        </div>
        <div class="row">
            <div class="col-sm-4">
                <!--If the if $player->characterOne is found then display this button. -->
                <button data-toggle="collapse" href="#charOne" role="button" aria-expanded="false"
                        aria-controls="{ $player->characterOne->firstname }_{ $player->characterOne->lastname }"
                        type="button"
                        class="btn btn-primary btn-lg btn-block">{ $player->characterOne->firstname }<br/>
                    { $player->characterOne->lastname }<br/><span class="glyphicon glyphicon-triangle-bottom"
                                                                  aria-hidden="true"></span>
                </button>
                <!-- End Display of $player->characterOne button --->
                <!-- Else Display this button for "No First Character Found"-->
                <button class="btn btn-secondary btn-lg btn-block">No First Character</button>
                <!-- End If for character. All of this for this next block is for the rest of character one. Look for character two. --->
                <div class="collapse" id="charOne">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{ $player->characterOne->firstname } <br>
                                        { $player->characterOne->lastname} </h5>
                                    <span class="card-text">DOB: { $player->characterOne->dob } Sex: [ $player->characterOne->gender }</span><br/>
                                    <span class="card-text">Age: [ $player->characterOne->age } HGT: [ $player->characterOne->height }</span><br/>
                                    <center><br/>
                                        <p>
                                            <button data-toggle="collapse" href="#charOneBackstory" role="button"
                                                    aria-expanded="false"
                                                    aria-control="charOnebackstory"
                                                    type="button" class="btn btn-secondary btn-sm">Read Back Story
                                                <span
                                                    class="glyphicon glyphicon-triangle-bottom"
                                                    aria-hidden="true"></span></button>
                                    </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---Here is Character Two!!!
            <!---If $player->characterTwo is Found Display this button to show the character card. -->
            <div class="col-sm-4">
                <button data-toggle="collapse" href="#charTwo" role="button" aria-expanded="false"
                        aria-controls="{ $player->characterTwo->firstname } { $player->characterTwo->lastname }"
                        type="button"
                        class="btn btn-primary btn-lg btn-block">{ $player->characterTwo->firstname }<br/>
                    { $player->characterTwo->lastname }<br/><span class="glyphicon glyphicon-triangle-bottom"
                                                                  aria-hidden="true"></span>
                </button>
                <!-- End the button block of code-->
                <!-- Otherwise show this button to say "No Secondary character found" -->
                <button class="btn btn-secondary btn-lg btn-block">No Secondary Character</button>
                <!-- Ignore this block of code for the time being. Move to character Three. --->
                <div class="collapse" id="charTwo">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{ $player->characterTwo->firstname } <br>
                                        { $player->characterTwo->lastname} </h5>
                                    <span class="card-text">DOB: { $player->characterTwo->dob } Sex: [ $player->characterTwo->gender }</span><br/>
                                    <span class="card-text">Age: [ $player->characterTwo->age } HGT: [ $player->characterTwo->height }</span><br/>
                                    <center><br/>
                                        <p>
                                            <button data-toggle="collapse" href="#charTwoBackstory" role="button"
                                                    aria-expanded="false"
                                                    aria-control="#charTwoBackstory"
                                                    type="button" class="btn btn-secondary btn-sm">Read Back Story
                                                <span class="glyphicon glyphicon-triangle-bottom"
                                                      aria-hidden="true"></span></button>
                                    </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!--!This is character three!!!!! -->
                <!--If $player->characterThree is Found Display this button to show the character card. -->
                <button data-toggle="collapse" href="#charThree" role="button" aria-expanded="false"
                        aria-controls="charTwolastname }"
                        type="button"
                        class="btn btn-primary btn-lg btn-block">{ $player->characterThree->firstname }<br/>
                    { $player->characterThree->lastname }<br/><span class="glyphicon glyphicon-triangle-bottom"
                                                                    aria-hidden="true"></span>
                </button>
                <!-- End the button block of code-->
                <!-- Otherwise show this button to say "No Third character found" -->
                <button class="btn btn-secondary btn-lg btn-block">No Third Character</button>
                <!---You can ignore this block of code for now --->
                <div class="collapse" id="charThree">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{ $player->characterThree->firstname } <br>
                                        { $player->characterThree->lastname} </h5>
                                    <span class="card-text">DOB: { $player->characterThree->dob } Sex: [ $player->characterThree->gender }</span><br/>
                                    <span class="card-text">Age: [ $player->characterThree->age } HGT: [ $player->characterThree->height }</span><br/>
                                    <center><br/>
                                        <p>
                                            <button data-toggle="collapse" href="#charThreeBackstory" role="button"
                                                    aria-expanded="false"
                                                    aria-control="charThreeBackstory"
                                                    type="button" class="btn btn-secondary btn-sm">Read Back Story
                                                <span class="glyphicon glyphicon-triangle-bottom"
                                                      aria-hidden="true"></span></button>
                                    </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 py-3">
                <div class="collapse" id="charOneBackstory">
                    <div class="bg-light rounded-lg py-3 pl-3">
                        <div align="right">
                            <button data-toggle="collapse" href="#charOneBackstory" type="button"
                                    class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <p>{ $player->characterOne->backstory }</p>
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
                            <button data-toggle="collapse" href="#charTwoBackstory" type="button"
                                    class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <p>{ $player->characterTwo->backstory }</p>
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
                            <button data-toggle="collapse" href="#charThreeBackstory" type="button"
                                    class="btn btn-outline-secondary btn-sm m-2">Close Window
                            </button>
                        </div>
                        <p>{ $player->characterThree->backstory }</p>
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
