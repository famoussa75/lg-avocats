@extends('pages.layout')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="margin-top: 130px;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Service</h2>
            <ol>
                <li><a href="{{route('accueil')}}">Home</a></li>
                <li>Service</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section class="portfolio-details">
    <div class="container">

        <div class="portfolio-details-container">

            <div class="owl-carousel portfolio-details-carousel">
                <img src="public/assets/img/services/service-7.jpg" class="img-fluid" alt="">

            </div>

        </div>

        <div class="portfolio-description">
            <h2>This is an example of portfolio detail</h2>
            <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->



@endsection