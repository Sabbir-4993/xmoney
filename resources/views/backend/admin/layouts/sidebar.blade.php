<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="/asset/html/ltr/vertical-menu-template/index.html">
                    <span class="brand-logo">
                        {{--<h2 class="brand-text">Xmoney</h2>--}}
                    </span>
                    <h2 class="brand-text">Xmoney</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.dashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                <ul class="menu-content">
                    <li class="active"><a class="d-flex align-items-center" href="{{route('admin.dashboard')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="eCommerce">Admin Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
