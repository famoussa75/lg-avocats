@extends('pages.layout')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="margin-top:0px;">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{ __('Actualités') }}</h2>
    
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="mt-4">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3 class="section-title">à la une</h3>
    </header>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      @foreach($articles as $art)
      <div class="col-lg-4 col-md-6 portfolio-item  filter-app">
        <div class="portfolio-wrap">
          <figure>
            <img src="{{URL::to('/')}}/{{$art->image_article}}" class="img-fluid" alt="">
            <a href="{{route('article',$art->id_article)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info" style="text-align: left;">
            <h4 style="word-wrap: break-word;"><a href="{{route('article',$art->id_article)}}">
                {{$art->titre_court}}...
              </a></h4>

            <p style="word-wrap: break-word;">{{$art->contenu_court}}..</p><br />
            <i style="font-size: 13px;">Publié par : ask avocats , {{$art->date_article}}</i>
          </div>
        </div>
      </div>
      @endforeach
      @if(empty($articles))
      <h5>Aucun article publié pour le moment...</h5>
      @endif

    </div>
    <!-- <div id="example3-pagination">
      <a id="example3-previous" href="#">&laquo; Previous</a>
      <a id="example3-next" href="#">Next &raquo;</a>
    </div> -->
  </div>
</section><!-- End Portfolio Section -->

@endsection