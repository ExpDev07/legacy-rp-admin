@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info box-round" role="alert">
                    <p>Welcome to the LegacyRP Administration Section. Here you can look up a player by <b>Steam Name</b> or <b>SteamHEX</b> to see a list of all previous infraction/strikes.</p>
                    <h6>When submitting a warning or ban, please try to include as much information as possible regarding the circumstances that led to the warning or ban, so that in the future we can have accurate record keeping.</h6>
                </div>
            </div>
        </div>
        <!--This section is for looking up a person-->
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <h5>
                            <!--This is pretty self explanatory, you enter a steamname or preferably a steamhex to look up a player and a list of strikes against them. Maybe we can add commendations for players who do good for the community?--->
                            <center>Look up a player by <b>Steam Name</b> or <b>SteamHEX</b> to see all previous infractions.</center>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><b>Steam Name or SteamHEX Lookup</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="steam:0a1b2e3d4e5f6789" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="col-sm-2"><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#playerStrikesCollapse" aria-expanded="false" aria-controls="adultCommunityCollapse" style="width:100%;">Player Lookup</button></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="collapse multi-collapse" id="playerStrikesCollapse">
                        <div class="card card-body" style="color:black;">
                            <ul>
                                <li><span class="player-strike">Example strike for "RDM"</span></li>
                                <li><span class="player-strike">Example strike for "FailRP"</span></li>
                                <li><span class="player-commendation">Example commendation for "Often helps new players around town"</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--This section is for inputting an infraction-->
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <h5>
                            <center>Submit a <b>WARNING</b> or <b>BAN</b>.<br /></center>
                        </h5>
                        <ul>
                            <li><b>Reporting Staff Member</b>: Is the name of the staff reporting the <b>Warning</b> or <b>Ban</b></li>
                            <li><b>Steam Name</b>: The steam name of the player receiving the <b>Warning</b> or <b>Ban</b>.</li>
                            <li><b>SteamHEX</b>: The SteamHEX of the player receiving the <b>Warning</b> or <b>Ban</b>.</li>
                            <li><b>Description of Infraction</b>: A full detailed description of the infraction to warrant the <b>Warning</b> or <b>Ban</b>. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Staff Name Input-->
            <div class="row">
                <div class="col-sm-12 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><b>Reporting Staff Member</b></span>
                    </div>
                    <input type="text" class="form-control" aria-label="staffname" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>

            <!--Steam name of the player being logged-->
            <div class="row">
                <div class="col-sm-6 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><b>Steam Name</b></span>
                    </div>
                    <input type="text" class="form-control" aria-label="steamname" aria-describedby="inputGroup-sizing-default">
                </div>

                <!--SteamHEX of the player being logged-->
                <div class="col-sm-6 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><b>SteamHEX</b></span>
                    </div>
                    <input type="text" class="form-control" aria-label="steamhex" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <!--Buttons for Rules Pulldown --->
            <div class="row" style="margin-bottom:15px;">
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#adultCommunityCollapse" aria-expanded="false" aria-controls="adultCommunityCollapse" style="width:100%;">
                        Adult Community Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#generalRulesCollapse" aria-expanded="false" aria-controls="generalRulesCollapse" style="width:100%;">
                        General Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#roleplayRulesCollapse" aria-expanded="false" aria-controls="roleplayrulesCollapse" style="width:100%;">
                        Roleplay Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#metagamingRulesCollapse" aria-expanded="false" aria-controls="metagamingRulesCollapse" style="width:100%;">
                        Metagaming Rules
                    </button>
                </div>
            </div>
            <div class="row" style="margin-bottom:15px;">
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#newlifeRulesCollapse" aria-expanded="false" aria-controls="newlifeRulesCollapse" style="width:100%;">
                        New Life Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#greenzoneRulesCollapse" aria-expanded="false" aria-controls="greenzoneRulesCollapse" style="width:100%;">
                        Green Zone Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#policeemsRulesCollapse" aria-expanded="false" aria-controls="policeemsRulesCollapse" style="width:100%;">
                        Police / EMS Rules
                    </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#whitelistRulesCollapse" aria-expanded="false" aria-controls="whitelistRulesCollapse" style="width:100%;">
                        Whitelist Job Rules
                    </button>
                </div>
            </div>
            <!--End buttons for rules pulldowns -->
            <!--Begin content sections for pulldowns -->
            <!--Adult Community Rules -->
            <div class="col-sm-12 rules-box-outer">
                <div class="collapse" id="adultCommunityCollapse">
                    <div class="card card-body rules-box-inner">
                        <div class="row">
                            <div class="col-sm-12">
                                <center>
                                    <h4>Adult Community Rules</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!--General Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="generalRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <h4>General Rules</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Roleplay Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="roleplayRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="col-sm-12">
                                <center>
                                    <h4>Roleplay Rules</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Metagaming Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="metagamingRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <h4>Metagaming Rules</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Newlife Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="newlifeRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <h4>New Life Rules</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Greenzone Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="greenzoneRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <h4>Greenzone Rules</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--PoliceEMS Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="policeemsRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="col-sm-12">
                                <center>
                                    <h4>Police and EMS Rules</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Whitelist Job Rules -->
                <div class="col-sm-12 rules-box-outer">
                    <div class="collapse" id="whitelistRulesCollapse">
                        <div class="card card-body rules-box-inner">
                            <div class="col-sm-12">
                                <center>
                                    <h4>Whitelist Job Rules</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Description of the infraction-->
                <div class="row">
                    <div class="col-sm-12 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><b>Description of Infraction</b></span>
                        </div>
                        <textarea class="form-control" aria-label="description"></textarea>
                    </div>
                </div>
                <!--Submit Buttons-->
                <div class="row" style="padding-top:15px;">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2"><button type="button" class="btn btn-warning" style="width:100%;">Submit Warning</button></div>
                    <div class="col-sm-2"><button type="button" class="btn btn-danger" style="width:100%;">Submit Ban</button></div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
            <!---End Infraction input section -->
            <!---Begin Player Ban Appeal Section-->
            <div class="content-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-warning" role="alert">
                            <center>
                                <h5>Submit a <b>Ban Appeal</b></h5>
                            </center>
                            <center>
                                <h6>Section Reserved for staff with special permission to process ban appeals.</h6>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-12 input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="appealstaff"><b>Staff Accepting Appeal</b></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-sm-6 input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="appealsteam"><b>Player Steam Name</b></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-sm-6 input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="appealhex"><b>Player SteamHEX</b></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-sm-12 input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="appealforumurl"><b>Ban Appeal URL / Link</b></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-sm-12">
                        <div class="alert alert-warning" role="alert">
                            <center>
                                <h6>Any additional information regarding the ban appeal, such as probational information, or if anything needs to be confiscated.</h6>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-12 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><b>Additional Information</b></span>
                        </div>
                        <textarea class="form-control" aria-label="appealinformation"></textarea>
                    </div>
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2"><button type="button" class="btn btn-success" style="width:100%; margin-top:15px;">Submit Appeal</button></div>
                    <div class="col-sm-5" style="margin-top:20px;"><a style="color:#4B0082; text-decoration:underline;" href="/appeals/">
                            <!--- Appeals needing proccessed (Inzidiuz) section will be a separate page for inzidiuz that will have a list of steamhex's for inzidiuz to unban as well as steamhex's to offline ban. See the big comment block below for the player review section for offline bans. -->
                            <h6>Appeals Needing Processed (Inzidiuz)</h6> </a> </div> </div> </div> <!---End Player Ban Appeal Section-->
            <!---Begin Player Review Section -->
            <!--- Player review section to pop up if a player has 3 entries (strikes) in the database. The player name, steamhex, and list of infractions would be listed along with a comment box and an actionable item such as "Ban" or "Probation" or such items where the player may be allowed to continue to play if the infractions against them aren't too serious. If ban is sent through, the steamhex is forwarded to a separate page (the same page listed above for the ban appeals) for inzidiuz to offline-ban the steamhex. -->
            <div class="row" id="player_review">
                <div class="col-sm-12">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    <center><b>TODO: Build a player review section</b></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
