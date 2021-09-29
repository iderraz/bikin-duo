  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>{{ ($titre[0]->titre) }}</h1>
      <h2>{{ ($titre[0]->description) }}</h2>
      <a href="#about" class="btn-get-started scrollto">{{ ($section[0]->contenu) }}</a>
      <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->