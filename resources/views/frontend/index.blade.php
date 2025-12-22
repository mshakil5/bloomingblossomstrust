@extends('frontend.layouts.master')

@section('content')

<style>




  @media (max-width: 767.98px) { 
    .hero_area h1 {
      font-size: 2rem !important;
    }

    .right-butterfly {
      right: 20px !important;
      width: 60px !important;
      height: auto !important;
    }

    .left-butterfly {
      top: 200px !important;
      left: 20px !important;
      width: 60px !important;
      height: auto !important;
    }
    .banner-title{
      color: #b7236f !important;
      font-size: 7rem;
      font-family: "DarkerGrotesque-semibold";
    }
  }
</style>

<!-- Include Flatpickr CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



  <header class="hero_area position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="carousel-caption text-center">
                  {{-- @if ($slider->title)
                  <h1 class="display-5 fw-bold"
                      style="color: #b7236f;font-size: 7rem;font-family: DarkerGrotesque-semibold">
                      {{ $slider->title ?? '' }}
                  </h1>
                  @endif --}}

                  <div class="display-5 fw-bold banner-title" style="font-size: 7rem;color: #bf1354">
                      Soaring Beyond Potential
                  </div>

                    @if($slider->description)<p class="lead">{{ $slider->description ?? '' }}</p>@endif
                    @if($slider->link)<p><a class="btn btn-primary btn-lg" href="{{ $slider->link ?? '' }}">Learn more</a></p>@endif
                </div>
            </div>
            <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
            <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
        @endforeach
      </div>
    </div>
  </header>



  
  <!-- Butterfly top-left -->
<img src="{{ asset('resources/frontend/images/butterfly-left.png') }}" class="left-butterfly"
      alt="Butterfly Left" 
      style="position: absolute; top: 200px; left: 180px; width: 100px; height: auto; opacity: 0.9; animation: flyLeft 6s infinite ease-in-out;">

<!-- Butterfly top-right -->
<img src="{{ asset('resources/frontend/images/butterfly-right.png') }}" class="right-butterfly"
      alt="Butterfly Right" 
      style="position: absolute; top: 200px; right: 180px; width: 100px; height: auto; opacity: 0.9; animation: flyRight 6s infinite ease-in-out;">

  <!-- =======================
       About section (two-column)
       ======================= -->

<section id="about" class="about-section py-5" >

  <style>
    /* control background size and make it responsive */
    #about {
      background-size: 300px auto; /* reduce the image width to 300px, keep aspect ratio */
    }

    .accent {
      color: #bf1354;
      font-size: 85px;
      font-weight: 700;
      text-align: center;
    }

    .title {
          font-size: 80px;
          text-align: center;
          line-height: 1;
          color: #4CA30D;
    }

    @media (max-width: 991.98px) {
      #about {
        background-size: 220px auto;
        background-position: right 20px;
      }

      .title {
        font-size: 30px;
      }

      .accent {
        color: #bf1354;
        font-size: 30px;
        font-weight: 700;
        text-align: center;
      }

      .nav-tabs .nav-link {
        font-size: 13px !important;
        padding: 3px !important;
      }

    }

    @media (max-width: 575.98px) {
      #about {
        background-size: 150px auto;
        background-position: right top;
      }
    }
  </style>

  <div class="container">

    <div class="text-center mb-5">
      <h2 class="big-title pb-5">About Us</h2>
      <p>
        Blooming Blossoms Trust sprouted the first seeds of hope in 2007, rising beyond the stigma involved. 
        As teachers and parents we saw the pain of SEN children trapped in mainstream cocoons, of bright and gifted children expected to toe the line and suppress their ideas and questions. 
        Ever since, we remain committed to helping SEN and neurodivergent children and young people flourish. 
        We are here to be with them where they are, to help them break free from barriers and source their own strengths. 
        <br>
      </p>
    </div>


  </div>
  
</section>

