<div class="leftside-menu menuitem-active">

    <!-- Logo Light -->
    <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Logo Dark -->
    <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right"
            aria-label="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                         aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <!-- Leftbar User -->
                            <div class="leftbar-user">
                                <a href="pages-profile.html">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                         class="rounded-circle shadow-sm">
                                    <span class="leftbar-user-name">Dominic Keller</span>
                                </a>
                            </div>

                            <!--- Sidemenu -->
                            <ul class="side-nav">

                                <li class="side-nav-title side-nav-item">Manager</li>

                                <li class="side-nav-item">
                                    <a href="{{ route('admin.users.index') }}"  class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span> Users </span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a href="{{ route('admin.posts.index') }}"  class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span> Posts </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 100px;"></div>
        </div>
    </div>
</div>
