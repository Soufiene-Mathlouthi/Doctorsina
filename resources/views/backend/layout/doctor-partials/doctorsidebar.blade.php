 <!-- Profile Sidebar -->
 <div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="{{url('assets/img/doctors/doctors-3.jpg')}}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>Dr. {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h3>
                
                <div class="patient-details">
                    <h5 class="mb-0">{{auth()->user()->speciality}}</h5>
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
                <li>
                    <a href="{{route('appointments')}}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="my-patients">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>
                <li >
                    <a href="{{route('show-review')}}">
                        <i class="fas fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <i class="fas fa-comments"></i>
                        <span>Message</span>
                        
                    </a>
                </li>
                <li >
                    <a href="{{route('profile.edit-doctor')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('social-media')}}">
                        <i class="fas fa-share-alt"></i>
                        <span>Social Media</span>
                    </a>
                </li>
                <li class="active">
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