<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/insert')}}">
        <img src="image/Immigration-Logo.png" alt="image" width="50px" height="8%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="/Immigration/public">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            {{-- @if(Auth::check()) --}}
            <li class="nav-item active">
                <a class="nav-link" href="/Immigration/public/insert">Insert <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Immigration/public/search">Search <span class="sr-only">(current)</span></a>
            </li>
            {{-- @endif --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Member
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @if(Auth::check())
                    <a class="dropdown-item" href="{{url('users/logout')}}">Logout</a>
        
                  @else
                  <a class="dropdown-item" href="{{url('users/register')}}">Register</a>
                  <a class="dropdown-item" href="{{url('')}}"> Login</a>
                  @endif
        
                </div>
              </li> --}}
            {{-- <i class="fas fa-user-cog nav-item active pull-right"></i> --}}
            <!-- <li class="nav-item active">
                <a class="nav-link" href="/Immigration/public/update">Update <span class="sr-only">(current)</span></a>
            </li> -->
        </ul>
    </div>
</nav>