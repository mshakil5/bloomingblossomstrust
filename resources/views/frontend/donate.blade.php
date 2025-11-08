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


<style>
  :root {
    --donation-min-h: 60vh;
    --donation-max-w: 1200px;
    --donation-text-bg: rgba(255, 255, 255, 0.85);
    --donation-text-color: #0b1320;
    --accent: #0f62fe;
  }

  .donation {
    position: relative;
    min-height: var(--donation-min-h);
    display: grid;
    place-items: center;
    padding-block: clamp(2rem, 4vw, 4rem);
    overflow: hidden;
  }

  .donation__bg {
    position: absolute;
    inset: 0;
    z-index: -2;
    background-image: url('{{ asset('donatebg.png') }}');
    background-size: cover;
    background-position: center;
  }

  .donation__overlay {
    position: absolute;
    inset: 0;
    z-index: -1;
    background: radial-gradient(60% 80% at 20% 40%, rgba(255,255,255,.75) 0%, rgba(255,255,255,.35) 40%, rgba(255,255,255,0) 100%),
                linear-gradient(to bottom, rgba(255,255,255,.35), rgba(255,255,255,.05));
  }

  .donation__inner {
    width: 100%;
    max-width: var(--donation-max-w);
    padding-inline: 1rem;
  }

  .donation__panel {
    background: var(--donation-text-bg);
    color: var(--donation-text-color);
    border-radius: 1.25rem;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
    backdrop-filter: blur(6px);
    padding: clamp(1rem, 2vw + .5rem, 2rem);
  }

  .eyebrow {
    text-transform: uppercase;
    letter-spacing: .08em;
    font-weight: 700;
    font-size: .875rem;
    color: #354154;
    margin-bottom: .5rem;
  }

  .donation h1 {
    font-weight: 800;
    line-height: 1.1;
    font-size: clamp(1.8rem, 4.5vw, 3.25rem);
    margin-bottom: .7rem;
  }

  .donation h1 .accent {
    color: var(--accent);
  }

  .donation p.lead {
    font-size: clamp(1rem, 1.6vw, 1.25rem);
    margin-bottom: 1rem;
  }

  .donation .can-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .donation .can-list li {
    display: flex;
    align-items: start;
    gap: .6rem;
    padding: .35rem 0;
    font-size: clamp(.975rem, 1.5vw, 1.125rem);
  }

  .donation .check {
    width: 1.15em;
    height: 1.15em;
    border-radius: .35em;
    outline: 2px solid var(--accent);
    display: grid;
    place-items: center;
    font-size: .75em;
    font-weight: 800;
  }

  @media(max-width: 575.98px) {
    .donation__panel {
      background: rgba(255,255,255,0.92);
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
        <h1 class="h3 mb-1">Ripples and Waves.</h1>
        <h5 class="text-muted small mb-0">
          We need your pebble in the pond. </h5>
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


  <!-- DONATION SECTION -->
<section class="donation" aria-label="Donation Section">
  <div class="donation__bg" ></div>
  <div class="donation__overlay"></div>

  <div class="donation__inner container">
    <div class="row g-4 align-items-center">
      <div class="col-12 col-lg-8">

        <div class="donation__panel">
          <div class="eyebrow">Blooming Blossoms Trust</div>

          <h1>
            Giving is not just about making a <span class="accent">donation</span>.<br>
            It is about making a <span class="accent">difference</span>!
          </h1>

          <p class="lead">
            At Blooming Blossoms Trust we see <strong>abilities</strong>, not disabilities.
            We work to remove the barrier called “No” or “Can’t” for children with (dis)<strong>abilities</strong>.
            With your support, we help every child see that they <em>can</em>.
          </p>

          <ul class="can-list">
            <li><span class="check">✓</span> <strong>Can</strong> learn.</li>
            <li><span class="check">✓</span> <strong>Can</strong> have control over their lives.</li>
            <li><span class="check">✓</span> <strong>Can</strong> have friends, fun and a future.</li>
            <li><span class="check">✓</span> <strong>Can</strong> blossom despite the turbulent environment.</li>
          </ul>


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