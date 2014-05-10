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
                <li><label class="brand">Ridisastir</label></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
            </ul>
        </aside>
        <section class="main-section pagepanel">
            @yield('content')
        </section>
        <a class="exit-off-canvas"></a> 
    </div>
</div>
