  <!-- =======================
       Header / Navbar
       ======================= -->
<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('images/company/' . $company->company_logo) }}" alt="{{$company->company_name}}" height="60">
    </a>

    <!-- Mobile Menu Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center text-center text-lg-start text-uppercase">

        <li class="nav-item mx-2">
          <a class="nav-link d-flex flex-column align-items-center" href="{{ route('home') }}">
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link d-flex flex-column align-items-center" href="{{ route('aboutUs') }}">
            <span>About</span>
          </a>
        </li>

        
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="ageDropdown" data-bs-toggle="dropdown">
            <span>Projects</span>
          </a>
          <ul class="dropdown-menu text-center">
            @foreach (\App\Models\Content::with('category')->where('type', 2)->orderby('id', 'ASC')->get() as $key => $projects)
              <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ route('agegroup', $projects->slug) }}">
               {{ $projects->short_title }}
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item mx-2">
          <a class="nav-link d-flex flex-column align-items-center " href="{{ route('home') }}#contact">
            <span>Contact</span>
          </a>
        </li>

        
        <li class="nav-item mx-2">
          <a class="nav-link d-flex flex-column align-items-center" href="{{ route('getOurDonors') }}">
            <span>Funders</span>
          </a>
        </li>


        <li class="nav-item mx-2">
          <a class="nav-link d-flex flex-column align-items-center" href="{{ route('donate') }}">
            <span>Donate</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
