@extends('frontend.layouts.master')

@section('content')

<style>



  
.week1 .table-week-title { background:#5e50a1; } /* purple */
.week2 .table-week-title { background:#1da77a; } /* green */
.week3 .table-week-title { background:#6f3ea6; } /* purple darker */
.week4 .table-week-title { background:#f39c12; } /* orange */


/* ---------- Main content ---------- */
.content-wrap{ padding: 48px 0; }
.content h3{ font-weight:700; margin-top:18px; color:var(--deep-blue) }
.muted { color:var(--muted-text) }

/* Weekly menu cards row */
.menu-card img{ width:100%; height:140px; object-fit:cover; border-radius:6px; }
.menu-card .label-week{ font-size:13px; font-weight:700; margin-top:8px; color:#333; }

/* Tables */
.menu-table { border-collapse: collapse; width:100%; font-size:13px; }
/* .menu-table th, .menu-table td { border:1px solid rgba(0,0,0,0.08); padding:8px; text-align:left; vertical-align:top; } */
.table-week-title { font-weight:700; padding:8px; color:#fff; text-align:center; }

</style>

@php
    $bgImage = $banner && $banner->feature_image
        ? asset('images/banner/' . $banner->feature_image)
        : asset('resources/frontend/images/page-banner2.jpg');
@endphp


<section class="breadcrumb-section text-center text-white d-flex align-items-center justify-content-center"
    style="background-image: url('{{ $bgImage }}');">
  <div class="container d-none">
    <h1 class="breadcrumb-title mb-3">Food Choice</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a>
        </li>
        <li class="breadcrumb-item active text-white" aria-current="page">Food Choice</li>
      </ol>
    </nav>
  </div>
</section>


  <section class=" py-5 position-relative">
      <div class="container">
        <h2 class="menu-title">Our Funders</h2>
        <div class="menu-grid">
          @foreach ($features as $key => $feature)

              <div class="menu-card {{ ['bg1','bg2','bg3','bg4'][array_rand(['bg1','bg2','bg3','bg4'])] }}">
                <img src="{{asset('images/service/' .$feature->image )}}" alt="{{ $feature->title }}">
                <div class="week-title">{{ $feature->title }}</div>
              </div>

          @endforeach
        </div>
      </div>
  </section>





@endsection

@section('script')


@endsection