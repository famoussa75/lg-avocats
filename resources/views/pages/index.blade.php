@extends('pages.utils.layout') @section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- revolution slider begin -->
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade shadow-2-strong"
        data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active"  style="background-image:url('assets/images/slider/1.jpg')">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white">
                            <div class="row">
                                <div class="col-lg-5" style="padding-top:250px">
                                    <h1 class="mb-3 wow fadeInUp"><span class="id-color">LG Avocats</span>, Le cabinet d'avocats de confiance</h1>
                                    <div class="spacer-10"></div>
                                    <a href="{{route('about')}}" class="btn-custom wow fadeInUp"
                                        data-wow-delay=".6s">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item" style="background-image:url('assets/images/slider/2.jpg')">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="container text-white">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h1 class="mb-3 wow fadeInUp">Rendre la justice avec expertise et compassion</h1>

                                    <div class="spacer-10"></div>
                                    <a href="{{route('about')}}" class="btn-custom wow fadeInUp"
                                        data-wow-delay=".6s">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <!-- revolution slider close -->
    <section class="pt40 pb40 bg-color text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-sm-30 text-lg-start text-sm-center">
                    <h3 class="no-bottom">Contactez-nous maintenant! Obtenez une consultation gratuite pour votre cas.
                    </h3>
                </div>
                <div class="col-md-4 text-lg-end rtl-lg-start text-sm-center">
                    <a href="{{route('contact')}}" class="btn-custom btn-black light" data-bgcolor="#143a33">Prendre un
                        rendez-vous</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-size: cover;">
        <div class="container" style="background-size: cover;">
            <div class="row align-items-center" style="background-size: cover;">
                <div class="col-md-5" style="background-size: cover;">

                    <h2 class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">À
                        Propos de Nous</h2>
                    <p class="wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;text-align:justify">
                        LG Avocats est un cabinet juridique de premier plan offrant une gamme complète de services
                        juridiques et de conseil. Notre équipe d'avocats expérimentés se consacre à fournir des
                        solutions juridiques novatrices et efficaces à nos clients.</p>
                    <p class="wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;text-align:justify">
                        Nous sommes fiers d'offrir des services de conseil juridique personnalisés dans divers domaines
                        du droit. Que ce soit pour des questions de droit commercial, de droit du travail, de droit des
                        sociétés ou de droit de la famille, notre équipe est là pour vous accompagner et vous guider
                        tout au long du processus juridique. Nous comprenons que chaque situation est unique et nous
                        nous efforçons de fournir des conseils et des solutions adaptées à vos besoins spécifiques...
                        <a href="{{route('about')}}"> <span class="p-title wow fadeInRight animated"
                                style="visibility: visible; animation-name: fadeInRight;">Lire plus</span></a>
                    </p>
                </div>
                <div class="col-md-6 offset-md-1" style="background-size: cover;">
                    <div class="de-images" style="background-size: cover;">


                        <img class="di-big img-fluid wow zoomIn animated" src="assets/images/misc/d1.jpg" alt=""
                            style="visibility: visible; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-highlight" class="relative text-light" data-bgcolor="#143a33">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h2>
                        Nos domaines <br> d'expertises
                    </h2>
                    <div class="small-border sm-left"></div>
                </div>
                <div class="col-md-8">
                    <p>Bienvenue au sein de notre cabinet d'avocats, où l'excellence juridique rencontre la passion de
                        servir nos clients. Forts de notre engagement envers la rigueur, l'éthique et la recherche
                        constante de solutions novatrices, nous nous positionnons comme des experts dans des domaines
                        juridiques variés pour répondre aux besoins diversifiés de notre clientèle.
                    </p>
                </div>
            </div>
            <div class="spacer-double"></div>
        </div>
    </section>
    <section class="no-top relative z1000">
        <div class="container">
            <div class="row mt-100">

                <div class="col-lg-3 col-md-3 col-xs-12 mb30" style="background-size: cover;">
                    <div class="dcg-four dcg-item" style="background-size: cover;">
                        <a class="dcg-url" href="{{route('service-1')}}"></a>
                        <img class="dcg-image" src="assets/images/practice-areas/1.jpg" alt="">
                        <div class="dcg-title" style="background-size: cover;"><i
                                class="dcg-icon id-color icofont-group"></i>Conseil</div>
                        <div class="dcg-content" style="background-size: cover;">Notre équipe d'avocats experts en droit
                            commercial offre une gamme complète de services de conseil pour répondre aux besoins des
                            entreprises [...]</div>
                        <div class="dcg-text" style="background-size: cover;">Lire plus</div>
                        <div class="dcg-overlay" style="background-size: cover;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 mb30" style="background-size: cover;">
                    <div class="dcg-four dcg-item" style="background-size: cover;">
                        <a class="dcg-url" href="{{route('service-2')}}"></a>
                        <img class="dcg-image" src="assets/images/practice-areas/2.jpg" alt="">
                        <div class="dcg-title" style="background-size: cover;"><i
                                class="id-color icofont-light-bulb"></i>Assistance</div>
                        <div class="dcg-content" style="background-size: cover;">Nous comprenons que le droit du travail
                            peut être complexe et difficile à naviguer. C'est pourquoi nous sommes là pour aider nos
                            clients [...]</div>
                        <div class="dcg-text" style="background-size: cover;">Lire plus</div>
                        <div class="dcg-overlay" style="background-size: cover;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 mb30" style="background-size: cover;">
                    <div class="dcg-four dcg-item" style="background-size: cover;">
                        <a class="dcg-url" href="{{route('service-3')}}"></a>
                        <img class="dcg-image" src="assets/images/practice-areas/4.jpg" alt="">
                        <div class="dcg-title" style="background-size: cover;"><i
                                class="id-color icofont-mining"></i>Défense</div>
                        <div class="dcg-content" style="background-size: cover;">Nos avocats sont là pour vous offrir
                            une représentation solide dans tous les aspects des litiges commerciaux, des contrats et du
                            droit des sociétés [...]</div>
                        <div class="dcg-text" style="background-size: cover;">Lire plus</div>
                        <div class="dcg-overlay" style="background-size: cover;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 mb30" style="background-size: cover;">
                    <div class="dcg-four dcg-item" style="background-size: cover;">
                        <a class="dcg-url" href="{{route('service-4')}}"></a>
                        <img class="dcg-image" src="assets/images/practice-areas/3.jpg" alt="">
                        <div class="dcg-title" style="background-size: cover;"><i
                                class="id-color icofont-law-order"></i>Répresentation</div>
                        <div class="dcg-content" style="background-size: cover;">Nous comprenons que les affaires
                            juridiques peuvent être complexes et déroutantes. C'est pourquoi notre équipe d'avocats
                            expérimentés est là pour représenter nos clients [...]</div>
                        <div class="dcg-text" style="background-size: cover;">Lire plus</div>
                        <div class="dcg-overlay" style="background-size: cover;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-bgcolor="#143a33" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">
                    <h2>
                        Nos valeurs
                    </h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Excellence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Relation Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Intégrité &
                                Collaboration</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <p>LG Avocats se distingue par son engagement constant envers l'excellence juridique. Chaque
                                membre de notre équipe est reconnu pour sa compétence et son dévouement à assurer les
                                meilleurs résultats pour nos clients.</p>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <p>Nous attachons une grande importance à la relation client, en nous efforçant de
                                comprendre les besoins de nos clients et de leur offrir un accompagnement personnalisé
                                tout au long du processus juridique.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <p>Notre cabinet est fondé sur des principes d'intégrité, de transparence et d'éthique. Nous
                                agissons dans le meilleur intérêt de nos clients tout en respectant les normes
                                professionnelles les plus élevées.</p>
                            <p>Nous croyons fermement au pouvoir de la collaboration et travaillons en partenariat avec
                                nos clients pour atteindre des solutions juridiques efficaces et durables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jarallax image-container col-md-6 pull-right">
            <img src="assets/images/background/9.jpg" class="jarallax-img" alt="">
        </div>
    </section>


    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Notre équipe</h2>
                    <div class="small-border"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="assets/images/team/1.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="{{route('team1')}}">Paul Lazard GBILIMOU</a></h4>
                        Avocat à la cour
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".4s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="assets/images/team/2.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="{{route('team2')}}">Thierno DIALLO</a></h4>
                        Avocat à la cour
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".6s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="assets/images/team/3.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Mamaïssata CAMARA</a></h4>
                        Collaboratrice Juridique
                    </div>
                </div>
            </div>
            <p class="text-center"> <a href="{{route('about')}}"> <span class="p-title wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight; background-color:black;padding:10px">Toute
                        l'équipe <i class="fa fa-arrow-right"></i></span></a>
            </p>

        </div>
    </section>
    <!-- <section aria-label="section" class="jarallax text-light">
        <img src="assets/images/background/3.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-light">
                        <h2>Témoignages</h2>
                        <div class="small-border"></div>
                    </div>
                    <div class="owl-carousel owl-theme" id="testimonial-carousel">
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Trustworthy lawyer</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Quality lawyer service</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Top lawyer listed</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Michael, Apple</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Great services</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Easy to claim</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Excellent support</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Reliable lawyer</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Michael, Apple</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>Five-star services</h3>
                                    <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur
                                        quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                    <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Actualités recentes</h2>
                        <div class="small-border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="m">10</div>
                                <div class="d">NOV</div>
                            </div>
                            <div class="post-image">
                                <img alt="" src="assets/images/news/1.jpg">
                            </div>
                            <div class="post-text">
                                <span class="p-tagline">Compétition</span>
                                <h4><a href="news-single.html">La liste des finalistes des Lawyer European
                                        Awards<span></span></a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <span class="p-author">Fynley Wilkinson</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="m">15</div>
                                <div class="d">NOV</div>
                            </div>
                            <div class="post-image">
                                <img alt="" src="assets/images/news/2.jpg">
                            </div>
                            <div class="post-text">
                                <span class="p-tagline">Entreprises</span>
                                <h4><a href="news-single.html">Six entreprises qui donnent le ton<span></span></a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <span class="p-author">Fynley Wilkinson</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="m">20</div>
                                <div class="d">NOV</div>
                            </div>
                            <div class="post-image">
                                <img alt="" src="assets/images/news/3.jpg">
                            </div>
                            <div class="post-text">
                                <span class="p-tagline">Cabinet</span>
                                <h4><a href="news-single.html">En matière de fusions de cabinets
                                        d’avocats<span></span></a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <span class="p-author">Fynley Wilkinson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</div>

@endsection