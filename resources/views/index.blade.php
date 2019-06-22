@extends('layouts.app')

@section('content')
    <div class="container">
        <!--This is the header text-->
        <div class="row">
            <div class="col-sm-6 d-flex">
                <div id="introductionBox" class="box-round" role="alert" style="font-size: 16px;">
                    <div class="row">
                        <p class="frontPage_text">We are LegacyRP. We are a worldwide community of roleplayers for
                            FiveM. Welcome to our home in
                            Los Santos.
                            We strive to provide a serious roleplay environment through a number of versatile features,
                            strictly enforced rule sets, a competent staff team, but most importantly an <span
                                class="font-weight-bold">incredible player base.</span>
                        </p>
                        <div class="lead frontPage_text text-center">
                            <a href="https://discordapp.com/invite/6j2uEjj">Click here to join our discord server</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <img class="img-fluid frontPage_images" src="/img/landing/fp_001.jpg">
            </div>
            <div class="col-sm-12 mt-3">
                <div class="alarm text-center frontPage_text"><span
                        class="h5">The LegacyRP LSPD SWAT Division</span><span class="text-muted"></span></div>
                <img class="img-fluid frontPage_images d-flex" src="/img/landing/fp_007.jpg">
                <div class="d-flex alert alert-light"><span class="frontPage_text text-primary">Organizing before a raid on the cartel headquarters on <strong>June/18/2019.</strong> <span
                            class="text-danger">The Cartel Won.</span></span></div>
            </div>
                <div class="frontPage_text">
                    <div class="content-box">
                        <span class="text-center"><h5>Here is what you can expect from LegacyRP</h5></span>
                        <p>
                            We are a serious roleplay server that where you can work as a transporter, or a mechanic, a drug
                            kingpin, or a detective that brings him to justice. You can be anyone in LegacyRP, as <span class="text-primary">innocent</span> or
                            <span class="text-danger">evil</span> as you'd like.
                        </p>
                    </div>
                </div>
                <div class="frontPage_text">
                    <div class="content-box">
                        <span class="text-center"><h5>We Have a Large Staff Team</h5></span>
                        <p>
                            We have a large staff team to handle in game reports. Take cases up into discord and resolve them
                            instantly. Provide basic tech support through discord. Flesh out this section more to describe more
                            of what the staff do to help the community and also that the staff enforce a strict ruleset to
                            maintain roleplay standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection
