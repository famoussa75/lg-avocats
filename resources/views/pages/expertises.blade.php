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
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>Domaines d'expertises</h1>
                        <p>Réputation. Respect. Résultat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mb30" style="background-size: cover;">
                    <div class="de-card-poster" style="background-size: cover;">
                        <a class="d-overlay" href="{{route('service-1')}}">
                            <div class="d-content" style="background-size: cover;">
                                <h3><i class="id-color icofont-group"></i>Conseil</h3>
                                <div class="d-text" style="background-size: cover;">
                                Notre équipe d'avocats experts en droit commercial offre une gamme complète de services de conseil pour répondre aux besoins des entreprises [...]
                                </div>
                                <span href="#" class="btn-main">Lire plus</span>
                            </div>
                        </a>
                        <div class="d-image filter-sephia-30"
                            data-bgimage="url(assets/images/practice-areas/1.jpg) center"
                            style="background: url(&quot;images/practice-areas/1.jpg&quot;) center center / cover;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb30" style="background-size: cover;">
                    <div class="de-card-poster" style="background-size: cover;">
                        <a class="d-overlay" href="{{route('service-2')}}">
                            <div class="d-content" style="background-size: cover;">
                                <h3><i class="id-color icofont-light-bulb"></i>Assistance</h3>
                                <div class="d-text" style="background-size: cover;">
                                Nous comprenons que le droit du travail peut être complexe et difficile à naviguer. C'est pourquoi nous sommes là pour aider nos clients [...]
                                </div>
                                <span href="#" class="btn-main">Lire plus</span>
                            </div>
                        </a>
                        <div class="d-image filter-sephia-30"
                            data-bgimage="url(assets/images/practice-areas/2.jpg) center"
                            style="background: url(&quot;images/practice-areas/2.jpg&quot;) center center / cover;">
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 mb30" style="background-size: cover;">
                    <div class="de-card-poster" style="background-size: cover;">
                        <a class="d-overlay" href="{{route('service-4')}}">
                            <div class="d-content" style="background-size: cover;">
                                <h3><i class="id-color icofont-mining"></i>Défense</h3>
                                <div class="d-text" style="background-size: cover;">
                                Nos avocats sont là pour vous offrir une représentation solide dans tous les aspects des litiges commerciaux, des contrats et du droit des sociétés [...]
                                </div>
                                <span href="#" class="btn-main">Lire plus</span>
                            </div>
                        </a>
                        <div class="d-image filter-sephia-30"
                            data-bgimage="url(assets/images/practice-areas/4.jpg) center"
                            style="background: url(&quot;images/practice-areas/4.jpg&quot;) center center / cover;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb30" style="background-size: cover;">
                    <div class="de-card-poster" style="background-size: cover;">
                        <a class="d-overlay" href="{{route('service-4')}}">
                            <div class="d-content" style="background-size: cover;">
                                <h3><i class="id-color icofont-law-order"></i>Répresentation</h3>
                                <div class="d-text" style="background-size: cover;">
                                Nous comprenons que les affaires juridiques peuvent être complexes et déroutantes. C'est pourquoi notre équipe d'avocats expérimentés est là pour représenter nos clients [...]
                                </div>
                                <span href="#" class="btn-main">Lire plus</span>
                            </div>
                        </a>
                        <div class="d-image filter-sephia-30"
                            data-bgimage="url(assets/images/practice-areas/3.jpg) center"
                            style="background: url(&quot;images/practice-areas/3.jpg&quot;) center center / cover;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- content close -->

@endsection