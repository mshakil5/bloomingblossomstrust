<footer class="site-footer">
  <div class="footer-top py-5">
    <div class="container">
      <div class="row gy-4 align-items-start text-center text-md-start">
        
        <div class="col-12 col-md-4">
          <a class="footer-brand d-inline-flex align-items-center mb-3" href="#">
            <img src="{{ asset('images/company/' . $company->company_logo) }}" alt="{{$company->company_name}}" style="height:144px; object-fit:contain;">
          </a>
        </div>

        <div class="col-12 col-md-8">
          <div class="row gy-5"> <div class="col-12 col-lg-4">
              <h6 class="mb-3">Quick Links</h6>
              <ul class="list-unstyled footer-links mb-0">
                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                <li><a href="{{ route('getOurDonors') }}">Funders</a></li>
                <li><a href="{{ route('donate') }}">Donate</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
              </ul>
            </div>

            <div class="col-12 col-lg-4">
              <h6 class="mb-3">Projects</h6>
              <ul class="list-unstyled footer-links mb-0">
                @foreach (\App\Models\Content::with('category')->where('type', 2)->orderby('id', 'ASC')->get() as $projects)
                  <li><a href="{{ route('agegroup', $projects->slug) }}">{{ $projects->short_title }}</a></li>
                @endforeach
              </ul>
            </div>

            <div class="col-12 col-lg-4">
              <h6 class="mb-3">Contact</h6>
              <address class="mb-3" style="font-style:normal; font-size: 20px;">
                {{$company->address1}}
              </address>
              <div class="d-flex flex-column gap-1">
                <a href="mailto:{{$company->email1}}" style="color: #4CA30D; text-decoration: none; font-size: 20px;">{{$company->email1}}</a>
                <a href="tel:{{$company->phone1}}" style="text-decoration: none; color: #4CA30D; font-size: 20px;">{{$company->phone1}}</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom py-2" style="background:#4CA30D; color:#031826;">
    <div class="container text-center d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
        {!! $company->copyright !!}
    </div>
  </div>
</footer>

<!-- Optional small inline styles to tune the footer look -->
<style>
  .site-footer .footer-links a { text-decoration: none; color: #031826; font-weight: 600; font-size: 22px; }
  .site-footer .footer-links a:hover { color: #cb749a !important; font-weight: 700; }
  .site-footer .footer-links li { margin-bottom: .5rem; }
  
  h6 { font-size: 1.5rem; }

  /* Mobile Specific Adjustments */
  @media (max-width: 767.98px) {
    .footer-brand {
      width: 100%;
      justify-content: center; /* Centers the logo image container */
    }
    
    .site-footer .footer-top {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }

    /* Adjust font size slightly if it overflows on very small phones */
    .site-footer .footer-links a, 
    address, 
    .site-footer a[href^="tel"], 
    .site-footer a[href^="mailto"] {
      font-size: 18px !important; 
    }
  }
</style>