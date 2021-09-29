    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
              <div class="content">
                <h3>{{ ($titre[1]->titre) }}</h3>
                <p>
                  {{ ($titre[0]->description) }}
                </p>
                <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">

                  @foreach ($about_emoji as $item)

                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                      <i class="{{ ($item->emoji) }}"></i>
                      <h4>{{ ($item->titre) }}</h4>
                      <p>{{ ($item->description) }}</p>
                    </div>
                    
                  @endforeach

              </div><!-- End .content-->
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->