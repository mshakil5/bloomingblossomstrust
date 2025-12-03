@extends('frontend.layouts.master')

@section('content')

<style>
  .breadcrumb-section {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 450px;
    position: relative;
  }

  .breadcrumb-section::before {
    content: "";
    position: absolute;
    inset: 0;
  }

  .breadcrumb-section .container {
    position: relative;
    z-index: 2;
  }

  .breadcrumb-title {
    font-size: 2.5rem;
    font-weight: 700;
  }

  .breadcrumb a:hover {
    text-decoration: underline;
  }

</style>


  <header class="hero_area position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption text-center">
                  <h1 class="display-5 fw-bold"
                      style="color:#8fad60; font-size:3rem;">
                      Privacy
                  </h1>
                </div>
            </div>
            <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
            <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
            <div class="butterfly" style="background-image: url('butterfly2.gif')"></div>
      </div>
    </div>
  </header>

<!-- Main content -->
<main class="content-wrap">
  <div class="container">

    {!! $companyPrivacy->long_description !!}

  </div>
</main>


@endsection

