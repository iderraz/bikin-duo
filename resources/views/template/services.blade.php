    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ ($titre[3]->titre) }}</h2>
            <p>{{ ($titre[3]->description) }}</p>
          </div>
  
          <div class="row">

              @foreach ($service_card as $item)

              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><i class="{{ ($item->emoji) }}"></i></div>
                  <h4 class="title"><a href="">{{ ($item->titre) }}</a></h4>
                  <p class="description">{{ ($item->description) }}</p>
                </div>
              </div>
                  
              @endforeach
  
          </div>
  
        </div>
      </section><!-- End Services Section -->