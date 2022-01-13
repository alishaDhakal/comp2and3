    <div class="row">
       <div class="col-12">
           <form class="search-model-form" method="GET" action="#">
               <input type="text" id="search-input" class="form-control" name="search" placeholder="Search here....." value="{{request('search')}}">
           </form>
       </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{url('/product')}}">Product</a>
                </li>
                @auth
                    @if(auth()->user()->permissions=='user')
                        <li class="nav-item dropdown text-dark">
                            <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, {{auth()->user()->name}}
                            </a>
                            <div class="dropdown-menu text-dark" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/user/profile">User Profile</a>
                                <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, {{auth()->user()->name}}
                            </a>
                            <div class="dropdown-menu text-dark" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="dashboard">Dashboard</a>
                                <a class="dropdown-item" href="/user/profile">Admin Profile</a>
                                <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                            </div>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
