@extends('layouts.app')

@section('content')

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs" style="margin-top: 0px;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Gerer les Newsletters</h2>

        </div>

    </div>
</section><!-- End Contact Section -->
@if($message =Session::get('success'))
<div class="container alert alert-success" role="alert" style="margin-top:50px;">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span
            class="sr-only">Close</span></button>
    <strong>Effectué !</strong>&nbsp;&nbsp;{{$message}}.
</div>
@elseif($message =Session::get('error'))
<div class="container alert alert-danger" role="alert" style="margin-top:50px;">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span
            class="sr-only">Close</span></button>
    <strong>Oops!</strong>&nbsp;&nbsp;{{$message}}.
</div>

@endif


<!-- ======= Contact Section ======= -->
<section id="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
        <div class="section-header">
            <h3>Partager une information</h3>
        </div>

        <div class="row">
            <div class="col-lg-12 php-email-form">
                <form action="{{route('sendNewletters')}}" method="post" enctype="multipart/form-data" role="form"
                    style="padding:50px;">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet"
                            data-rule="minlen:4" required="true" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" id="subject" placeholder="Titre"
                            data-rule="minlen:4" required="true" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <label for="img">Fichier joint (Optionnel)</label>
                    <div class="form-group card" style="padding:20px;">
                        <input type="file" id="file-simple1" name="fichier1"
                            accept="image/png, image/jpeg,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        <input type="hidden" name="file" class="form-control" id="dest1">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-success">Envoyer</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Visiteurs</h3>
        </div>
        <div class="php-email-form" style="padding:30px; ">
            <table id="daTable" class="table table-striped table-bordered" style="width:100%;">
                <thead class="bg-dark" style="color:white">
                    <tr style="text-align:center ;">
                        <th>No</th>
                        <th>Email visiteurs</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visitors as $key => $visitor)
                    <tr>
                        <td>{{$visitor->id_visiteur}}</td>
                        <td>{{$visitor->email_visiteur}}</td>
                        <td style="width:10px;text-align:center"><a
                                href="{{route('deleteVisitor',$visitor->id_visiteur)}}"><button
                                    class="btn btn-danger"><i class="fa fa-trash"></i> </button></a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

    </div>

    </div>
</section><!-- End Contact Section -->


@endsection