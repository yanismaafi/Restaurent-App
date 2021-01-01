@extends('layouts.app')

@section('content')

<!-- ======= About Section ======= -->

<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{ asset('img/about.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>A propos de RestaurentApp</h3> <br><br>
          <p class="font-italic">
            RestaurentApp est un restaurent familliale, idéal pour se reunir et partager un bon moment.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Le restaurent est situé dans un endroit calme et agréable ce qui fait de lui le meilleur endroit pour s’évader</li>
            <li><i class="icofont-check-circled"></i> Tous nos produits sont frais, nos plats sont confectionnés avec des ingrédients locaux de saison.</li>
          </ul>
          <p>
            Le restaurant RestaurentApp propose une carte courte, sobre, qui s'articule autour de produits frais. La quasi-totalité des plats proposés, qu'il s'agisse des entrées, plats ou desserts sont faits maison. 
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= About us Section ======= -->

  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pourquoi nous ?</h2>
        <p>Pourquoi choisir RestaurentApp</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>01</span>
            <h4>Lieu calme et agréable</h4>
            <p>Le restaurent est situé dans un endroit calme et agréable ce qui fait de lui le meilleur endroit pour s’évader</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span>02</span>
            <h4>Produits de qualités</h4>
            <p>Tous nos produits sont frais, nos plats sont confectionnés avec des ingrédients locaux de saison.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span>03</span>
            <h4> Service profesionnel</h4>
            <p>Miolestae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->


  <!-- ======= Menu Section ======= -->

  @if ($dishes_categories->count() > 0)

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Découvrez notre savoureux Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              {{-- <li data-filter="*" class="filter-active">All</li> --}}
              @foreach ($dishes_categories as $category)

                <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>

              @endforeach
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($dishes as $dish)

            <div class="col-lg-6 menu-item filter-{{ str_replace(' ', '_' ,$dish->category->name) }}">
              <img src="{{ Voyager::image( $dish->image ) }}" class="menu-img" alt="{{ $dish->name }}">
              <div class="menu-content">
                <a href="#menu">{{ $dish->name }}</a> <span>{{ $dish->price }} DA.</span>
              </div>
              <div class="menu-ingredients">
                {{ $dish->ingredient }}
              </div>
            </div> 
            
          @endforeach

        </div>

      </div>
    </section><!-- End Menu Section -->
           
  @endif


 
  <!-- ======= Book a Table Section ======= -->
  @include('includes.contact.reservation')




  <!-- ======= Gallery Section ======= -->

  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Galerie</h2>
        <p>Quelques photos de notre restaurant</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->
  


  <!-- ======= Chefs Section ======= -->

  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Chefs</h2>
        <p>Nos Chefs Professionnels</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Master Chef</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('img/chefs/chefs-3.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>Cook</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->


  <!-- ======= Contact Section ======= -->
  @include('includes.contact.contact')

    
@endsection