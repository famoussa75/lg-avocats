<div class="attorna-mobile-header-wrap">
    <div class="attorna-mobile-header attorna-header-background attorna-style-slide attorna-sticky-mobile-navigation"
        id="attorna-mobile-header">
        <div class="attorna-mobile-header-container attorna-container clearfix">
            <div class="attorna-logo attorna-item-pdlr">
                <div class="attorna-logo-inner">
                    <a class="" href="{{route('accueil')}}"><img
                            src="{{URL::to('/')}}/attorna-assets/images/logo-white.png" alt="" width="370"
                            height="65" title="logo-light" /></a>
                </div>
            </div>
            <div class="attorna-mobile-menu-right">
                <div class="attorna-main-menu-search" id="attorna-mobile-top-search">
                    <i class="fa fa-search"></i>
                </div>
                <div class="attorna-top-search-wrap">
                    <div class="attorna-top-search-close"></div>

                    <div class="attorna-top-search-row">
                        <div class="attorna-top-search-cell">
                            <form role="search" method="get" class="search-form"
                                action="https://demo.goodlayers.com/attorna/demo2/">
                                <input type="text" class="search-field attorna-title-font" placeholder="Recherche"
                                    value="" name="s" />
                                <div class="attorna-top-search-submit">
                                    <i class="fa fa-search"></i>
                                </div>
                                <input type="submit" class="search-submit" value="Recherche" />
                                <div class="attorna-top-search-close">
                                    <i class="icon_close"></i> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="attorna-mobile-menu">
                    <a class="attorna-mm-menu-button attorna-mobile-menu-button attorna-mobile-button-hamburger"
                        href="#attorna-mobile-menu"><span></span></a>
                    <div class="attorna-mm-menu-wrap attorna-navigation-font" id="attorna-mobile-menu"
                        data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('accueil') }}">Accueil</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('ask-plaide') }}">ASK plaide</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('about') }}">Le cabinet</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('expertises') }}">Expertises</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('equipe') }}">L'équipe</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('blog') }}">Actualités</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6948">
                                <a href="{{ route('contact') }}">Contactez - nous</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>