<section class="soar-section position-relative py-3">
  
  <div class="small-butterfly py-3" style="background-image: url('butterfly2.gif')"></div>

  <div class="container py-3">
    <div class="text-center py-3">

      <h2 class="title">
        We are here to help them <span class="accent">soar.</span> <br>
        Beyond their  <span class="accent">potential.</span> 
      </h2>
        
      </p>
    </div>



  </div>
</section>




<style>
/* WRAPPER */
.custom-tabs-wrapper {
    width: 100%;
    overflow-x: auto;
    white-space: nowrap;
}

/* TAB LIST */
.custom-tabs {
    display: flex;
    width: 100%;
    border-bottom: 2px solid #e6e6e6;
    padding: 0;
    margin: 0;
}

/* TAB ITEM */
.custom-tab-item {
    flex: 1;
    list-style: none;
}

/* TAB BUTTON */
.custom-tab-btn {
    width: 100%;
    padding: 7px 20px;
    font-weight: 600;
    font-size: 24px;
    border: none;
    background: #4CA30D;
    color: #fff;
    text-align: center;
    transition: 0.3s ease;
    border-right: 1px solid #ddd;
    position: relative;
    overflow: hidden;
}

/* ARROW SHADE */
.custom-tab-btn::after {
    content: "";
    position: absolute;
    right: -25px;
    top: 0;
    width: 25px;
    height: 100%;
    background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.08));
    clip-path: polygon(0 0, 100% 50%, 0 100%);
    transition: 0.3s;
}

.custom-tab-btn:hover::after {
    background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.15));
}

/* REMOVE ARROW FROM LAST ITEM */
.custom-tab-item:last-child .custom-tab-btn::after {
    display: none;
}

.custom-tab-item:last-child .custom-tab-btn {
    border-right: none;
}

/* HOVER */
.custom-tab-btn:hover {
    background: #bf1354;
}

/* ACTIVE TAB */
.custom-tab-btn.active {
    background: #bf1354;
    color: #fff;
}
.custom-tab-btn.active::after {
    background: #0f6f63;
    opacity: 0.5;
}

/* TAB CONTENT */
.custom-tab-content {
    background: #ffffff;
    border-top: none;
}

/* MOBILE */
@media(max-width: 575px) {
    .custom-tab-btn {
        font-size: 14px;
        padding: 12px 10px;
    }
}
</style>



<section class="service-tabs-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <!-- TAB HEADERS -->
        <div class="custom-tabs-wrapper">
          <ul class="custom-tabs nav nav-tabs" id="serviceTabs" role="tablist">
            @foreach ($services as $key => $service)
                <li class="custom-tab-item" role="presentation">
                  <button 
                    class="custom-tab-btn {{ $key == 0 ? 'active' : '' }}" 
                    id="tab-{{ $service->id }}" 
                    data-bs-toggle="tab" 
                    data-bs-target="#pane-{{ $service->id }}"
                    type="button"
                    role="tab">
                      {{ $service->title }}
                  </button>
                </li>
            @endforeach
          </ul>
        </div>

        <!-- TAB CONTENT -->
        <div class="tab-content custom-tab-content mt-3" id="serviceTabContent">
          @foreach ($services as $key => $service)
              <div 
                class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" 
                id="pane-{{ $service->id }}"
                role="tabpanel">
                {!! $service->long_desc !!}
              </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>



<section class="py-2" style="
  background: linear-gradient(
    180deg,
    #fff9f4 0%,
    #fff9f4 100%
  );
">
</section>

