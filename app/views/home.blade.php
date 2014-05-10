@extends('layouts.master')

@section('content')
    <div class="row" id="masthead">
		<div class="medium-offset-3 medium-8 columns">
			<h1>Ridisastir</h1>
			<h3><i>Asset Management System</i></h3>
		</div>
    </div>
    <br>
    <br>
    <div class="row" id="lowerpart">
    	<button class="medium-offset-2 button" id="requestButton">
    		<span class="fa fa-flag fa-fw"></span> 
    		Request
    	</button>
    	<button class="button" id="browseButton">
    		Browse
    		<span class="fa fa-location-arrow fa-fw"></span> 
    	</button>
    </div>
@stop