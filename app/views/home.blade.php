@extends('layouts.master')

@section('content')
    <div class="row pagepanel" id="masthead">
        <div class="medium-5 columns" id="maplogo">
            <img src="assets/img/ph_new1.png">
        </div>
		<div class="medium-7 columns" id="mastcontent">
			<h1>Ridisastir</h1>
			<h3><i>Asset Management System</i></h3>
            <br>
            <button class="button" id="requestButton">
                <span class="fa fa-flag fa-fw"></span> 
                Request
            </button>
            <button class="button" id="browseButton">
                Browse
                <span class="fa fa-location-arrow fa-fw"></span> 
            </button>
    	</div>
    </div>
    <div class="row pagepanel" style="background-color:#EEE;">
        <div>
        </div>
    </div>
@stop