<div class="off-canvas-wrap pagepanel " data-offcanvas>
    <div class="inner-wrap pagepanel"  >
        <nav class="tab-bar top-bar"  >
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon"  href="#">
                    <span></span>
                </a>
            </section>
            <section class="middle tab-bar-section">
                <a href="{{ URL::to('/') }}">
                     <h1 class="brand">
                        Ridisastir
                     </h1> 
                </a>
            </section>
            <section class="top-bar-section hide-for-small-only">
                <ul class="right" ">
                  <li class="has-form" ">
                    <a href="#" class="button" data-reveal-id="requestModal">Request</a>
                </li>
                </ul>
            </section>
        </nav>
        <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list" >
                <li><label class="brand">Ridisastir</label></li>
                <li class="show-for-small-only">
                    <a href="#" style="color:#2ba6cb;" data-reveal-id="requestModal">
                        Request
                        <span class="fa fa-flag fa-fw right"></span>
                    </a>
                </li>
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
