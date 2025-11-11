@extends('frontend.layouts.master')

@section('content')

<style>
  
/* ===== Section Background + Gradient Blend ===== */

.about-section {
  color: #ffffff;
  padding: 40px 0;
  position: relative;
  isolation: isolate;
}

/* Section 1 background */
.about-section.section-1 {
  background: #8fad60;
}

/* Section 2 background */
.about-section.section-2 {
  background: #cb1d62;
}

/* Section 3 background */
.about-section.section-3 {
  background: #63b184;
}

/* Remove any sharp edges between sections */
.about-section + .about-section {
  margin-top: 0;
}


    /* button */
    .vs-btn{
    display:inline-flex;align-items:center;gap:.6rem;
    padding:10px 18px;border-radius:10px;font-weight:700;
    background:linear-gradient(90deg, #98b86b, #96b766);
    color:white;text-decoration:none;border:none;
    box-shadow:0 8px 18px rgba(255,107,107,0.18);
    transition:transform .18s ease,box-shadow .18s ease;
    }

    .vs-btn:hover{transform:translateY(-3px);box-shadow:0 18px 30px rgba(255,107,107,0.14)}

    @media(min-width:992px){
    .about-section{padding:20px}
    }

</style>

<header class="hero_area position-relative">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption text-center">
              <h1 class="display-5 fw-bold"
                  style="color:#8fad60; font-size:3rem; font-family:'Roboto', sans-serif;">
                  About Us
              </h1>
            </div>
        </div>
        <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
        <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
        <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
    </div>
  </div>
</header>


<!-- Section-1 Start-->
<section class="about-section section-1">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-12 col-xl-12 order-0 order-lg-1">
          {!! $about1->long_title !!}
      </div>
  </div>
</section>
<!-- Section-1 End-->


<!-- Section-2 Start-->
<section class="about-section section-2">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-12 col-xl-12 order-0 order-lg-1">
          {!! $about1->long_description !!}
      </div>
  </div>
</section>
<!-- Section-2 End-->

<!-- Section-3 Start-->
<section class="about-section section-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="" >
          <img src="{{ asset('images/about/'. $about1->image)}}" alt="blooming blossoms trust" style="width: 100%;">
        </div>
      </div>
      <div class="col-lg-6 col-xl-5">
        <div class="ps-lg-4 pe-lg-2" >
          {!! $about1->short_description !!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section-3 End-->

<section class="about-section" aria-labelledby="about-heading">
  <div class="container">
    <div class="row g-4 align-items-center">
      <!-- Right: Content -->
      <div class="col-lg-12 text-center col-xl-12 order-0 order-lg-1">
          <div class="mt-3">
            <a href="{{ asset('resources/frontend/document/New organisation chart.pdf') }}" class="vs-btn" role="button" target="_blank">Organigram
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="margin-left:6px"><path d="M5 12h14M12 5l7 7-7 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="{{ asset('resources/frontend/document/Safeguarding Policy - Jan 2021.pdf') }}" class="vs-btn" role="button" target="_blank">Safeguarding Policy
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="margin-left:6px"><path d="M5 12h14M12 5l7 7-7 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
      </div>
  </div>
</section>

<!-- ===== Smart Full-Width Gallery ===== -->
<section id="smart-gallery" class="py-5">
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

@endsection
@section('script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
@endsection