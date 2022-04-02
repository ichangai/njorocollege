<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle">
            <i class="hamburger align-self-center"></i>
            </a>
        <form class="d-none d-sm-inline-block">
            <div class="input-group input-group-navbar">
                <input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
                <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
                </button>
            </div>
        </form>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="message-circle"></i>
                            <span class="indicator">4</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell-off"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0 px-1" aria-labelledby="alertsDropdown" style="width: 300px;">
                        <div class="dropdown-menu-header">
                             New Notifications
                        </div>
                        <div class="list-group" >
                            {{-- <a href="#" class="list-group-item" style="text-align: center">
                                <div class="row g-0 align-items-center">
                                    <div class="col-12">
                                        <div class="text-dark">{{ $notification->data['full_name'] }}</div>
                                        <div class="row">
                                            <div class="text-muted small mt-1">New Tenant Added</div>
                                            <div class="" style="text-align: center">
                                                <button id="notification-btn" style="background: none; color: blue; border: none; outline: none; width:100px; font-size: 13px; text-align: center;">Mark as read</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a> --}}
                            {{-- <a href="#" class="list-group-item">
                                <div class="">
                                    No notifications
                                </div>
                            </a> --}}
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary px-5">Logout</a>
                        <form id="logout-form" action="" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            </ul> 
        </div>
    </nav>