@extends('pages.utils.layout')

@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
  <!-- section begin -->
  <section id="subheader" class="jarallax text-white">
        <img src="{{URL::to('/')}}/assets/images/background/subheader.jpg" class="jarallax-img" alt="">
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
                <div class="col-md-8">
                    <div class="blog-read">
                        <h4>{{$article[0]->titre}}</h4>
                        @if($article[0]->image_article=='')
                        @else
                        <img alt="" src="{{URL::to('/')}}/{{$article[0]->image_article}}" class="img-fullwidth">
                        @endif
                        <div class="post-text" style="height:750px;overflow: auto;">
                              <?php echo $article[0]->contenu; ?>
                              @if($article[0]->contenu_pdf)
                              <object data="{{ URL::to('/') }}/{{ $article[0]->contenu_pdf }}" type="application/pdf" width="100%" height="600px">
                                <p>Le lecteur PDF n'est pas pris en charge par votre navigateur. <a href="{{ URL::to('/') }}/{{ $article[0]->contenu_pdf }}">Cliquez ici pour télécharger le fichier PDF.</a></p>
                            </object>  

                            @else
                            @endif            
                        </div>
                      
                    </div>
                    <!-- <div class="spacer-single"></div> -->
                    <!-- <div id="blog-comment">
                        <h4>Comments (5)</h4>
                        <div class="spacer-half"></div>
                        <ol>
                            <li>
                                <div class="avatar">
                                    <img src="assets/images/misc/avatar.png" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="assets/images/misc/avatar.png" alt="" />
                                        </div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="assets/images/misc/avatar.png" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="assets/images/misc/avatar.png" alt="" />
                                        </div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="assets/images/misc/avatar.png" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            </li>
                        </ol>
                        <div class="spacer-single"></div>
                        <div id="comment-form-wrapper">
                            <h4>Leave a Comment</h4>
                            <div class="comment_form_holder">
                                <form id="contact_form" name="form1" class="form-default" method="post" action="#">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control" />
                                    <label>Email <span class="req">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control" />
                                    <div id="error_email" class="error">Please check your email</div>
                                    <label>Message <span class="req">*</span></label>
                                    <textarea cols="10" rows="10" name="message" id="message"
                                        class="form-control"></textarea>
                                    <div id="error_message" class="error">Please check your message</div>
                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>
                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Envoyer" class="btn btn-custom" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div id="sidebar" class="col-md-4">
                    <div class="widget widget-post">
                        <h4>Articles récents</h4>
                        <div class="small-border"></div>
                        <ul>
                            @foreach($recents as $r)
                            <li><span class="date">{{ date('d-M', strtotime($r->created_at)) }}</span><a href="#">{{$r->titre}}</a>
                            </li>
                            @endforeach
                         
                        </ul>
                    </div>
                
                </div>
                
            </div>
        </div>
    </section>
</div>
<!-- content close -->


@endsection