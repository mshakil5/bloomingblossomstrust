@extends('frontend.layouts.master')

@section('content')

<style>
  


    /* button */
    .vs-btn{
      display:inline-flex;align-items:center;gap:.6rem;
      padding:10px 18px;border-radius:10px;font-weight:700;
      background:#003057;
      color:white;text-decoration:none;border:none;
          font-size: 20px;
    }

    .vs-btn:hover{transform:translateY(-3px);}


    @media (max-width: 575.98px) {
      .carousel-caption h1 {
        font-size: 18px !important;
      }
    }

    .about-title {
      font-size: 60px;
      color: #003057;
      text-align: center;
      line-height: 1.2;
      font-family: "DarkerGrotesque-semibold";

    }

    .about-title span{
      color: #b7236f;
    }
    

</style>

  <style>

    .hero{padding:3rem 0}
    .immersetitle{font-family:'Playfair Display', serif;font-size:3.2rem;color:var(--accent);margin-bottom:1rem}

    .lead-text{color:var(--muted);line-height:1.8;font-weight:300}

    /* right card */
    .info-card{background:#fff;border-radius:28px;padding:1.6rem;border:1px solid rgba(23,34,138,0.06);box-shadow:0 6px 0 rgba(23,34,138,0.02); font-size: 24px;}
    .info-card h5{font-family:'Playfair Display', serif;color:var(--accent);font-size:1.05rem;margin-bottom:0.6rem}
    .info-list dt{font-family:'Playfair Display', serif;color:var(--accent);font-size:1rem}
    .info-list dd{margin-left:0;font-size:0.9rem;color:#6b6b9a}

    /* decorative footer label */
    .section-sep{border-top:2px solid rgba(23,34,138,0.12);margin-top:2.5rem;padding-top:2rem}
    .astuce{font-family:'Playfair Display', serif;font-size:2.4rem;color:var(--accent);text-align:right;opacity:0.95}

    /* overall container mimic */
    .page-wrap{background-color: #fff9f4 }

    @media (max-width: 991.98px){
      .immersetitle{font-size:2.4rem}
      .page-wrap{padding:1rem}
    }
    @media (max-width: 767.98px){
      .immersetitle{font-size:2rem}
      .info-card{border-radius:18px;padding:1rem}
      .astuce{text-align:center}
    }

    /* small utility */
    .mini-icon{width:58px;height:58px;border-radius:50%;background:transparent;display:flex;align-items:center;justify-content:center;border:1px dashed rgba(23,34,138,0.12)}
  </style>



<header class="banner_area position-relative">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="banner-item active">
            <div class="carousel-caption text-center">
              <h1 class="display-5 fw-bold"
                  style="color:#b7236f; font-size:40px; font-family:'Roboto', sans-serif;">
                  {{-- {{ $about1->short_title }} --}}
                  Blooming Blossoms Trust helps disadvantaged and vulnerable young people <span style="color:#208100;">Achieve Goals, Overcome Disabilities And Develop Skills.</span> 
              </h1>
            </div>
        </div>
        <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
        <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
    </div>
  </div>
</header>

  
  <!-- Butterfly top-left -->
<img src="{{ asset('resources/frontend/images/butterfly-left.png') }}" class="left-butterfly"
      alt="Butterfly Left" 
      style="position: absolute; top: 240px; left: 120px; width: 100px; height: auto; opacity: 0.9; animation: flyLeft 6s infinite ease-in-out;">

<!-- Butterfly top-right -->
<img src="{{ asset('resources/frontend/images/butterfly-right.png') }}" class="right-butterfly"
      alt="Butterfly Right" 
      style="position: absolute; top: 240px; right: 120px; width: 100px; height: auto; opacity: 0.9; animation: flyRight 6s infinite ease-in-out;">
      

  <section class=" page-wrap">
    <div class="container hero">
      <div class="row g-4 align-items-start">
        <div class="col-lg-7">

          {!! $about1->short_description !!}

        </div>

        <div class="col-lg-5">
          <div class="info-card">
            <div class="d-flex justify-content-between align-items-start mb-3">
              {{-- <h5>MORE TO IT THAN PASTRIES</h5> --}}
              {{-- <div class="mini-icon"><img src="/mnt/data/34_52.png" alt="icon" style="max-width:38px;max-height:38px;object-fit:cover;border-radius:6px"></div> --}}
            </div>

            {!! $about1->long_title !!}


          </div>
        </div>
      </div>

      <div class="section-sep">
        <div class="row">
          <div class="col-lg-12 align-items-center">
            <p class="lead-text">{!! $about1->long_description !!}</p>
          </div>
          {{-- <div class="col-lg-3 d-flex align-items-center">
            <div class="astuce ms-auto">Astuce</div>
          </div> --}}
        </div>
      </div>

    </div>
  </section>

  
<section class="soar-section position-relative py-5">
  
  <div class="small-butterfly py-5" style="background-image: url('butterfly2.gif')"></div>

  <div class="container py-3">
    <div class="text-center py-3">

      <div class="about-title" style="font-family: 'Roboto', sans-serif">
        Together we cheer them on to reach goals. <br> <span>Together we Soar Beyond Potential.</span>  <br> One pretty butterfly at a time. <br>
        {{-- Beyond their  <span class="accent">potential.</span>  --}}
      </div>

      <div class="col-lg-12 text-center col-xl-12 order-0 order-lg-1 py-4">
          <div class="mt-3">
            <a href="{{ asset('resources/frontend/document/New organisation chart.pdf') }}" class="vs-btn" role="button" target="_blank">Organigram
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="margin-left:6px"><path d="M5 12h14M12 5l7 7-7 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="{{ asset('resources/frontend/document/Safeguarding Policy - Jan 2021.pdf') }}" class="vs-btn" role="button" target="_blank">Safeguarding Policy
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="margin-left:6px"><path d="M5 12h14M12 5l7 7-7 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
      </div>
        
      </p>
    </div>



  </div>
</section>




<!-- ===== Smart Full-Width Gallery ===== -->
<section id="smart-gallery" class="py-5">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="text-center mb-4">
        {{-- <div class="small-title text-uppercase text-muted mb-2">Our Gallery</div> --}}
        <h2 class="big-title py-3 pb-5">Our Gallery</h2>
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
      <button id="galleryToggleBtn" class="vs-btn px-4" style="{{ $index <= 4 ? 'display: none;' : '' }}">See more</button>
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