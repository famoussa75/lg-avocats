@extends('pages.utils.layout') @section('content')

<div class="attorna-page-title-wrap attorna-center-align" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('attorna-assets/images/banniere-fixe.jpg');background-size:cover;padding-bottom:80px">
    <div class="attorna-header-transparent-substitute"></div>
    <div class="attorna-page-title-overlay"></div>
    <div class="attorna-page-title-container attorna-container">
        <div class="attorna-page-title-content attorna-item-pdlr">
            <h1 class="attorna-page-title">Notre équipe</h1>
            <div class="attorna-page-caption"></div>
        </div>
    </div>
</div>
<div class="attorna-page-wrapper" id="attorna-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 85px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #e9e9e9 ;">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-size: cover; background-position: center center; height: 1487.66px; transform: translate(0px, -75.4px);"
                    data-parallax-speed="0.2"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                        <div
                            class="row gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background">
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20 gdlr-core-column-first  gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="{{route('ask')}}"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/kante.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/kante.jpg 400w, {{URL::to('/')}}/attorna-assets/images/kante.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="{{route('ask')}}">Aboubacar Sidiki Kante
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Avocat à la cour</div>
                                        <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/aboubacar-sidiki-kante-89289781"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/cedric.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/cedric.jpg 400w, {{URL::to('/')}}/attorna-assets/images/cedric.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Roger Cédric junior SAHIÉ
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Of Counsel</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/cedric-junior-28463954"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/soro.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/soro.jpg 400w, {{URL::to('/')}}/attorna-assets/images/soro.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Soro Coulibaly, ACIArb
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Senior Legal Counsel</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/soro-coulibaly-aciarb-adm-a-5973bb102"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                            </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="{{route('maecha')}}"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/maecha.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/maecha.jpg 400w, {{URL::to('/')}}/attorna-assets/images/maecha.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Riwad Maecha
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Of Counsel</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="#"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="{{route('maty')}}"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/mariama.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/mariama.jpg 400w, {{URL::to('/')}}/attorna-assets/images/mariama.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="{{route('maty')}}">Dr Mariama Maty Diaby
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Of Counsel</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="#"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/magass.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/magass.jpg 400w, {{URL::to('/')}}/attorna-assets/images/magass.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Jean François Magassouba
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaborateur Juriste</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/jean-fran%C3%A7ois-sidiki-magassouba-4a3056262"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/cisse.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/cisse.jpg 400w, {{URL::to('/')}}/attorna-assets/images/cisse.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Amara Cisse
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaborateur Juriste</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/amara-cisse-b1530a129"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/oulare.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/oulare.jpg 400w, {{URL::to('/')}}/attorna-assets/images/oulare.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Sayon Oularé
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaborateur Juriste</div>
                                            <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/sayon-oularé-2b7a6b161"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/maladho.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/maladho.jpg 400w, {{URL::to('/')}}/attorna-assets/images/maladho.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Maladho Kaba
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaboratrice Juriste</div>
                                            
                                        <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/maladho-kader-kaba-159328208"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/saliou.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/saliou.jpg 400w, {{URL::to('/')}}/attorna-assets/images/saliou.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Mamadou Saliou Balde
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaborateur Juriste</div>
                                           
                                        <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/mamadou-saliou-balde-040017162"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="gdlr-core-personnel-list-column  gdlr-core-column-20   gdlr-core-item-pdlr">
                                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix"
                                    style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                    <div
                                        class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                        <a href="#"><img
                                                src="{{URL::to('/')}}/attorna-assets/images/toure.jpg"
                                                width="599" height="551"
                                                srcset="{{URL::to('/')}}/attorna-assets/images/toure.jpg 400w, {{URL::to('/')}}/attorna-assets/images/toure.jpg 599w"
                                                sizes="(max-width: 767px) 100vw, (max-width: 1150px) 33vw, 383px"
                                                alt=""></a></div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                        <h3 class="gdlr-core-personnel-list-title"
                                            style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;">
                                            <a href="#">Karamo Oulén touré
                                                </a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption"
                                            style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">
                                            Collaborateur Juriste</div>
                                        

                                        <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                                                style="padding-bottom: 0px ;"><a href="https://www.linkedin.com/in/karamo-oulén-touré-567195273"
                                                    target="_blank" class="gdlr-core-social-network-icon"
                                                    title="linkedin"><i class="fa fa-linkedin"></i></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection