<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/storage/website_setup/' . websiteSetupValue('logo')) }}" class="logo-icon"
                alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ Route::is('home') ? 'mm-active' : '' }}">
            <a href="{{ route('home') }}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li
            class="{{ Route::is('slider.index') || Route::is('slider.create') || Route::is('slider.edit') ? 'mm-active' : '' }}">
            <a href="{{ route('slider.index') }}">
                <div class="parent-icon"><i class='bx bx-repeat'></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li
            class="{{ Route::is('gallery.index') || Route::is('gallery.create') || Route::is('gallery.edit') ? 'mm-active' : '' }}">
            <a href="{{ route('gallery.index') }}">
                <div class="parent-icon"><i class='bx bx-image-alt'></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
        </li>
        <li
            class="{{ Route::is('award.index') || Route::is('award.create') || Route::is('award.edit') ? 'mm-active' : '' }}">
            <a href="{{ route('award.index') }}">
                <div class="parent-icon"><i class='bx bx-award'></i>
                </div>
                <div class="menu-title">Award & Certificate</div>
            </a>
        </li>
        <li
            class="{{ Route::is('blog.index') || Route::is('blog.create') || Route::is('blog.edit') ? 'mm-active' : '' }}">
            <a href="{{ route('blog.index') }}">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
        </li>
        <li
            class="{{ Route::is('service.index') || Route::is('service.create') || Route::is('service.edit') ? 'mm-active' : '' }}">
            <a href="{{ route('service.index') }}">
                <div class="parent-icon"><i class='bx bx-cog'></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
        </li class="{{ Route::is('appointment.index') ? 'mm-active' : '' }}">
        <li>
            <a href="{{ route('appointment.index') }}">
                <div class="parent-icon"><i class='bx bx-check-shield'></i>
                </div>
                <div class="menu-title">Appointments</div>
            </a>
        </li>
        <li>
            <a href="{{ route('team.index') }}">
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Our Team</div>
            </a>
        </li>
        <li>
            <a href="{{ route('mission.index') }}">
                <div class="parent-icon"><i class='bx bx-radio-circle-marked'></i>
                </div>
                <div class="menu-title">Our Mission</div>
            </a>
        </li>
        <li class="{{ Route::is('enquiry.index') ? 'mm-active' : '' }}">
            <a href="{{ route('enquiry.index') }}">
                <div class="parent-icon"><i class='bx bx-user-voice'></i>
                </div>
                <div class="menu-title">Enquiry</div>
            </a>
        </li>
        <li class="{{ Route::is('website_setup.index') ? 'mm-active' : '' }}">
            <a href="{{ route('website_setup.index') }}">
                <div class="parent-icon"><i class='bx bx-globe'></i>
                </div>
                <div class="menu-title">Website Setup</div>
            </a>
        </li>
    </ul>
</div>
