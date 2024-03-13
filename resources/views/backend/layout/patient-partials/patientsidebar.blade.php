<!-- Profile Sidebar -->
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="assets/img/patients/patient.jpg" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h3>
                <div class="patient-details">
                    <h5><i class="fas fa-birthday-cake"></i> {{auth()->user()->birth_date}}, {{ $user =auth()->user()->age()}} years</h5>
                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>{{auth()->user()->address}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li >
                    <a href="{{route('main')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('favourites')}}">
                        <i class="fas fa-bookmark"></i>
                        <span>Favourites</span>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <i class="fas fa-comments"></i>
                        <span>Message</span>
                        <small class="unread-msg">23</small>
                    </a>
                </li>
                <li >
                    <a href="{{route('profile.edit-patient')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <li >
                    <a href="{{route('change_password')}}">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<!-- /Profile Sidebar -->