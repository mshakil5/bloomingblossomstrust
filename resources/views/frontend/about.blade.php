@extends('frontend.layouts.master')

@section('content')

<style>
  /* container tweak */
    .about-section{
      max-width:var(--max-width);
      margin:0 auto;
      border-radius:24px;
      /* box-shadow:0 10px 30px rgba(18,24,33,0.06); */
      overflow:hidden;
      position:relative;
      padding:10px;
    }

    /* layout */
    .img-box-2{
      border-radius:16px;
      overflow:hidden;
      box-shadow:0 8px 24px rgba(9,30,66,0.06);
      background:linear-gradient(180deg, #fff, #fffaf3);
    }
    .img-box-2 img{
      width:100%;
      height:auto;
      display:block;
      object-fit:cover;
      vertical-align:middle;
    }

    .sub-title{
      display:inline-block;
      font-weight:600;
      color:var(--accent);
      letter-spacing:0.2px;
      margin-bottom:8px;
      text-transform:none;
    }
    .sec-title{
      font-size:30px;
      font-weight:800;
      margin:6px 0 18px;
      line-height:1.08;
      color:#0b2546;
    }
    .fs-md{color:var(--muted);font-size:15px}


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


    /* shape mockups */
    .shape-mockup{
    position:absolute;z-index:1;pointer-events:none;opacity:0.95;transition:transform .6s ease;
    }
    .shape-mockup img{display:block;max-width:120px;height:auto}


    /* position adjustments */
    .shape-dog{bottom:6%;left:3%;}
    .shape-star{right:3%;bottom:8%;}


    /* responsive text and spacing */
    @media(min-width:992px){
    .about-section{padding:20px}
    .sec-title{font-size:40px}
    }


    @media(max-width:767.98px){
    body{padding:20px 12px}
    .sec-title{font-size:26px}
    .shape-mockup{display:none}
    }


    /* subtle entrance animations (no external libs) */
    .fadeInLeft{opacity:0;transform:translateX(-18px);animation:fadeInLeft .7s forwards}
    .fadeInRight{opacity:0;transform:translateX(18px);animation:fadeInRight .7s forwards}
    @keyframes fadeInLeft{to{opacity:1;transform:none}}
    @keyframes fadeInRight{to{opacity:1;transform:none}}


    /* accessibility: focus states */
    .vs-btn:focus{outline:3px solid rgba(255,107,107,0.16);outline-offset:3px}


    /* small utilities */
    .lead-strong{font-weight:600;color:#0b3d6b}
    .text-muted-2{color:#556b83}


    /* content list styles (if needed) */
    .about-list{margin-top:12px}
    .about-list li{margin:8px 0;color:var(--muted)}


    /* card for quote */
    .info-card{background:#fff8f6;border-radius:14px;padding:16px;margin-top:18px;border:1px solid rgba(204,64,64,0.04)}

    .process-section{margin-top:60px;text-align:center;}
    .process-area{position:relative;margin-top:40px;}
    .process-box-body{background:#fff;border-radius:20px;box-shadow:0 6px 20px rgba(0,0,0,0.05);padding:30px;min-width:220px;transition:transform .3s;}
    .process-box-body:hover{transform:translateY(-8px);}
    .process-number{font-size:22px;font-weight:700;color:var(--accent);margin-bottom:10px;display:block;}
    .process-icon img{width:70px;height:auto;margin-bottom:12px;}
    .process-name a{text-decoration:none;font-weight:600;color:#0b2546;}
    .process-name a:hover{color:var(--accent);}
    .process-line img{width:100%;max-width:700px;margin:30px auto 0;display:block;opacity:.8;}
    @media(max-width:768px){body{padding:20px;} .process-area{display:flex;flex-wrap:wrap;justify-content:center;gap:20px;} .process-line{display:none;}}



</style>





  <header class="hero_area position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption text-center">
                  <h1 class="display-5 fw-bold"
                      style="color:#8fad60; font-size:5rem; font-family:'Roboto', sans-serif;">
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





<section class="about-section" aria-labelledby="about-heading">
  <div class="container">
    <div class="row g-4 align-items-center">
      <!-- Right: Content -->
      <div class="col-lg-12 col-xl-12 order-0 order-lg-1">
          {!! $about1->long_title !!}
      </div>
  </div>
</section>


<section class="about-section" aria-labelledby="about-heading">
  <div class="container">
    <div class="row g-4 align-items-center">
      <!-- Right: Content -->
      <div class="col-lg-12 col-xl-12 order-0 order-lg-1">
          {!! $about1->long_description !!}
      </div>
  </div>
</section>


<section class="about-section" aria-labelledby="about-heading">
  <div class="">
    <div class="row align-item-center justify-content-center g-4">

      <!-- Left: Image -->
      <div class="col-lg-6">
        <div class="" >
          <!-- use decoding=async and loading=lazy for perf -->
          <img src="{{ asset('images/about/'. $about1->image)}}" alt="blooming blossoms trust">
        </div>
      </div>
      <!-- Right: Content -->
      <div class="col-lg-6 col-xl-5">
        <div class="ps-lg-4 pe-lg-2" >
          
          {!! $about1->short_description !!}

        </div>
      </div>
    </div>
  </div>
  

</section>







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