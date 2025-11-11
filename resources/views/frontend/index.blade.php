@extends('frontend.layouts.master')

@section('content')

<style>
  
    /* --- Butterfly Animation --- */
    .butterfly {
      position: absolute;
      width: 200px;
      height: 200px;
      background-image: url('butterfly2.gif'); /* Butterfly icon */
      background-size: contain;
      background-repeat: no-repeat;
      animation: flyAcross 10s linear infinite;
      opacity: 0.9;
    }

    /* Animation Path */
    @keyframes flyAcross {
      0% {
        left: -10%;
        top: 60%;
        transform: scale(0.8) rotate(10deg);
      }
      25% {
        top: 30%;
        transform: scale(1) rotate(-10deg);
      }
      50% {
        top: 50%;
        transform: scale(1.1) rotate(15deg);
      }
      75% {
        top: 20%;
        transform: scale(1) rotate(-5deg);
      }
      100% {
        left: 110%;
        top: 40%;
        transform: scale(0.9) rotate(10deg);
      }
    }

    /* Slightly different speeds for each butterfly */
    .butterfly:nth-child(1) { animation-duration: 12s; top: 40%; }
    .butterfly:nth-child(2) { animation-duration: 15s; animation-delay: 3s; top: 55%; width: 100px; }
    .butterfly:nth-child(3) { animation-duration: 18s; animation-delay: 6s; top: 30%; width: 50px; }
</style>


<!-- Include Flatpickr CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- =======================
       Slider / Hero Area
       ======================= -->
  <header class="hero_area position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> --}}

      <div class="carousel-inner">

        @foreach ($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                {{-- <img src="{{'images/slider/'.$slider->image}}" class="d-block w-100" alt="Play area"> --}}
                <div class="carousel-caption text-center">
                    @if ($slider->title)<h1 class="display-5 fw-bold " style="color:#f53399">{{ $slider->title ?? '' }}</h1>@endif
                    @if($slider->description)<p class="lead">{{ $slider->description ?? '' }}</p>@endif
                    @if($slider->link)<p><a class="btn btn-primary btn-lg" href="{{ $slider->link ?? '' }}">Learn more</a></p>@endif
                </div>
            </div>

            
            <!-- Butterflies -->
            <div class="butterfly"></div>
            <div class="butterfly"></div>
            <div class="butterfly"></div>

        @endforeach
      </div>

      {{-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> --}}
    </div>

    <!-- ===== Waves ===== -->
    {{-- <svg class="waves" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave"
          d="M-160 44c30 0 58-18 88-18s58 18 88 18
           58-18 88-18 58 18 88 18v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
      </g>
    </svg> --}}
  </header>



  
  <!-- Butterfly top-left -->
<img src="{{ asset('resources/frontend/images/butterfly-left.png') }}" 
      alt="Butterfly Left" 
      style="position: absolute; top: 200px; left: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyLeft 6s infinite ease-in-out;">

<!-- Butterfly top-right -->
<img src="{{ asset('resources/frontend/images/butterfly-right.png') }}" 
      alt="Butterfly Right" 
      style="position: absolute; top: 220px; right: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyRight 6s infinite ease-in-out;">

  <!-- =======================
       About section (two-column)
       ======================= -->
<style>
  .accent {
    color: #97b766;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
  }

</style>

<section id="about" class="about-section py-5 position-relative" style="font-family: Tahoma, sans-serif; color: #000000;">

  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold">About Us</h2>
      <p>
        Blooming Blossoms Trust sprouted the first seeds of hope in 2007, rising beyond the stigma involved. 
        As teachers and parents we saw the pain of SEN children trapped in mainstream cocoons, of bright and gifted children expected to toe the line and suppress their ideas and questions. 
        Ever since, we remain committed to helping SEN and neurodivergent children and young people flourish. 
        We are here to be with them where they are, to help them break free from barriers and source their own strengths. 
        <br>
        <span class="accent">We are here to help them Soar. Beyond their potential.</span>
        
      </p>
    </div>



    <div class="row g-4 align-items-start">

      <!-- LEFT: Images area (no header title as requested) -->
        <div class="col-lg-5">
            <div class="about-images text-center position-relative">
                @foreach ($services as $key => $service)
                    <div class="tab-image {{ $key == 0 ? 'active' : '' }}" id="image-{{ $service->id }}">
                        <img src="{{ asset('images/service/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded shadow">
                    </div>
                @endforeach
            </div>
        </div>


      <!-- RIGHT: Text + small title + big title + centered tabs -->
      <div class="col-lg-7">
        <div class="px-md-3">
          <!-- Centered tabs -->
          <ul class="nav nav-tabs pb-3" id="ageTabs" role="tablist">

            @php
                $icons = [
                          0 => '#fe6bb5',
                          1 => '#97b766',
                          2 => '#212121',
                          3 => '#8ce500',
                          4 => '#e74c3c',
                          5 => '#f1c40f',
                  ];
            @endphp

            @foreach ($services as $key => $service)
                <li class="nav-item" role="presentation">
                  <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="{{$service->id}}-tab" data-bs-toggle="tab" data-bs-target="#{{$service->id}}" type="button" role="tab" aria-controls="{{$service->id}}" aria-selected="true" style="background-color: {{$icons[$key] ?? ''}}; color:#fff">
                    {{$service->title}}
                  </button>
                </li>
            @endforeach

          
          </ul>

          <!-- Tab panes -->
          <div class="tab-content mt-3" id="ageTabsContent">

            
            @php
                $icons = [
                          0 => '#fe6bb5',
                          1 => '#97b766',
                          2 => '#212121',
                          3 => '#8ce500',
                          4 => '#e74c3c',
                          5 => '#f1c40f',
                  ];
            @endphp

            @foreach ($services as $key => $service)
                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }} " id="{{$service->id}}" role="tabpanel" aria-labelledby="{{$service->id}}-tab" style="background-color: {!! $icons[$key] ?? '' !!}">
                  {!! $service->long_desc !!}
                </div>
            @endforeach

          </div>





        </div>
      </div>
    </div>
  </div>
