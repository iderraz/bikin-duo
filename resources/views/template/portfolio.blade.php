    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ ($titre[4]->titre) }}</h2>
            <p>{{ ($titre[4]->description) }}</p>
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container">

            @foreach ($portfolio_image as $item)

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('assets/img/portfolio/'. $item->url)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ ($item->description) }}</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset('assets/img/portfolio/'. $item->url)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $item->description }}"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->