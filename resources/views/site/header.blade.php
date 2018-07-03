<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-2">
                <!-- START LOGO DESIGN AREA -->
                <div class="logo">
                    <a href="/">
                        <p>Blandi</p>
                    </a>
                </div>
                <!-- END LOGO DESIGN AREA -->
            </div>
            <div class="col-md-9 col-sm-10">
                <div class="mainmenu">

                    @if(isset($menu))
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    @foreach($menu as $item)
                                        <li><a class="smoth-scroll" href="#{{ $item['alias'] }} ">{{ $item['title'] }} <div class="ripple-wrapper"></div></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<div class="welcome-image-area" data-stellar-background-ratio="0.6">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-text">
                            <h2>we are creative agency.</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="slide-btn btn-color smoth-scroll" href="#aboutUs">learn more</a>
                            <a class="slide-btn smoth-scroll" href="#contact">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>