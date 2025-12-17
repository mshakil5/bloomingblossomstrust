@extends('frontend.layouts.master')

@section('content')

<style>


  .age-group {
  background-color: #fff9f3; /* Soft background tone */
}

.age-group p {
  color: #333;
  font-size: 24px;
  line-height: 1.7;
  margin-bottom: 1rem;
}

.age-group h3 {
  color: #2a4d69;
  font-weight: 600;
  font-size: 1.5rem;
}

.age-group ul {
  padding-left: 1.2rem;
}

.age-group ul li {
  margin-bottom: 0.7rem;
  color: #444;
  position: relative;
}

.age-group ul li::before {
  position: absolute;
  left: 0;
  color: #2a4d69;
  font-weight: bold;
}

.right-butterfly {
  right: 150px !important;
}


/* Responsive adjustments */
@media (max-width: 767.98px) {
  .age-group h3 {
    font-size: 1.3rem;
  }
  .age-group p {
    font-size: 0.95rem;
  }
  .age-group img {
    max-width: 100%;
  }
  .hero_area h1 {
    font-size: 2rem !important;
  }

  .right-butterfly {
    right: 0 !important;
  }

  .left-butterfly {
    top: 130px !important;
    left: 0px !important;
  }
}

</style>


  <header class="banner_area position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
            <div class="banner-item active">
                <div class="carousel-caption text-center">
                  <h1 class="display-5 fw-bold"
                      style="color:#4ca30d; font-size:3rem;">
                      {{ $agegroup->short_title }}
                  </h1>
                </div>
            </div>
            <div class="butterfly" style="background-image: url('../butterfly2.gif')"></div>
            <div class="butterfly" style="background-image: url('../butterfly2.gif')"></div>
            <div class="butterfly" style="background-image: url('../butterfly2.gif')"></div>
      </div>
    </div>
  </header>





  <!-- Butterfly top-left -->
<img src="{{ asset('resources/frontend/images/butterfly-left.png') }}"  class="left-butterfly"
      alt="Butterfly Left" 
      style="position: absolute; top: 220px; left: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyLeft 6s infinite ease-in-out;">

<!-- Butterfly top-right -->
<img src="{{ asset('resources/frontend/images/butterfly-right.png') }}" class="right-butterfly"
      alt="Butterfly Right" 
      style="position: absolute; top: 220px; right: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyRight 6s infinite ease-in-out;">


      
<section class="age-group">
  <div class="container">
    <div class="row align-items-center">
      <!-- LEFT CONTENT -->
      <div class="col-lg-12 mb-4 mb-lg-0">
        
        {!! $agegroup->short_description !!}
      </div>


    </div>
  </div>
</section>

<section class="age-group pt-2">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        {!! $agegroup->long_description !!}
      </div>

      <!-- RIGHT IMAGE -->
      
      @php
        $longDescText = $agegroup->long_description ?? '';
        $longDescWords = str_word_count(strip_tags($longDescText));
      @endphp

      <div class="@if($longDescWords >= 5) col-lg-6 text-center @else col-lg-12 text-center @endif">
        <img src="{{ asset('images/content/' . $agegroup->feature_image) }}"
           alt="{{ $agegroup->short_title }}"
           class="img-fluid">
      </div>
    </div>
  </div>
</section>



<style>
  :root{
    --quote-accent: #4ca30d; /* for left & right borders + quote icons */
    --quote-bg: #fbfbfb;
    --quote-text: #444;
  }

  .quote-section{
    background: linear-gradient(180deg, #ffffff 0%, var(--quote-bg) 100%);
    border-left: 6px solid var(--quote-accent);
    border-right: 6px solid var(--quote-accent); /* added right border */
    padding: 2rem 2.5rem;
    border-radius: 8px;
    box-shadow: 0 6px 18px rgba(10,10,10,0.04);
    position: relative;
    overflow: hidden;
    text-align: center; /* center all content */
  }

  /* Decorative oversized, low-opacity quote marks */
  .quote-section .first-quote,
  .quote-section .last-quote {
    position: absolute;
    color: var(--quote-accent);
    font-family: Georgia, "Times New Roman", serif;
    font-weight: 700;
    font-size: 5rem;
    line-height: 1;
    pointer-events: none;
    user-select: none;
    z-index: 0;
  }

  .quote-section .first-quote {
    top: 12px;
    left: 14px;
    transform: translateY(-6%);
  }

  .quote-section .last-quote {
    bottom: 6px;
    right: 20px;
    transform: translateY(4%);
  }

  /* Ensure content sits above decorative marks */
  .quote-section > *:not(.first-quote):not(.last-quote) {
    position: relative;
    z-index: 1;
  }

  .quote-text {
    margin: 0 auto;
    max-width: 750px;
    color: var(--quote-text);
    font-size: 1.5rem;
    line-height: 1.3;
    font-style: italic;
  }

  /* Mobile adjustments */
  @media (max-width: 767.98px) {
    .quote-section{
      padding: 1.25rem 1rem;
    }
    .quote-section .first-quote,
    .quote-section .last-quote {
      font-size: 3rem;
      opacity: 0.10;
    }
    .quote-section .last-quote { display: none; }
    .quote-text {
      font-size: 1rem;
      line-height: 1.5;
    }
  }
</style>


<section class="py-2" style="background:#fff9f4;"></section>

<section class="quote-section py-5" aria-labelledby="about-heading">

  <div class="container">
    <div class="quote-text">
      <span class="first-quote">"</span>
          {!! $agegroup->quote !!}
      <span class="last-quote">"</span>
    </div>
  </div>

</section>

<section class="py-2" style="background:#fff9f4;"></section>




@if ($agegroup->images->count() > 0 )
  
  <!-- ===== Smart Full-Width Gallery ===== -->
<section id="smart-gallery" class="py-5 bg-white">
  <div class="container-fluid px-0">
    <div class="container">
      <div class="text-center mb-4">
        <div class="section-title">
          <h2>Photo Gallery</h2>
        </div>
      </div>
    </div>

    <!-- Gallery grid: full-width background but images contained -->
    <div class="gallery-wrap">
      <div class="container">
        <div id="galleryGrid" class="row g-3">

          @foreach ($agegroup->images as $image)
              <div class="col-6 col-md-3">
                <div class="gallery-item" data-index="0" tabindex="0">
                  <img src="{{asset('images/content/'. $image->image)}}" alt="{{ $agegroup->short_title }}" loading="lazy" data-full="{{asset('images/content/'. $image->image)}}">
                </div>
              </div>
          @endforeach

          


        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.gallery-wrap -->

    <!-- See more button -->
    <div class="container text-center mt-4">
      {{-- <button id="galleryToggleBtn" class="btn btn-primary btn-lg rounded-pill px-4">See more</button> --}}
    </div>
  </div>

  <!-- LIGHTBOX / OVERLAY -->
  {{-- <div id="galleryLightbox" class="gallery-lightbox d-none" aria-hidden="true">
    <button class="lb-close" aria-label="Close (Esc)">&times;</button>
    <button class="lb-prev" aria-label="Previous (Left)">&lsaquo;</button>
    <button class="lb-next" aria-label="Next (Right)">&rsaquo;</button>
    <div class="lb-content">
      <img id="lbImage" src="" alt="Full size image">
    </div>
  </div> --}}
</section>  

@endif

<style>
  .accent {
    color: #97b766;
    font-size: 24px;
    font-weight: 700;
  }

</style>







@endsection

@section('script')

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
@endsection