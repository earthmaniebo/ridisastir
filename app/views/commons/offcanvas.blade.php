<div class="off-canvas-wrap pagepanel " data-offcanvas>
    <div class="inner-wrap pagepanel"  >
        <nav class="tab-bar top-bar"  style="background-color:white;color:#c40404;">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" style="background-color:white;color:#c40404;" href="#">
                    <span></span>
                </a>
            </section>
            <section class="middle tab-bar-section">
                <a href="{{ URL::to('/') }}">
                     <h1 class="brand"  style="background-color:white;color:#c40404;">
                        Ridisastir 
                        @if(Session::has('name'))
                          -  {{ Session::get('name') }}
                        @endif
                     </h1> 
                </a>
            </section>
            <section class="top-bar-section" style="background-color:white;">
                @if(Session::has('user_type'))
                    <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                        {{ Form::open(array(
                            'url'    => 'user/logout',
                            'role'   => 'form',
                            'method' => 'POST',
                        )) }}
                                <input type="submit" class="button alert" value="Logout"/>
                            {{ Form::close() }}
                        </li>
                    </ul>
                @endif
                @if(Session::has('user_type'))
                    <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                            <a href="#" class="button" data-reveal-id="requestModal">View Requests</a>
                        </li>
                    </ul>
                @endif
                @if(Session::get('user_type') == "Admin")
                    <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                            <a href="#" class="button" data-reveal-id="addUserModal">Add User</a>
                        </li>
                    </ul>
                @endif
                @if(Session::get('user_type') == "Barangay" || Session::get('user_type') == "Department")
                    <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                            <a href="#" class="button" data-reveal-id="addAssetModal">Add Assets</a>
                        </li>
                    </ul>
                @endif
                @if(!Session::has('user_type'))
                    <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                            <a href="#" class="button alert" data-reveal-id="loginModal">Login</a>
                        </li>
                    </ul>
                     <ul class="right" style="background-color:white;">
                        <li class="has-form" style="background-color:white;">
                            <a href="#" class="button" data-reveal-id="requestModal">Send Requests</a>
                        </li>
                    </ul>
                @endif
            </section>
        </nav>
        <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list" >
                <li><label class="brand">Departments</label></li>
                @foreach($depts as $dept)
                    <li><a href="#">{{ $dept["name"] }}</a></li>
                @endforeach
            </ul>
        </aside>
        <section class="main-section pagepanel">
            @yield('content')
        </section>
        <a class="exit-off-canvas"></a>
        @include('commons.addUserModal')
        @include('commons.loginmodal')
        @include('commons.addassetmodal')
    </div>
</div>
