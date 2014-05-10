<div class="off-canvas-wrap pagepanel " data-offcanvas>
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">My Site</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
            <!-- Left Nav Section -->
            <ul class="left">
                <li>
                    <a href="#" data-reveal-id="addUserModal">Add User</a>
                </li>
            </ul>
        </section>
    </nav>
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
                     </h1> 
                </a>
            </section>
            <section class="top-bar-section" style="background-color:white;">
                <ul class="right" style="background-color:white;">
                  <li class="has-form" style="background-color:white;">
                    <a href="#" class="button" data-reveal-id="requestModal">Request</a> </li>
                </ul>
            </section>
        </nav>
        <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list" >
                <li><label class="brand">Departments</label></li>
                <li><a href="#">MMDA</a></li>
                <li><a href="#">DPWH</a></li>
            </ul>
        </aside>
        <section class="main-section pagepanel">
            @yield('content')
        </section>
        <a class="exit-off-canvas"></a>
        @include('commons.addUserModal')
    </div>
</div>
