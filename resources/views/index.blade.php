@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This is the header text-->
        <div class="row">
            <div class="col-sm-8">
                <div id="introductionBox" class="alert alert-info box-round" role="alert">
                    <div class="row">
                        <div class="col-sm-11">
                            We are LegacyRP. We are a worldwide community of roleplayers for FiveM. Welcome to our home in Los Santos.
                            We strive to provide a serious roleplay environment through a number of versatile features, strictly enforced rule sets, a competent staff team, but most importantly an <span style="font-weight:700"><em>incredible player base.</em></span>
                        </div>
                        <div class="col-sm-1 d-flex">
                            <a data-toggle="show" href="#introductionBox"><span align="right" class="glyphicon glyphicon-remove"></span></a><br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="">
            </div>
        </div>
    </div>
@endsection
