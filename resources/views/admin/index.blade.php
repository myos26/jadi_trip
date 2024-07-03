<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/personal.css') }}" />

    @yield('head')

    <title>Admin | Jadi Trip</title>
    <link rel="icon" href="{{ asset('assets/logo/logo.ico') }}" type="image/x-icon">

</head>

<body>
    <div class="container">
        @include('admin.layout.sidebar')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp"> menu </span>
                </button>
                {{-- <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp"> dark_mode </span>
                </div> --}}

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>{{ Auth::user()->username }}</b></p>
                        @if (Auth::user()->is_admin == 1)
                            <small class="text-muted">Admin</small>
                        @else
                            <small class="text-muted">User</small>
                        @endif
                    </div>
                    <div class="profile-photo">
                        <img src="{{ asset('profile/images/' . Auth::user()->photo) }}" />
                    </div>
                </div>
            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{ asset('profile/images/' . Auth::user()->photo) }}" />
                    <h2>{{ Auth::user()->username }}</h2>
                    @if (Auth::user()->is_admin == 1)
                        <p class="text-muted">Admin</p>
                    @else
                        <p class="text-muted">User</p>
                    @endif
                </div>
            </div>

            {{-- <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp"> edit </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp"> add </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <script src="{{ asset('admin/js/orders.js') }}"></script>
    <script src="{{ asset('admin/js/index.js') }}"></script>
    @yield('js')

</body>

</html>
