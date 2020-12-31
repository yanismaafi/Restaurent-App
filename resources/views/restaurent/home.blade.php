@extends('layouts.app')

@section('content')

<!-- ======= About Section ======= -->

<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="assets/img/about.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Why Us Section ======= -->

  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
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



  <!-- ======= Testimonials Section ======= -->

  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>What they're saying about us</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->



  <!-- ======= Gallery Section ======= -->

  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
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

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
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
        <p>Our Proffesional Chefs</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
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
            <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
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
            <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
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