<!-- ===== Our Projects Section ===== -->
<section id="our-rooms" class="">
  <div class="container">
    <div class="text-center mb-5">
      {{-- <h3 class="h5 text-uppercase text-muted mb-2">Excellent Nursery Environment</h3> --}}
      <h2 class="big-title py-3">Our Projects</h2>
    </div>

    <!-- Swiper container -->
    <div class="swiper roomSwiper">
      <div class="swiper-wrapper py-5">

        @foreach ($projects as $project)
            <div class="swiper-slide">
              <div class="room-card">
                <div class="room-img">
                  <img src="{{asset('images/content/'. $project->feature_image)}}" alt="{{$project->short_title}}">
                </div>
                <div class="room-content text-center" style="min-height: 164px;">
                  <h4 class="mb-2" style="color: #4CA30D">{{$project->short_title}}</h4>
                  {{-- <p class="text-muted mb-3">
                    {{$project->long_title}}
                  </p> --}}
                  <a href="{{ route('agegroup', $project->slug) }}" class="btn btn-primary btn-lg rounded-pill px-4">Read More</a>
                </div>
              </div>
            </div>
        @endforeach                

      </div>
      <!-- Swiper controls -->
      <div class="swiper-pagination mt-5"></div>
    </div>
  </div>
</section>



<section class="py-5" style="
  background: linear-gradient(
    180deg,
    #fff9f4 0%,
    #fff9f4 100%
  );
">
</section>

