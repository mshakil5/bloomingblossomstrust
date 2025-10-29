@extends('frontend.layouts.master')

@section('content')


<style>

    .donate-section{padding:40px 0}
    .donation-card{
      display:flex;flex-direction:column; /* default stacked on small screens */
      width:100%;
      border-radius:12px;
      outline:3px dotted rgba(108,117,125,0.45); /* dotted border outside card */
      overflow:hidden;
      background:#fff;
      box-shadow:0 6px 18px rgba(33,37,41,0.06);
      margin-bottom:24px;
    }

    /* Inner segments share equal height and have no visible borders/gaps */
    .donation-card .segment{flex:1; padding:20px; display:flex; align-items:center; justify-content:center}
    .donation-card .segment.text{min-height:130px}

    /* Middle image segment styles */
    .donation-card .segment.image{padding:0}
    .donation-card .segment.image img{width:100%; height:100%; display:block; object-fit:cover}

    /* Layout for medium+ screens: three columns horizontally with no gap */
    @media(min-width:768px){
      .donation-card{flex-direction:row}
      .donation-card .segment{padding:28px}
      .donation-card .segment.text{flex:1 1 30%}
      .donation-card .segment.image{flex:0 0 40%}
      .donation-card .segment.text.right{flex:1 1 30%}
    }

    /* Tighter spacing for very small devices */
    @media(max-width:420px){
      .donation-card .segment{padding:16px}
    }

    /* Decorative headline */
    .donation-title{font-weight:700; margin-bottom:6px}
    .donation-sub{color:var(--muted); font-size:0.95rem}

    /* CTA */
    .btn-donate{background:linear-gradient(90deg,var(--accent),#375aeb); border:0; color:#fff}

    /* Simple hover interaction */
    .donation-card:hover{transform:translateY(-4px); transition:transform .18s ease-out}
    .donation-card .segment.image img{transition:transform .4s ease}
    .donation-card:hover .segment.image img{transform:scale(1.04)}

    /* Accessibility focus ring for keyboard users */
    .donation-card:focus-within{box-shadow:0 0 0 3px rgba(13,110,253,0.12)}

    /* Small helper for text blocks to ensure no gaps */
    .no-gap{border:0}

</style>


@php
    $bgImage = $banner && $banner->feature_image
        ? asset('images/banner/' . $banner->feature_image)
        : asset('resources/frontend/images/page-banner2.jpg');
@endphp


<section class="breadcrumb-section text-center text-white d-flex align-items-center justify-content-center"
    style="background-image: url('{{ $bgImage }}');">
  <div class="container d-none">
    <h1 class="breadcrumb-title mb-3">Fees and Terms</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active text-white" aria-current="page">Fees and Terms</li>
      </ol>
    </nav>
  </div>
</section>



<!-- Main content -->
  <main class="container donate-section">
    <header class="d-flex align-items-center justify-content-between mb-4">
      <div>
        <h1 class="h3 mb-1">Donate</h1>
        <h5 class="text-muted small mb-0">
          Your donation will enable us to provide our vital services to those who require them. Because we believe that every child can flourish. They just need the opportunities.</h5>
      </div>
      {{-- <div class="text-end d-none d-md-block">
        <a href="#" class="btn btn-outline-secondary">How donations are used</a>
      </div> --}}
    </header>

    <!-- Card 1 -->
    <article class="donation-card" tabindex="0" aria-labelledby="d1-title">
      <div class="segment text no-gap">
        <div>
          <h2 id="d1-title" class="donation-title">BACS PAYMENT</h2>
          {{-- <p class="donation-sub">Providing safe drinking water to rural communities. Your small gift gives big hope.</p> --}}
        </div>
      </div>

      <div class="segment image no-gap">
        <img src="{{ asset('resources/frontend/images/bacs.png')}}" alt="BACS PAYMENT">
      </div>

      <div class="segment text right no-gap">
        <div class="w-100 d-flex flex-column align-items-center align-items-md-end">
          <div class="text-md-end mb-3">
            <div>
              <span class="btn btn-donate">BACS PAYMENT</span>
            </div>
            <p class="mb-1 fw-semibold">Bank Name: <span class="text-muted">Lloyds</span></p>
            <p class="mb-1 fw-semibold">Acc Name: <span class="text-muted">Blooming Blossoms Trust</span></p>
            <p class="mb-1 fw-semibold">Account No: <span class="text-muted">19219168</span></p>
            <p class="mb-1 fw-semibold">Sort Code: <span class="text-muted">30-99-50</span></p>
          </div>
        </div>
      </div>
    </article>


    <article class="donation-card" tabindex="0" aria-labelledby="d1-title">
      <div class="segment text no-gap">
        <div>
          <h2 id="d1-title" class="donation-title">POSTAL DONATION</h2>
          {{-- <p class="donation-sub">Providing safe drinking water to rural communities. Your small gift gives big hope.</p> --}}
        </div>
      </div>

      <div class="segment image no-gap">
        <img src="{{ asset('resources/frontend/images/postal.jpg')}}" alt="BACS PAYMENT">
      </div>

      <div class="segment text right no-gap">
        <div class="w-100 d-flex flex-column align-items-center align-items-md-end">
          <div class="text-md-end mb-3">
            <div>
              <span class="btn btn-donate">Postal Donations</span>
            </div>
            <p class="mb-1 fw-semibold">Blooming Blossoms Trust <br>
                79 Gladesmore Road <br>
                London N15 6TL</p>
          </div>
        </div>
      </div>
    </article>



  </main>

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
                <div class="room-icon">
                  {{ ['💬', '🌟', '🧸', '🏅', '👶', '🎨', '🌈', '🎭','🐻'][array_rand(['💬', '🌟', '🧸', '🏅', '👶', '🎨', '🌈', '🎭','🐻'])] }}
                </div>
                <div class="room-content text-center">
                  <h4 class="fw-bold mb-2">{{$project->short_title}}</h4>
                  <p class="text-muted mb-3">
                    {{$project->long_title}}
                  </p>
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

@endsection

@section('script')

@endsection