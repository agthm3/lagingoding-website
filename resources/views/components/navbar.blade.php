  <nav class="navbar navbar-expand-md">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="{{ asset('assets/images/lagingoding-logo.png') }}" alt="LagiNgoding-logo" width="112">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav navbar-nav-link">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/public/lagiNgoding/index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/public/lagiNgoding/views/bootcamp.html">Bootcamp</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Kelas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                  </li>
              </ul>
              <ul class="navbar-nav">

                  @if (!Auth::check())
                      <li class="nav-item">

                          <button class="btn btn-outline-success" type="button"
                              onclick="location.href='{{ route('login') }}';">Login/Registrasi</button>
                      </li>
                  @else
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              {{ Auth::user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">My Profile</a></li>

                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item">
                                      <form action="{{ route('logout') }}" method="post">@csrf <button
                                              class="form-control" type="submit">Logout</button></form>
                                  </a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
