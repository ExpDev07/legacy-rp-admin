@extends('layouts.adminpanel')

@section('navigation')
    <ul class="nav">
        <li class="nav-item {{ (request()->is([ 'players/', Auth::user()->player ])) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('players.show', [ 'player' => Auth::user()->player ]) }}">
                <p><i class="fas fa-user-circle"></i>
                    <small>MY PLAYER DASHBOARD</small></p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <p><i class="fas fa-toolbox"></i>
                    <small>ADMIN HOME</small></p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <p><i class="fas fa-project-diagram"></i>
                    <small>SETUP PERMISSIONS</small></p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <p><i class="fas fa-users-cog"></i> <small>USER SETTINGS</small></p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="card card-chart">
            <!-- Name and playtime card -->
            <div class="alert alert-success card-header-success">
                <!-- Show the name and the identifier -->
                <span class="lead mb-2">
                    Admin Section
                </span>
                <strong>Welcome to the administration section</strong> {{ Auth::user()->username }}.
            </div>
            <div class="card-body">
                <!-- Title -->
                <h3><strong><i class="fas fa-users-cog"></i> Administrative Actions </strong></h3>
    <ul>
        <li>User Settings</li>
        <li>Permissions</li>
    </ul>
@endsection


