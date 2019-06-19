@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This is the header text-->
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info box-round" role="alert">
                    <p>You are now viewing {{ $warning->player->name }}'s warning!</p>
                    <p><b>Message: </b> {{ $warning->message }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
