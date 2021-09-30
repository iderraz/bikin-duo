  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Bikin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[0]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[1]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[2]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[3]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[4]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[5]->contenu) }}</a></li>
            <li><a class="nav-link scrollto active" href="#hero">{{ ($navbar[6]->contenu) }}</a></li>
          @auth

          <li>
              <a href="{{ url('/dashboard') }}">Dashboard</a>
          </li>

          <li >
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-dropdown-link>
              </form>
          </li>

      @else

          <li>
              <a href="{{ route('login') }}">Log in</a>
          </li>

          @if (Route::has('register'))

              <li >
                  <a href="{{ route('register') }}">Register</a>
              </li>
          @endif

      @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

