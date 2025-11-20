<footer class="site-footer">
  <div class="footer-top py-5">
    <div class="container">
      <div class="row gy-4 align-items-start">
        <!-- Brand + short -->
        <div class="col-12 col-md-4">
          <a class="footer-brand d-inline-flex align-items-center mb-3" href="#">
            <img src="{{ asset('images/company/' . $company->company_logo) }}" alt="{{$company->company_name}}" style="height:144px; object-fit:contain;">
          </a>
        </div>

        <!-- Columns: on small screens these become accordion items -->
        <div class="col-12 col-md-8">
          <div class="row gy-3">
            <!-- Use collapse on xs for nicer UX -->
            <div class="col-6 col-lg-4">
              <h6 class="mb-3">Quick Links</h6>
              <ul class="list-unstyled footer-links mb-0">
                <li><a href="{{ route('aboutUs') }}" class="">About Us</a></li>
                <li><a href="{{ route('getOurDonors') }}" class="">Funders</a></li>
                <li><a href="{{ route('donate') }}" class="">Donate</a></li>
                <li><a href="{{ route('home') }}#contact" class="">Contact</a></li>
              </ul>
            </div>

            <div class="col-6 col-lg-4">
              <h6 class="mb-3">Projects</h6>
              <ul class="list-unstyled footer-links mb-0">
                
                @foreach (\App\Models\Content::with('category')->where('type', 2)->orderby('id', 'ASC')->get() as $key => $projects)

                <li><a href="{{ route('agegroup', $projects->slug) }}" class="">{{ $projects->short_title }}</a></li>
                    
                @endforeach

              </ul>
            </div>

            <div class="col-12 col-lg-4">
              <h6 class="mb-3">Contact</h6>
              <address class=" mb-3" style="font-style:normal;">
                {{$company->address1}}<br>
              </address>
                <a href="mailto:{{$company->email1}}" class="" style="color: #97b766; text-decoration: none; " >{{$company->email1}}</a><br>
                <a href="tel:{{$company->phone1}}" class="" style=" text-decoration: none; color: #97b766" >{{$company->phone1}}</a>

            </div>
          </div> <!-- /.row inside right side -->
        </div> <!-- /.col-md-8 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.footer-top -->



  <!-- bottom: copyright, small links -->
  <div class="footer-bottom py-3" style="background:#031826; color:#97b766;">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
        {!! $company->copyright !!}

    </div>
  </div>
</footer>

<!-- Optional small inline styles to tune the footer look -->
<style>
  .site-footer .footer-links a { text-decoration: none; color: #97b766;font-weight: 600; font-size: 14px;}
  .site-footer .footer-links a:hover { color: #cb749a !important;font-weight: 700; }
  .site-footer .btn-outline-light { border-color: rgba(255,255,255,0.14); }
  .site-footer .footer-top .footer-brand img { filter: drop-shadow(0 4px 12px rgba(0,0,0,0.25)); }
  /* subtle hover */
  .site-footer .footer-links li { margin-bottom: .5rem; }
  .site-footer .social .btn { width:36px; height:36px; display:inline-flex; align-items:center; justify-content:center; padding:0; }
  @media (max-width:575.98px) {
    /* stack brand & quick links more tightly on very small screens */
    .site-footer .footer-top { padding-top:2.25rem; padding-bottom:2.25rem; }
    .site-footer .footer-middle form .col-8 { order:2; width:100%; }
    .site-footer .footer-middle form .col-4 { order:3; width:100%; }
  }
  h6 {
    font-size: 1.2rem;
  }
</style>