<!-- ===== Call Back Request Section ===== -->
<section id="callback" class="py-5 position-relative">
  <!-- Decorative background (SVG + gradient) -->
  <div class="callback-bg" aria-hidden="true" id="contact">
    <!-- A subtle decorative SVG of clouds / birds - keeps the nursery theme -->
    <svg viewBox="0 0 1000 400" preserveAspectRatio="xMidYMid slice" class="w-100 h-100">
      <defs>
        <linearGradient id="cbg" x1="0" x2="1">
          <stop offset="0" stop-color="#fff6f2"/>
          <stop offset="1" stop-color="#fffefc"/>
        </linearGradient>
      </defs>
      <rect width="100%" height="100%" fill="url(#cbg)"/>
      <!-- simple shapes for soft clouds & birds -->
      <g transform="translate(40,20)" fill="none" stroke="#ffd0a6" stroke-width="3" opacity="0.35">
        <path d="M10 30 q20 -22 40 0" />
        <path d="M60 26 q16 -14 32 0" />
      </g>
      <g transform="translate(800,10)" opacity="0.06" fill="#ffb87a">
        <circle cx="0" cy="0" r="120"/>
      </g>
    </svg>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-11">
        <div class="card callback-card overflow-hidden">
          <div class="row g-0">
            <!-- Left: form content -->
            <div class="col-lg-12">
              <div class="p-5 h-100 d-flex flex-column justify-content-center">
                <div class="mb-3">
                  {{-- <div class="small-title text-uppercase text-muted mb-1">Get in touch</div> --}}
                  <h3 class="fw-bold">GET IN TOUCH</h3>
                  <p class="text-muted mb-0">We are passionate about improving the futures of disadvantaged children and young people. Want to learn more about the extent of our services? Get in touch with us today and swing by for a visit!</p>
                </div>

                
                @if(session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                  <div class="alert alert-danger" role="alert">
                    <h6 class="alert-heading mb-2">Please fix the following errors:</h6>
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <!-- Form -->
                <form action="{{ route('contact.store') }}" method="POST" role="form" >
                    @csrf
                    <div class="row g-3">

                      <!-- First name -->
                      <div class="col-12 col-md-6">
                        <label class="form-label visually-hidden" for="first_name">First name</label>
                        <input id="first_name" 
                              name="first_name" 
                              type="text" 
                              class="form-control @error('first_name') is-invalid @enderror"
                              placeholder="First name" 
                              value="{{ old('first_name') }}" 
                              required>
                        @error('first_name')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Last name -->
                      <div class="col-12 col-md-6">
                        <label class="form-label visually-hidden" for="last_name">Last name</label>
                        <input id="last_name" 
                              name="last_name" 
                              type="text" 
                              class="form-control @error('last_name') is-invalid @enderror"
                              placeholder="Last name"
                              value="{{ old('last_name') }}">
                        @error('last_name')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Email -->
                      <div class="col-12 col-md-6">
                        <label class="form-label visually-hidden" for="email">Email</label>
                        <input id="email" 
                              name="email" 
                              type="email" 
                              class="form-control @error('email') is-invalid @enderror"
                              placeholder="Email" 
                              value="{{ old('email') }}" 
                              required>
                        @error('email')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Phone -->
                      <div class="col-12 col-md-6">
                        <label class="form-label visually-hidden" for="phone">Phone</label>
                        <input id="phone" 
                              name="phone" 
                              type="text" 
                              class="form-control  @error('phone') is-invalid @enderror"
                              placeholder="Phone" 
                              value="{{ old('phone') }}" 
                              required>
                        @error('phone')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Subject -->
                      <div class="col-12 col-md-12">
                        <label class="form-label visually-hidden" for="subject">Subject</label>
                        <input id="subject" 
                              name="subject" 
                              type="text" 
                              class="form-control  @error('subject') is-invalid @enderror"
                              placeholder="Subject" 
                              value="{{ old('subject') }}" 
                              required>
                        @error('subject')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>


                      <!-- Message -->
                      <div class="col-12">
                        <label class="form-label visually-hidden" for="message">Message</label>
                        <textarea id="message" 
                                  name="message" 
                                  rows="4" 
                                  class="form-control @error('message') is-invalid @enderror" 
                                  placeholder="Message" required>{{ old('message') }}</textarea>
                        @error('message')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Consent -->
                      <div class="col-12">
                        <div class="form-check">
                          <input id="consent" 
                                name="consent" 
                                class="form-check-input @error('consent') is-invalid @enderror" 
                                type="checkbox" 
                                {{ old('consent') ? 'checked' : '' }} 
                                required>
                          <label class="form-check-label small" for="consent">
                            I consent to my submitted data being collected and stored in accordance with the 
                            <a href="{{ route('privacy-policy') }}" target="_blank" rel="noopener">Privacy Policy</a>.
                          </label>
                        </div>
                        @error('consent')
                          <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                      </div>

                      <!-- Submit button -->
                      <div class="col-12 d-grid">
                        <button id="callbackSubmit" class="btn btn-primary btn-lg" type="submit">
                          <span class="btn-text">Send</span>
                          <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                        </button>
                      </div>

                    </div>
                  </form>


                <div id="formFeedback" class="mt-3" role="status" aria-live="polite"></div>
              </div>
            </div>



          </div> <!-- /.row -->
        </div> <!-- /.card -->
      </div>
    </div>
  </div>
</section>








<!-- ===== Smart Full-Width Gallery ===== -->
<section id="smart-gallery" class=" bg-white">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="big-title py-3 pb-5" >Our Gallery</h2>
      </div>
    </div>

    <!-- Gallery grid: full-width background but images contained -->
    <div class="gallery-wrap">
      <div class="container">
        <div id="galleryGrid" class="row g-3">
          @php $index = 0; @endphp
          @foreach ($galleries as $gallery)
            @foreach ($gallery->images as $item)
              <div class="col-6 col-md-3">
                <div class="gallery-item {{ $index >= 4 ? 'hidden' : '' }}" data-index="{{ $index }}" tabindex="0">
                  <img src="{{ asset('images/content/' . $item->image) }}" alt="{{ $item->short_title }}" loading="lazy" data-full="{{ asset('images/content/' . $item->image) }}">
                  {{-- <div class="thumb-overlay"><span>View</span></div> --}}
                </div>
              </div>
              @php $index++; @endphp
            @endforeach
          @endforeach
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.gallery-wrap -->

    <!-- See more button -->
    <div class="container text-center mt-4">
      <button id="galleryToggleBtn" class="btn btn-success btn-lg rounded-pill px-4" style="{{ $index <= 4 ? 'display: none;' : '' }}">See more</button>
    </div>
  </div>

  <!-- LIGHTBOX / OVERLAY 
  <div id="galleryLightbox" class="gallery-lightbox d-none" aria-hidden="true">
    <button class="lb-close" aria-label="Close (Esc)">&times;</button>
    <button class="lb-prev" aria-label="Previous (Left)">&lsaquo;</button>
    <button class="lb-next" aria-label="Next (Right)">&rsaquo;</button>
    <div class="lb-content">
      <img id="lbImage" src="" alt="Full size image">
    </div>
  </div>-->
</section>

<style>
  .hidden {
    display: none !important;
  }
</style>

<!-- ===== FAQ Section ===== -->
<section id="faq" class="faq-section py-5">
  <div class="container">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="big-title py-3 pb-5">Frequently asked questions:</h2>
      </div>
    </div>
    <div class="row align-items-start gy-4">

      <!-- RIGHT: Accordion -->
      <div class="col-lg-12">
        <div class="accordion faq-accordion mt-4" id="faqAccordion">


          @foreach ($faqs as $key => $faq)
              
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-{{ $key }}">
              <button class="{{ $key == 0 ? 'accordion-button' : 'accordion-button collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $key }}"  >
                {{ $faq->question }}
              </button>
            </h2>
            <div id="collapse-{{ $key }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="faq-{{ $key }}" data-bs-parent="#faqAccordion">
              <div class="accordion-body" >
                {!! $faq->answer !!}
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>

    </div>
  </div>
</section>


  <style>
    /* --- Section Styling --- */
    .clients-section {
      overflow: hidden;
      position: relative;
      background-color: #fbfbfb;
    }



    /* --- Carousel Container --- */
    .clients-slider {
      display: flex;
      align-items: center;
      white-space: nowrap;
      animation: scrollLeft 25s linear infinite;
    }

    /* --- Single Logo --- */
    .client-logo {
      display: inline-block;
      margin: 0 40px;
      /* transition: transform 0.4s ease, box-shadow 0.4s ease, filter 0.4s ease;
      filter: grayscale(100%);
      opacity: 0.8; */
    }

    .client-logo img {
      max-height: 185px;
      width: auto;
    }

    /* --- Hover Effects --- */
    .client-logo:hover {
      transform: scale(1.15);
      filter: grayscale(0%);
      opacity: 1;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      z-index: 2;
    }

    /* --- Pause Animation on Hover --- */
    .clients-slider:hover {
      animation-play-state: paused;
    }

    /* --- Keyframes for Infinite Scroll --- */
    @keyframes scrollLeft {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-50%);
      }
    }

    /* --- Responsive Adjustments --- */
    @media (max-width: 768px) {
      .client-logo {
        margin: 0 25px;
      }
      .client-logo img {
        max-height: 130px;
      }
    }

    @media (max-width: 576px) {
      .clients-section {
        padding: 60px 0;
      }
      .client-logo img {
        max-height: 130px;
      }
    }
  </style>



  <section class="clients-section text-center py-5">
    <div class="container">
      <h2 class="big-title mb-5"> Our Funders </h2>
      <p class="py-4">
        Blooming Blossoms is deeply grateful to all our funders for their support, without which our work would not be possible. Together we can help disadvantaged children young people unfurl and approach a blossoming future with skills and confidence.
      </p>
      <div class="clients-slider">
        <!-- Client Logos -->
        
        @foreach (\App\Models\Service::orderByRaw('sl = 0, sl ASC')->orderBy('id', 'desc')->where('type', 2)->where('status', 1)->get(); as $donor)
        <div class="client-logo"><img src="{{asset('images/service/' .$donor->image )}}" alt="{{ $donor->title }}"></div>
        @endforeach
        

      </div>
    </div>
  </section>

