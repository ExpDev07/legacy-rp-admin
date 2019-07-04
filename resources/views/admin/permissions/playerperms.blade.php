@extends('layouts.panel')

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

@endsection