</section>





<!-- ===== Our Projects Section ===== -->
<section id="our-rooms" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      {{-- <h3 class="h5 text-uppercase text-muted mb-2">Excellent Nursery Environment</h3> --}}
      <h2 class="fw-bold">Our Projects</h2>
    </div>

    <!-- Swiper container -->
    <div class="swiper roomSwiper">
      <div class="swiper-wrapper">

        @foreach ($projects as $project)
            <div class="swiper-slide">
              <div class="room-card">
                <div class="room-img">
                  <img src="{{asset('images/content/'. $project->feature_image)}}" alt="{{$project->short_title}}">
                </div>
                <div class="room-content text-center">
                  <h4 class="fw-bold mb-2" style="color: #97b766">{{$project->short_title}}</h4>
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
      <div class="swiper-pagination mt-4"></div>
    </div>
  </div>
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
        <div class="card callback-card shadow-lg overflow-hidden">
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





  <!-- ===== Facilities / Features Section ===== -->
<section id="facilities" class="py-5 bg-white d-none">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- LEFT: Title + feature list -->
      <div class="col-lg-6 position-relative">
        <!-- Butterfly background image (centered, behind content) -->
        <div style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 0;
          opacity: 0.50;
          pointer-events: none;
          width: 250px;
          height: 250px;
          background: url('images/butterfly.jpg') center center/contain no-repeat;
        " aria-hidden="true"></div>
        <div class="pe-lg-4 position-relative" style="z-index:1;">
          <!-- Main heading (adapted from Busy Bees wording) -->
          <h3 class="h5 text-uppercase text-muted mb-2">About Title</h3>
          <h2 class="fw-bold mb-4">About page title here</h2>

          <p class="text-muted mb-4">
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
          </p>
          <p class=" text-muted mb-4">
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
          </p>
          <p class=" text-muted mb-4">
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
          </p>
          <p class=" text-muted mb-4">
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
              Here's a snapshot of some of the facilities and services we offer. Click or tap any item to learn more or ask during your visit.
          </p>

          <!-- Feature grid (icons + label + short) -->
          <div class="row d-none g-3">
            <!-- Feature item -->
            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <!-- change to any icon you prefer -->
              <span class="bi bi-car-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Parking</div>
              <small class="text-muted d-block">Ample on-site parking for families.</small>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <span class="bi bi-basket3-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Meals & Snacks</div>
              <small class="text-muted d-block">NHS accredited meals prepared on-site.</small>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <span class="bi bi-droplet-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Nappies & Wipes</div>
              <small class="text-muted d-block">Included in fees where appropriate.</small>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <span class="bi bi-shield-lock-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Secure Access</div>
              <small class="text-muted d-block">Intercom and secure entry systems.</small>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <span class="bi bi-phone-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Parent App</div>
              <small class="text-muted d-block">Daily updates: photos, naps, meals & messaging.</small>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="feature-card p-3 rounded-3 h-100 d-flex align-items-start gap-3">
                <div class="feature-icon rounded-circle d-flex align-items-center justify-content-center">
              <span class="bi bi-tree-fill fs-5" aria-hidden="true"></span>
                </div>
                <div>
              <div class="fw-semibold">Outdoor Play</div>
              <small class="text-muted d-block">Age-appropriate gardens and play spaces.</small>
                </div>
              </div>
            </div>

               


          </div>       <!-- CTA -->
          <div class="mt-4">
            <a href="#visit" class="btn btn-primary btn-lg rounded-pill px-4">Arrange a Visit</a>
            <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-4">Contact Us</a>
            <a class="btn btn-primary btn-lg rounded-pill px-4" target="_blank" href="https://app.famly.co/#/customInquiryForm/c6ae31a7-6348-4f58-89df-fd12ca88e5d7/to/eb08598d-c195-4399-acdf-9ed715df343e/submit">Enroll Now</a>
          </div>

          <!-- CTA -->
          <!-- <div class="mt-4">
        <a href="#visit" class="btn btn-outline-primary me-2">Book a Tour</a>
        <a href="#contact" class="btn btn-link">Contact Us</a>
          </div> -->
        </div>
      </div>

      <!-- RIGHT: Image / gallery -->
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="{{ asset('resources/frontend/images/facilities.jpeg')}}" alt="Nursery facilities" class="img-fluid rounded-3 w-100 shadow-sm">

        </div>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section>






