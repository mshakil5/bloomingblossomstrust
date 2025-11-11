@extends('frontend.layouts.master')

@section('content')

<style>

  .about-section{
      max-width:var(--max-width);
      margin:0 auto;
      background:var(--card-bg);
      border-radius:24px;
      /* box-shadow:0 10px 30px rgba(18,24,33,0.06); */
      overflow:hidden;
      position:relative;
      padding:10px;
    }


  .age-group {
  background-color: #f8f9fa; /* Soft background tone */
}

.age-group p {
  color: #333;
  font-size: 1rem;
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

.age-group img {
  max-width: 90%;
  transition: transform 0.3s ease;
}

.age-group img:hover {
  transform: scale(1.03);
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
}

</style>

@php
    $bgImage = $banner && $banner->feature_image
        ? asset('images/banner/' . $banner->feature_image)
        : asset('resources/frontend/images/page-banner2.jpg');
@endphp


<section class="breadcrumb-section text-center text-white d-flex align-items-center justify-content-center"
    style="background-image: url('{{ $bgImage }}');">
  <div class="container  d-none">
    <h1 class="breadcrumb-title mb-3">{{ $agegroup->short_title }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active text-white" aria-current="page">{{ $agegroup->short_title }}</li>
      </ol>
    </nav>
  </div>
</section>



  <!-- Butterfly top-left -->
<img src="{{ asset('resources/frontend/images/butterfly-left.png') }}" 
      alt="Butterfly Left" 
      style="position: absolute; top: 200px; left: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyLeft 6s infinite ease-in-out;">

<!-- Butterfly top-right -->
<img src="{{ asset('resources/frontend/images/butterfly-right.png') }}" 
      alt="Butterfly Right" 
      style="position: absolute; top: 220px; right: 100px; width: 100px; height: auto; opacity: 0.9; animation: flyRight 6s infinite ease-in-out;">


      
<section class="age-group pt-5">
  <div class="container">
    <div class="row align-items-center">

      
      <div class="text-center mb-5">
        <h2>{{ $agegroup->short_title }}</h2>
      </div>
      
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
           class="img-fluid rounded shadow-sm">
      </div>
    </div>
  </div>
</section>





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
                  <div class="thumb-overlay"><span>View</span></div>
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
  <div id="galleryLightbox" class="gallery-lightbox d-none" aria-hidden="true">
    <button class="lb-close" aria-label="Close (Esc)">&times;</button>
    <button class="lb-prev" aria-label="Previous (Left)">&lsaquo;</button>
    <button class="lb-next" aria-label="Next (Right)">&rsaquo;</button>
    <div class="lb-content">
      <img id="lbImage" src="" alt="Full size image">
    </div>
  </div>
</section>  

@endif

<style>
  .accent {
    color: #97b766;
    font-size: 24px;
    font-weight: 700;
  }

</style>


<section class="about-section pt-5" aria-labelledby="about-heading">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="text-center mb-5">
        <h2>Quotes</h2>
      </div>
      <!-- Right: Content -->
      <div class="col-lg-12 col-xl-12 order-0 order-lg-1">
          <p> <span class="accent">Spare a Pair:</span> <br>
          Emma, single mom of 2 wrote to us: ‘I couldn’t believe my eyes. I know that expression is very cliché, but there’s no better way for me to describe how I felt. The clothing package felt like a warm hug; somebody cared about us and thought about my kids. They will now finally have the much-needed underwear and beautiful new coats. A god-send literally. Toby and Sarah were dancing for joy. They were delighted with the purple coats, the pockets and snug fur. How did you know that purple’s their favourite colour? Thank you. Thank you. Thank you.’
          </p>

          <p> <span class="accent">Feeling Talking Walking Garden:</span> <br>
          The leaves are turning brown now and falling of the trees. I hate them. I can’t take the sound and feel of there crunch. But at the garden the therapist is helping me touch them with my little pinkie finger. I think by next year I won’t be scared of them anymore. – Rachel 7 
          </p>

          <p> <span class="accent">Literally Literacy:</span> <br>
          It’s still hard for me to write correctly, but you totally deserve that effort. Blossoms, thank you so very much for the wonderful reading and literacy program. I used to feel like a foreigner in the classroom despite being born and bred British for several generations. I now feel like I belong. I can read and write! I never thought that I’ll be able to. Thank you! Thank you! – Joseph, age 11
          </p>

          <p> <span class="accent">Feel Blue? Go Green:</span> <br>
          I was terrified of falling into the same black whole that swallowed me last winter. The park cleaning and spending time outdoors in the daylight kept me afloat literally! Thank you! – Estelle, age 16
          </p>

          <p> <span class="accent">Nutribridge:</span> <br>
          Thank you so much for the yummy suppers. I wait by the window for my sister to bring them home. We can’t believe she cooked them herself, cause they’re just too delicious! – Ray, 6
          </p>
          
          


      </div>
  </div>
</section>





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