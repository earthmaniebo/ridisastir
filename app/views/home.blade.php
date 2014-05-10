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
</div>
<div id="requestModal" class="reveal-modal" data-reveal>
        <form>
            <div class="row">
                <div class="medium-12 columns">
                    <label>Name
                        <input type="text" name="name" id="name" placeholder="..." />
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Contact Number
                        <input type="text" name="contact_no" id="contact_no" placeholder="..." />
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Request
                        <textarea rows="4" name="request" id="request" paceholder="medium-4.columns" ></textarea>
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Barangay
                        <select name="user_id">
                            <option value="1">Husker</option>
                            <option value="2">Starbuck</option>
                            <option value="3">Hot Dog</option>
                            <option value="4">Apollo</option>
                        </select>
                    </label>
                </div>
                <div class="row">
                    <input type="submit" name="request-btn" value="Request" class="button small-4 small-offset-4" />
                </div>
          </div>
      </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
    <div id="loginModal" class="reveal-modal medium" data-reveal>
        <h2>Login</h2>
        <form>
            <div class="row">
                 <div class="medium-6 medium-offset-3 columns">   
                    <div class="medium-12 columns">
                        <label>Email
                            <input type="email" name="email" id="email" placeholder="..." />
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Password
                            <input type="password" name="password" id="password" placeholder="..." />
                        </label>
                    </div>            
                    <div class="row">
                        <input type="submit" name="login-btn" value="Login" class="button small-4 small-offset-4" />
                    </div>
                </div>
          </div>
      </form>
        <a class="close-reveal-modal">&#215;</a>
    </div>
<!-- <div id="registerModal" class="reveal-modal" data-reveal>
    <form>
        <div class="row">
            <div class="medium-12 columns">
                <label>Name
                <input type="text" style="text-align:center;"  placeholder="..." />
                </label>
            </div>
            <div class="medium-12 columns">
                <label>Email
                <input type="email" style="text-align:center;"  placeholder="..." />
                </label>
            </div>
            <div class="medium-12 columns">
                <label>Password
                <input type="password" style="text-align:center;" />
                </label>
            </div>
            <div class="medium-12 columns">
                <label>Contact Number
                <input type="text" style="text-align:center;"  placeholder="..." />
                </label>
            </div>
            <div class="medium-12 columns">
                <label>
                    City
                    <select>
                        <option value="husker">Husker</option>
                        <option value="starbuck">Starbuck</option>
                        <option value="hotdog">Hot Dog</option>
                        <option value="apollo">Apollo</option>
                    </select>
                </label>
            </div>          
            <div class="row">
                <button class="button small-4 small-offset-4">Register</button>
            </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div> -->
    
@stop