@extends('layouts.master')

@section('content')
    <div class="medium-12 columns" id="loginRegister">
        <a href="#" data-reveal-id="loginModal">Login</a> | <a href="#" data-reveal-id="registerModal">Register</a>
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
                <button class="button small-11 medium-4 medium-offset-0" id="browseButton">
                    Browse
                    <span class="fa fa-location-arrow fa-fw"></span> 
                </button>
            </div>
        </div>
    </div>
    <div id="requestModal" class="reveal-modal" data-reveal>
        
        <form>
          <div class="row">
            <div class="medium-12 columns">
              <label>Name
                <input type="text" placeholder="..." />
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Contact Number
                <input type="text" placeholder="..." />
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Request
                <textarea rows="4" paceholder="medium-4.columns" ></textarea>
              </label>
            </div>
            <div class="medium-12 columns">
              <label>Barangay
                <select>
                  <option value="husker">Husker</option>
                  <option value="starbuck">Starbuck</option>
                  <option value="hotdog">Hot Dog</option>
                  <option value="apollo">Apollo</option>
                </select>
              </label>
            </div>
            <div class="row">
                <button class="button small-4 small-offset-4">Submit</button>
            </div>
          </div>
      </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
    <div id="loginModal" class="reveal-modal" data-reveal>
        <h2>Login</h2>
        <p class="lead">Your couch. It is mine.</p>
        <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
    <div id="registerModal" class="reveal-modal" data-reveal>
        <h2>Register</h2>
        <p class="lead">Your couch. It is mine.</p>
        <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
@stop