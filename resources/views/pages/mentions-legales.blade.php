@extends('pages.layout')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="margin-top: 0px;">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{ __('Mentions legales') }}</h2>
    
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<!-- ======= Portfolio Section ======= -->
<section id="services" class="col-md-10">
  <div class="container" data-aos="fade-up">
     <p class="description" style="text-align:justify; font-size:18px">
            {{__('Desc_mentions')}}
          </p>
  </div>
</section><!-- End Portfolio Section -->

@endsection