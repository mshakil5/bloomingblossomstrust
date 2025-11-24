  <!-- =======================
       Header / Navbar
       ======================= -->
<!-- Header Navbar -->



<nav class="navbar navbar-expand-lg navbar-light sticky-top">
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
            @foreach (\App\Models\Content::with('category')->where('type', 2)->orderby('id', 'ASC')->where('status', 1)->get() as $key => $projects)
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
          <a class="nav-link d-flex flex-column align-items-center" href="{{ route('donate') }}">
            <span>Donate</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<style>

  .navbar-scroll {
    background: #fff !important;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: background 0.3s ease, box-shadow 0.3s ease;
  }

</style>

<script>
document.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 20) {
        navbar.classList.add("navbar-scroll");
    } else {
        navbar.classList.remove("navbar-scroll");
    }
});
</script>