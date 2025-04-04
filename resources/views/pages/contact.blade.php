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
                        <h1>Contactez - nous</h1>
                        <p>Réputation. Respect. Résultat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section aria-label="section">
        <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-size: cover;">
             {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
         @endif
         @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-size: cover;">
             {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
         @endif
            <div class="row">
                <div class="col-md-8 text-light" style="padding:20px" data-bgcolor="#143a33">
                    <h3>Envoyez-nous un message.</h3>
                    <form name="contactForm" id="contact_form" class="form-border" action="{{route('sendMessage')}}" method="post">
                        @csrf
                        <div class="field-set">
                            <input type="text" name="nom" id="name" class="form-control"
                                placeholder="Votre nom complet" required/>
                        </div>
                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Votre Email" required/>
                        </div>
                        <div class="field-set">
                            <input type="text" name="objet" id="phone" class="form-control"
                                placeholder="Objet" required/>
                        </div>
                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="spacer-half"></div>
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong style="color:red">Veuillez confirmer que vous n'êtes pas un robot.</strong>
                            </span>
                        @endif
                         <div class="g-recaptcha" data-sitekey="6LcfopcpAAAAAFDuR8-0b7FQWkjtDZw51LsjHbJy"></div>
                        <div id="submit">
                            <input type="submit"  value="Envoyer" class="btn btn-custom" />
                        </div>
                        <div id="mail_success" class="success">Your message has been sent successfully.</div>
                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="map-section">
                        <iframe style="border:0; width: 100%; height: 350px;"
                            src="https://maps.google.com/maps?q=9.6001393,%20-13.6413479&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" allowfullscreen=""></iframe>
                    </div>
                    <h3>Nos locaux</h3>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>Kipé, sur la T2, Commune de Ratoma, Conakry</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+224 611 58 09 19</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                href="mailto:contact@lg-avocatsgn.com">contact@lg-avocatsgn.com</a></span>
                       
                    </address>
                </div>

            </div>
        </div>
    </section>


</div>
<!-- content close -->
@endsection