@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="margin-top: 0px; ">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Gestion actualités</h2>

        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3>Mise à jour</h3>
        </div>
        <div class="php-email-form">
            <form action="{{route('updateArticle',$article[0]->id_article)}}" method="post" role="form" class=""
                enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="titre" class="form-control" value="{{$article[0]->titre}}" id="name"
                            placeholder="Titre *" data-rule="minlen:4"
                            data-msg="Veuillez saisir au moin 4 caractères" />
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="file" accept="image/png, image/jpeg, image/jpg"
                            name="image_article" id="formFile">
                        <input type="hidden" name="id_article" value="{{$article[0]->id_article}}">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="contenu" rows="5"
                        placeholder="Contenu de l'article *">{{$article[0]->contenu}}</textarea>
                </div>

                <div class="text-center"><button type="submit">Modifier</button></div>
            </form>
        </div>


    </div>
</section><!-- End Contact Section -->




@endsection