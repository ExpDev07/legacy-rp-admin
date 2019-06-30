@extends('layouts.panel')

@section('content')
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#serverLogs">Server Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#otherLogs">Other Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#playerLogs">Player Logs</a>
            </li>
        </ul>
        <div class="tab-content card border-warning mb-3" id="pills-tabContent">
            <div class="tab-pane fade show active card-body" id="serverLogs"><div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#serverOneLogs">Server 1 Logs</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#serverTwoLogs">Server 2 Logs</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#serverThreeLogs">Server 3 Logs</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#serverFourLogs">Server 4 Logs</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="serverOneLogs">
                                <span class="d-block p-2 bg-secondary text-white">This is a server log</span>
                                <span class="d-block p-2 bg-light text-white">Hello this is a different server log with a different entry</span>
                                <span class="d-block p-2 bg-secondary text-white">This is a server log</span>
                                <span class="d-block p-2 bg-light text-white">Hello this is a different server log with a different entry</span>
                            </div>
                            <div class="tab-pane fade" id="serverTwoLogs">{ServerLogs.Server2LogsAll}</div>
                            <div class="tab-pane fade" id="serverThreeLogs">{ServerLogs.Server3LogsAll}</div>
                            <div class="tab-pane fade" id="serverFourLogs">{ServerLogs.Server4LogsAll}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="otherLogs">
                <div class="tab-pane fade show active card-body" id="serverLogs"><div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#societyLogs">Society Logs</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#cartelLogs">Cartel Logs</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#policeLogs">Police Logs</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsOne">Various Logs One</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsTwo">Various Logs Two</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsThree">Various Logs Three</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsFour">Various Logs Four</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsFive">Various Logs Five</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsSix">Various Logs Six</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsSeven">Various Logs Seven</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsEight">Various Logs Eight</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsNine">Various Logs Nine</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#unnamedLogsTen">Various Logs Ten</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="societyLogs">
                                <span class="d-block p-2 bg-secondary text-white">This is a server log</span>
                                <span class="d-block p-2 bg-light text-white">Hello this is a different server log with a different entry</span>
                                <span class="d-block p-2 bg-secondary text-white">This is a server log</span>
                                <span class="d-block p-2 bg-light text-white">Hello this is a different server log with a different entry</span>
                            </div>
                            <div class="tab-pane fade" id="cartelLogs"><span class="d-block p-2 bg-secondary text-white">cartel logs can look like this</span>
                                <span class="d-block p-2 bg-light text-white">and like this</span>
                                <span class="d-block p-2 bg-secondary text-white">oh hi mark</span>
                                <span class="d-block p-2 bg-light text-white">cartel logs</span>
                            </div>
                            <div class="tab-pane fade" id="policeLogs"><span class="d-block p-2 bg-secondary text-white">Police Logs look like this</span>
                                <span class="d-block p-2 bg-light text-white">And like this</span>
                                <span class="d-block p-2 bg-secondary text-white">as well as like this</span>
                                <span class="d-block p-2 bg-light text-white">and like this</span>
                            </div>
                            <div class="tab-pane fade" id="unnamedLogsOne">Logs blah 1</div>
                            <div class="tab-pane fade" id="unnamedLogsTwo">Logs blah 2</div>
                            <div class="tab-pane fade" id="unnamedLogsThree">Logs Blah 3</div>
                            <div class="tab-pane fade" id="unnamedLogsFour"> Logs Blah 4</div>
                            <div class="tab-pane fade" id="unnamedLogsFive">Logs Blah 5</div>
                            <div class="tab-pane fade" id="unnamedLogsSix">Logs Blah 6</div>
                            <div class="tab-pane fade" id="unnamedLogsSeven">Logs Blah 7</div>
                            <div class="tab-pane fade" id="unnamedLogsEight">Logs Blah 8</div>
                            <div class="tab-pane fade" id="unnamedLogsNine">Logs Blah 9</div>
                            <div class="tab-pane fade" id="unnamedLogsTen">Logs Blah 10</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="playerLogs">
                <div class="input-group p-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Player User</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Steam or Hex">
                </div>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2 m-3"><button type="button" class="btn btn-primary btn-block">Lookup Player</button></div>
                </div>
            </div>
        </div>
@endsection