<!-- ===== Smart Full-Width Gallery ===== -->
<section id="smart-gallery" class="py-5 bg-white">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="text-center mb-4">
        {{-- <div class="small-title text-uppercase text-muted mb-2">Our Gallery</div> --}}
        <h2 class="big-title">Our Gallery</h2>
        <p class="text-muted">Click any image to view it full size. Swipe or use the arrows to navigate.</p>
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
                  <div class="thumb-overlay"><span>View</span></div>
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

  <!-- LIGHTBOX / OVERLAY -->
  <div id="galleryLightbox" class="gallery-lightbox d-none" aria-hidden="true">
    <button class="lb-close" aria-label="Close (Esc)">&times;</button>
    <button class="lb-prev" aria-label="Previous (Left)">&lsaquo;</button>
    <button class="lb-next" aria-label="Next (Right)">&rsaquo;</button>
    <div class="lb-content">
      <img id="lbImage" src="" alt="Full size image">
    </div>
  </div>
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
        <h2 class="big-title">FAQ</h2>
      </div>
    </div>
    <div class="row align-items-start gy-4">

      <!-- RIGHT: Accordion -->
      <div class="col-lg-12">
        <div class="accordion faq-accordion" id="faqAccordion">


          @foreach ($faqs as $key => $faq)
              
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-{{ $key }}">
              <button class="{{ $key == 0 ? 'accordion-button' : 'accordion-button collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $key }}">
                {{ $faq->question }}
              </button>
            </h2>
            <div id="collapse-{{ $key }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="faq-{{ $key }}" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
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
      background: #f8f9fa;
      padding: 80px 0;
      overflow: hidden;
      position: relative;
    }

    .clients-section h2 {
      font-weight: 700;
      color: #333;
      margin-bottom: 40px;
      position: relative;
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
      transition: transform 0.4s ease, box-shadow 0.4s ease, filter 0.4s ease;
      filter: grayscale(100%);
      opacity: 0.8;
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
        max-height: 55px;
      }
    }

    @media (max-width: 576px) {
      .clients-section {
        padding: 60px 0;
      }
      .client-logo img {
        max-height: 45px;
      }
    }
  </style>



  <section class="clients-section text-center">
    <div class="container">
      <h2 style="color: #97b766"> Our Funders </h2>
      <p><strong>Blooming Blossoms is deeply grateful to all our funders for their support, without which our work would not be possible. Together we can help disadvantaged children young people unfurl and approach a blossoming future with skills and confidence.</strong></p>
      <div class="clients-slider">
        <!-- Client Logos -->
        
        @foreach (\App\Models\Service::orderByRaw('sl = 0, sl ASC')->orderBy('id', 'desc')->where('type', 2)->where('status', 1)->get(); as $donor)
        <div class="client-logo"><img src="{{asset('images/service/' .$donor->image )}}" alt="{{ $donor->title }}"></div>
        @endforeach
        

      </div>
    </div>
  </section>

<!-- ===== Location & Contact Section ===== -->
<section id="location" class="py-5 position-relative bg-light">
  <div class="location-bg" aria-hidden="true">
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

  <div class="container position-relative">
    <div class="row align-items-center gy-4">
      <!-- Left side: Info -->
      <div class="col-lg-5">
        <div class="p-4 p-lg-0">
          {{-- <div class="small-title text-uppercase text-muted mb-1">Find us</div> --}}
          <h3 class="fw-bold mb-3">Get in touch</h3>
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
        <div class="map-wrapper rounded-4 overflow-hidden shadow-sm">
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