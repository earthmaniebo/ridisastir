@extends('layouts.master')
@section('content')

<div class="medium-12 columns" id="loginRegister">
    @if(!Session::has('name'))<a href="#" data-reveal-id="loginModal">Login</a>@endif
</div>
<div class="row pagepanel" id="masthead">
    <div id="mastbody">
        <div class="small-6 small-offset-3 medium-5 medium-offset-0 columns" id="maplogo" >
            <img src="assets/img/ph_new1.png" class="pulse" />
        </div>
        <div class="small-11 small-offset-1 medium-7 medium-offset-0 columns" id="mastcontent">
            <h1>Ridisastir</h1>
            <h3><i>Asset Management System</i></h3>
            <br>
            <button class="button small-11 medium-4 medium-offset-0" id="requestButton" data-reveal-id="requestModal">
            <span class="fa fa-flag fa-fw"></span> 
            Request
            </button>
            <a href="{{ URL::to('browse') }}" class="button small-11 medium-4 medium-offset-0" id="browseButton">
            Browse
            <span class="fa fa-location-arrow fa-fw"></span> 
            </a>
        </div>
    </div>
    
    @include('commons.requestmodal')
    @include('commons.loginmodal')
@stop