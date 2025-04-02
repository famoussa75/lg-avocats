@extends('pages.utils.layout')

@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-white">
        <img src="assets/images/background/subheader.jpg" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>À propos de nous</h1>
                        <p>Réputation. Respect. Résultat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section aria-label="section" data-bgcolor="#ffffff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h2 class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">À
                        Propos de Nous</h2>
                    <p class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;text-align:justify">
                        LG Avocats est un cabinet juridique de premier plan offrant une gamme complète de services
                        juridiques et de conseil. Notre équipe d'avocats expérimentés se consacre à fournir des
                        solutions juridiques novatrices et efficaces à nos clients.</p>
                    <p class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;text-align:justify">
                        Nous sommes fiers d'offrir des services de conseil juridique personnalisés dans divers domaines
                        du droit. Que ce soit pour des questions de droit commercial, de droit du travail, de droit des
                        sociétés ou de droit de la famille, notre équipe est là pour vous accompagner et vous guider
                        tout au long du processus juridique. Nous comprenons que chaque situation est unique et nous
                        nous efforçons de fournir des conseils et des solutions adaptées à vos besoins spécifiques.</p>

                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="de-images">
                        
                        <img class="di-big img-fluid" src="assets/images/misc/d1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <p class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;text-align:justify">En
                        plus de nos services de conseil, nous offrons également une assistance complète à nos clients.
                        Que vous ayez besoin d'aide pour rédiger des contrats, pour négocier des accords commerciaux ou
                        pour résoudre des litiges, notre équipe d'avocats expérimentés est là pour vous soutenir à
                        chaque étape du processus. Notre objectif est de vous aider à prendre des décisions éclairées et
                        à protéger vos intérêts juridiques.</p>
                    <p class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;text-align:justify">
                        Lorsque vous êtes confronté à un litige ou à une situation juridique complexe, notre équipe de
                        défense est prête à vous représenter de manière agressive et efficace. Que ce soit devant les
                        tribunaux ou lors de négociations, nous mettons en œuvre notre expertise juridique pour protéger
                        vos droits et défendre vos intérêts. Nous nous engageons à obtenir les meilleurs résultats pour
                        nos clients et à résoudre les litiges de manière juste et équitable.</p>
                    <p class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;text-align:justify">Enfin,
                        en tant que cabinet juridique de premier plan, nous sommes fiers de notre capacité à représenter
                        nos clients dans une variété de contextes juridiques. Que vous soyez une entreprise, un
                        particulier ou une organisation, nous sommes là pour vous représenter et faire valoir vos
                        droits. Notre équipe d'avocats expérimentés possède une vaste expérience dans la représentation
                        de clients dans des affaires juridiques complexes et nous mettrons tout en œuvre pour obtenir
                        les meilleurs résultats pour vous.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- <section data-bgcolor="#143a33" class="text-light">
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
    </section> -->
    <hr>
    <section aria-label="section" >
        <div class="container" >
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
                            <img src="assets/images/team/4.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Maciré Camara</a></h4>
                        Collaboratrice Juridique
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".4s">
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
                            <img src="assets/images/team/5.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Cécé Elvis GBILIMOU</a></h4>
                        Collaborateur Juridique
                    </div>
                </div> -->
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
                            <img src="assets/images/team/6.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Pépé Théodore GBILIMOU</a></h4>
                        Collaborateur Juridique
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
                            <img src="assets/images/team/7.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Jean Claude Loua</a></h4>
                        Collaborateur Juridique
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
                            <img src="assets/images/team/8.jpg" class="fp-image img-fluid" alt="">
                        </div>
                        <h4><a href="#">Agnès N'woka Théa</a></h4>
                        Collaboratrice Juridique
                    </div>
                </div>
            </div>
        </div>
    </section>
  
</div>
<!-- content close -->

@endsection