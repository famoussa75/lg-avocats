@extends('pages.utils.layout') @section('content')


 <!-- content begin -->
 <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-white">
                <img src="assets/images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Activités</h1>
                                <p>Réputation. Respect. Résultat.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        @if($articles->isEmpty())
                        <h3 style="color:gray"><i class="fa fa-info-circle"></i> Aucun article publié pour le moment...</h3>
                        @endif
                        

                        @foreach($articles as $art)

                        @if($art->contenu_externe===null)
                        <div class="col-lg-4 col-md-6 mb30" >
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                    <div class="m">{{ date('d', strtotime($art->created_at)) }}</div>
                                    <div class="d">{{ date('M', strtotime($art->created_at)) }}</div>
                                    </div>
                                     @if($art->image_article=='')
                                     <div class="spacer-single"></div>
                                     <div class="spacer-single"></div>
                                     @else
                                        <div class="post-image"  style=" background-image: url('{{ $art->image_article }}');background-size: cover; background-repeat: no-repeat;width: 100%;height: 35vh;">
                                        </div>
                                     @endif
                                    <div class="post-text">
                                        <span class="p-tagline">LG Avocats</span>
                                        <h4><a href="{{route('detail',$art->slug)}}">{{$art->titre_court}} ...</a></h4>
                                        <span class="p-author"><a href="{{route('detail',$art->slug)}}">Lire plus <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else

                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">{{ date('d', strtotime($art->created_at)) }}</div>
                                        <div class="d">{{ date('M', strtotime($art->created_at)) }}</div>
                                    </div>
                                    <div class="spacer-single"></div>
                                     <div class="spacer-single"></div>
                                    <div class="post-text">
                                        <span class="p-tagline">LG Avocats</span>
                                        <h4><a href="{{$art->contenu_externe}}" target="_blank">{{$art->titre}}</a></h4>
                                        <span class="p-author"><a href="{{$art->contenu_externe}}">Lire plus <i class="fa fa-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach
                     
                        <div class="spacer-single"></div>

                        <div class="pagination">
                            {{ $articles->links('vendor.pagination.custom') }}
                        </div>
                       
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->

@endsection