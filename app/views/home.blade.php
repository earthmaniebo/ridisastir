@extends('layouts.master')
@section('content')

<div class="medium-12 columns" id="loginRegister">
    <a href="#" data-reveal-id="loginModal">Login</a>
</div>
<div class="row pagepanel" id="masthead">
    <div id="mastbody">
        <div class="small-6 small-offset-3 medium-5 medium-offset-0 columns" id="maplogo" >
            <img src="assets/img/ph_new1.png">
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
    <div id="loginModal" class="reveal-modal medium" data-reveal>
        <h2>Login</h2>
        {{ Form::open(array(
            'url'    => 'user/login',
            'role'   => 'form',
            'method' => 'POST',
            'data-abide' => 'data-abide'
        )) }}
            <div class="row">
                 <div class="medium-6 medium-offset-3 columns">   
                    <div class="medium-12 columns">
                        <label>Email <small>required</small>
                            <input type="email" required name="login_email" id="login_email" placeholder="..." />
                        </label>
                        <small class="error">Please enter a valid email address.</small>
                    </div>
                    <div class="medium-12 columns">
                        <label>Password <small>required</small>
                            <input type="password" required name="login_password" id="login_password" placeholder="..." />
                        </label>
                        <small class="error">Password is required.</small>
                    </div>      
                    <div class="row">
                        <input type="submit" name="login-btn" value="Login" class="button small-4 small-offset-4" />
                    </div>
                </div>
            </div>
      {{ Form::close() }}
        <a class="close-reveal-modal">&#215;</a>
    </div>
@stop