<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="/"><img src="/backend/img/logo-white.png" data-retina="true" alt="" width="140" height="20" class="m-2"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link" href="/myaccount/{{Auth::user()->id}}">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">My Profile</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/admin">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Bookings">
                <a class="nav-link" href="/myaccount/bookings/{{Auth::user()->id}}">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                    <span class="nav-link-text">Bookings <span class="badge badge-pill badge-primary">{{ count($bookings) }}  New</span></span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /Navigation-->
