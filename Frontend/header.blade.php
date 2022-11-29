 <!-- Topbar/Navbar Start -->
 <nav class="navbar fixed-top px-sm-5 navbar-expand-sm navbar-dark" style="background-color: black">
        <a href="{{route('home')}}" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top"
                src="{{asset('assets')}}/img/navbar-logo.png" alt="Logo" width="50" height="50" /></a>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar options -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{route('home')}}" class="nav-link active"> Home </a>
                </li>

                <!-- get main categories -->
                <!-- this avoids having to get data from all fuctions -->
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategories()
                @endphp

                <!-- Main Parent Categories in Navbar-->
                @foreach($mainCategories as $rs)
                <div class="subnav">
                    <li class="nav-item active"><a href="#" class="nav-link"> {{$rs->title}} </a>
                     <!-- if parent category has children (sub) categories, include categorytree.blade -->
                     @if(count($rs->children))
                        @include('home.categorytree', ['children' => $rs->children])
                     @endif
                    </li>
                </div>
                @endforeach

                
                <li class="nav-item active">
                    <a href="login.php" class="nav-link "> Login </a>
                </li>
                <li class="nav-item active">
                    <a href="signup.php" class="nav-link "> Signup </a>
                </li>
            </ul>
        </div>
        <!-- Login/Register option -->
        <li class="nav-item active">
            <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top mx-3"
                    src="{{asset('assets')}}/img/user.png" alt="Logo" width="35" height="35"
                    style="padding-left: 5px; padding: right 20px;" /></a>
        </li>
    </nav>
    <!-- Topbar/Navbar End -->


    