<!-- ===== Location & Contact Section ===== -->
<section id="location" class="py-5 position-relative">
  <div class="location-bg py-5" aria-hidden="true">
    <svg viewBox="0 0 1000 200" preserveAspectRatio="xMidYMid slice" class="w-100 h-100">
      <defs>
        <linearGradient id="locGrad" x1="0" x2="1">
          <stop offset="0" stop-color="#fff7f2"/>
          <stop offset="1" stop-color="#fffefc"/>
        </linearGradient>
      </defs>
      <rect width="100%" height="100%" fill="url(#locGrad)"/>
      <!-- decorative birds -->
      <g transform="translate(40,20)" fill="none" stroke="#ffc188" stroke-width="2.5" opacity="0.3">
        <path d="M10 30 q20 -20 40 0" />
        <path d="M60 25 q16 -15 32 0" />
      </g>
    </svg>
  </div>

  <div class="container position-relative py-5">
    <div class="row align-items-center gy-4">
      <!-- Left side: Info -->
      <div class="col-lg-5">
        <div class="p-4 p-lg-0">
          {{-- <div class="small-title text-uppercase text-muted mb-1">Find us</div> --}}
          <div class="big-title text-start mb-3">Get in touch</div>
          <p class="text-muted mb-4">
            
              We'd love to hear from you.
          </p>

          <ul class="list-unstyled">
            <li class="d-flex align-items-start mb-3">
              <div>
                <strong>Address</strong><br>
                {{$company->address1}}
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <div>
                <strong>Phone</strong><br>
                <a href="tel:{{$company->phone1}}" class="text-decoration-none text-dark">{{$company->phone1}}</a>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <div>
                <strong>Email</strong><br>
                <a href="mailto:{{$company->email1}}" class="text-decoration-none text-dark">{{$company->email1}}</a>
              </div>
            </li>
            {{-- <li class="d-flex align-items-start">
              <div class="icon-wrap me-3"><i class="bi bi-clock-fill"></i></div>
              <div>
                <strong>Opening Hours</strong><br>
                Mon–Fri: 7:30 AM – 6:00 PM<br>
                Sat–Sun: Closed
              </div>
            </li> --}}
          </ul>

          <div class="mt-4">
            <a href="#callback" class="btn btn-primary btn-lg rounded-pill px-4">Submit your Query</a>
          </div>
        </div>
      </div>

      <!-- Right side: Map -->
      <div class="col-lg-7">
        <div class="map-wrapper rounded-4 overflow-hidden">
          <!-- Replace src with your actual Google Map embed URL -->
          <iframe
            src="{{$company->google_map}}"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        let correctAnswer = num1 + num2;
        $('#captcha-question').text(`What is ${num1} + ${num2}? *`);

        $('.php-email-form').on('submit', function(e) {
            let userAnswer = parseInt($('#captcha-answer').val());
            if(userAnswer !== correctAnswer) {
                e.preventDefault();
                $('#captcha-error').removeClass('d-none').text('Incorrect answer');
            } else {
                $('#captcha-error').addClass('d-none');
                $('#sending-text').removeClass('d-none');
            }
        });
    });
</script>

<script>
$(document).ready(function () {
  // Handle "See more" button click
  $('#galleryToggleBtn').on('click', function () {
    // Select the next 4 hidden gallery items
    const hiddenItems = $('.gallery-item.hidden').slice(0, 4);
    
    // Show the next 4 items with a fade-in effect
    hiddenItems.removeClass('hidden').hide().fadeIn(500);
    
    // Hide the button if no more hidden items remain
    if ($('.gallery-item.hidden').length === 0) {
      $('#galleryToggleBtn').fadeOut(300);
    }
  });

});
</script>

<script>
  $(document).ready(function() {
    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        var targetId = $(e.target).attr('data-bs-target').replace('#', '');
        
        // Hide all images
        $('.tab-image').removeClass('active');
        
        // Show the image with the same id
        $('#image-' + targetId).addClass('active');
    });
  });
</script>



@endsection